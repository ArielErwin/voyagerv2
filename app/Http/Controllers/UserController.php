<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use Illuminate\Support\Facades\Auth;
class UserController extends VoyagerBaseController
{
    public function index(Request $request)
{
    // Verificar si el usuario autenticado es un administrador
    if (Auth::user()->role->name === 'admin') {
        // Si es admin, devolver todos los usuarios
        $users = User::all();
    } else {
        // Si es un usuario normal, devolver solo su propio usuario
        $users = User::where('id', Auth::id())->get();
    }

    return Voyager::view('voyager::index', compact('users'));
}

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Aplicar la política explícitamente para verificar si el usuario puede actualizar su perfil
        if (Auth::user()->cannot('update', $user)) {
            \Log::info('Acción no autorizada. Usuario: ' . Auth::user()->id . ' - Intentó editar: ' . $user->id);
            abort(403, 'Unauthorized action.');
        }
        // Validar la contraseña actual
        $request->validate([
            'current_password' => ['required', function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    $fail('La contraseña actual no es correcta.');
                }
            }],
            'password' => ['nullable', 'confirmed', 'min:3'], // Validar nueva contraseña y confirmación
        ]);

        // Si se ha ingresado una nueva contraseña, actualizarla
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Actualizar otros campos
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('voyager.users.index')->with([
            'message'    => 'Usuario actualizado correctamente',
            'alert-type' => 'success',
        ]);
    }
}


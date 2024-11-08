<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        
        return view('vendor.voyager.auth.register'); // Cambia esto si la vista está en una ubicación diferente
    }

    public function register(Request $request)
{
    \Log::info('Registro en proceso', $request->all());

    try {
        $this->validator($request->all())->validate();
        \Log::info('Validación completada.');
    } catch (\Illuminate\Validation\ValidationException $e) {
        \Log::error('Errores de validación', ['errors' => $e->validator->errors()->all()]);
        return redirect()->back()->withErrors($e->validator->errors())->withInput();
    }

    $user = $this->create($request->all());

    return redirect('/admin/login')->with('success', 'Usuario registrado correctamente. Espera la aprobación del administrador.');
}


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
    }

    protected function create(array $data)
{
    try {
        \Log::info('Creando usuario: ', $data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2, // Asigna el rol que necesites
        ]);
    } catch (\Exception $e) {
        // Registra el error en los logs
        \Log::error('Error al crear el usuario: ' . $e->getMessage());
        throw $e; // Opcionalmente puedes lanzar la excepción
    }
}
}

<?php

namespace App\Http\Controllers;

use TCG\Voyager\Http\Controllers\VoyagerUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomUserController extends VoyagerUserController
{
    public function update(Request $request, $id)
    {
        // Verificar si el usuario autenticado puede actualizar este perfil
        if (Auth::user()->cannot('update', User::findOrFail($id))) {
            abort(403, 'Unauthorized action.');
        }

        return parent::update($request, $id); // Llama al método original de Voyager si pasa la verificación
    }
}

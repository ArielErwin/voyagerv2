<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use App\Notifications\CustomResetPassword; 
use App\Models\User;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // Buscamos al usuario
        $user = User::where('email', $request->email)->first();

        // Si el usuario existe, generamos un token y enviamos la notificación
        if ($user) {
            $token = Password::createToken($user); // Generamos el token
            $user->notify(new CustomResetPassword($token)); // Enviamos la notificación
        }

        return back()->with('status', 'Se ha enviado el enlace de restablecimiento de contraseña a su correo electrónico.');
    }
}

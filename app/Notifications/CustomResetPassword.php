<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;

class CustomResetPassword extends ResetPasswordNotification
{
    protected function buildMailMessage($url)
    {
        return (new MailMessage)
            ->subject('Notificación de Restablecimiento de Contraseña') // Cambia el asunto
            ->greeting('Hola')
            ->line('Recibiste este correo porque solicitaste restablecer la contraseña de tu cuenta.') // Mensaje de bienvenida
            ->action('Restablecer Contraseña', $url) // Botón para restablecer
            ->line('Este enlace de restablecimiento de contraseña expirará en ' . config('auth.passwords.'.config('auth.defaults.passwords').'.expire') . ' minutos.')
            ->line('Si no solicitaste un restablecimiento de contraseña, no se requiere ninguna acción adicional.') // Mensaje de cierre
            ->salutation('Saludos, El equipo de tu aplicación');
            
        }
}


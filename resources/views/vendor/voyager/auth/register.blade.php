<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        .container {
            max-width: 400px;
            margin: 040px auto;
            padding: 3rem;
            background-color: mediumslateblue;
            border-radius: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .success {
            color: green;
            margin-bottom: 1rem;
        }
        .error {
            color: red;
            margin-bottom: 1rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
        }
        .form-input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
        }
        .form-button {
            background-color: #22a7f0; /* Color del botón */
            color: white;
            padding: 0.5rem;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-button:hover {
            background-color: #4338ca; /* Color del botón al pasar el ratón */
        }
        .login-link {
            margin-top: 1rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Registrar Usuario</h2>

        <!-- Mensaje de éxito -->
        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif
        <!-- Mensaje de error general -->
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de registro -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nombre -->
            <div class="form-group">
                <label for="name">Nombre</label>
                <input id="name" name="name" type="text" class="form-input" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Correo electrónico -->
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input id="email" name="email" type="email" class="form-input" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" name="password" type="password" class="form-input" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirmar contraseña -->
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input id="password_confirmation" name="password_confirmation" type="password" class="form-input" required>
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Botón de registrar -->
            <div class="form-group">
                <button type="submit" class="form-button">Registrarse</button>
            </div>
        </form>

        <!-- Link para iniciar sesión -->
        <p class="login-link">
            ¿Ya tienes una cuenta? <a href="{{ url('/admin/login') }}">Inicia sesión</a>
        </p>
    </div>

</body>
</html>

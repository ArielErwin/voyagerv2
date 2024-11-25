{{-- resources/views/vendor/voyager/dimmers.blade.php --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
        }
        .logo-container {
            text-align: center;
            margin-top: 50px;
        }
        .logo-container img {
            max-width: 100%;
            height: auto;
        }
        .titulo-principal{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="titulo-principal">GESTIÓN DOCUMENTAL</h1>
    <div class="logo-container">
        <img src="{{ asset('images/logo-s-f.png') }}" alt="Logo de la Institución">
    </div>
</body>
</html>

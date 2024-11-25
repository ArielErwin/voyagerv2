<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte PDF</title>
    <style>
        @page { 
            size: letter; 
            margin: 20px; 
        }
        body { 
            font-family: Arial, sans-serif; 
            font-size: 10px;
        }
        h1 { 
            text-align: center; 
            font-size: 16px;
            margin-bottom: 20px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            table-layout: fixed;
        }
        table, th, td { 
            border: 1px solid black; 
        }
        th, td { 
            padding: 5px; 
            text-align: left;
            word-wrap: break-word;
            font-size: 10px;
        }
        th { 
            background-color: #f2f2f2; 
        }
        
        /* Limitar el ancho de columnas para evitar desbordamiento */
        .col-id { width: 5%; }
        .col-nro_carta { width: 10%; max-width: 100px; }  
        .col-procedencia { width: 15%; max-width: 100px; }
        .col-detalle { width: 20%; }
        .col-archivo { width: 25%; }
        .col-rd_providencia, .col-rd_carta, .col-estado { width: 10%; }
        .col-created-at, .col-updated-at { width: 10%; }

        /* Estilo para añadir un salto de página */
        .page-break {
            page-break-after: always;
        }
        .col-nro_carta{
            max-width: 120px;
        }
        .titulo-reporte {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 24px;
            text-transform: uppercase;
            margin-bottom: 20px;
            text-align: center;
            width: 100%; 
            position: relative;  
        }
        .titulo-reporte .titulo-texto {
            position: relative;
            top: -40px;                        /* Ajusta este valor hasta que veas que sube el texto */
            font-size: 15px;                  /* Ajusta el tamaño de la fuente si es necesario */
            text-align: center;
            margin: 0;
        }
        .titulo-reporte .escudo {
            width: 80px;       /* Ajusta el tamaño de los escudos aquí */
            height: auto;
            margin: 0 65px;    /* Espacio entre el título y los escudos */
        }

    </style>
</head>
<body>
    <h1 class="titulo-reporte">
        <img src="{{ public_path('images/uatf.png') }}" alt="Escudo Izquierda" class="escudo">
        <span class="titulo-texto">Reporte de {{ strtoupper($slug) }}</span>
        <img src="{{ public_path('images/logo-s-f.png') }}" alt="Escudo Derecha" class="escudo">
    </h1>

    <table>
        <thead>
            <tr>
                <th class="col-id">ID</th>
                <th class="col-nro_carta">Nro Carta</th>
                <th class="col-procedencia">Procedencia</th>
                <th class="col-detalle">Detalle</th>
                <th class="col-archivo">Archivo</th>
                <th class="col-rd_providencia">RD Providencia</th>
                <th class="col-rd_carta">RD Carta</th>
                <th class="col-estado">Estado</th>
                <th class="col-created-at">Creado</th>
                <th class="col-updated-at">Actualizado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nro_carta ?? 'N/A' }}</td>
                    <td>{{ $item->procedencia ?? 'N/A' }}</td>
                    <td>{{ strip_tags($item->detalle ?? 'N/A') }}</td>
                    <td>{{ !empty($item->archivo) && $item->archivo !== '[]' ? $item->archivo : 'N/A' }}</td>
                    <td>{{ $item->rd_providencia ?? 'N/A' }}</td>
                    <td>{{ $item->rd_carta ?? 'N/A' }}</td>
                    <td>{{ $item->estado ?? 'DRAFT' }}</td>
                    <td>{{ $item->created_at ? $item->created_at->format('d/m/Y H:i:s') : 'N/A' }}</td>
                    <td>{{ $item->updated_at ? $item->updated_at->format('d/m/Y H:i:s') : 'N/A' }}</td>
                </tr>
                {{-- Agregar un salto de página cada 20 registros para evitar desbordamientos --}}
                @if($loop->iteration % 20 == 0)
                    </tbody>
                </table>
                <div class="page-break"></div>
                <table>
                <thead>
                    <tr>
                        <th class="col-id">ID</th>
                        <th class="col-nro_carta">Nro Carta</th>
                        <th class="col-procedencia">Procedencia</th>
                        <th class="col-detalle">Detalle</th>
                        <th class="col-archivo">Archivo</th>
                        <th class="col-rd_providencia">RD Providencia</th>
                        <th class="col-rd_carta">RD Carta</th>
                        <th class="col-estado">Estado</th>
                        <th class="col-created-at">Creado</th>
                        <th class="col-updated-at">Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                @endif
            @endforeach
        </tbody>
    </table>
</body>
</html>

@extends('voyager::master')

@section('content')
    <div class="page-content container-fluid">
        <h1>Editar Procedencia</h1>

        <form action="{{ route('otra_procedencia') }}" method="POST">
            @csrf
            <!-- Campo para seleccionar procedencia -->
            <div class="form-group">
                <label for="procedencia">Procedencia</label>
                <select name="procedencia" class="form-control" required>
                    <option value="">Selecciona una procedencia</option>
                    <option value="carrera1">Carrera 1</option>
                    <option value="carrera2">Carrera 2</option>
                    <option value="otros">Otros</option>
                </select>
            </div>

            <!-- Campo de texto que aparece si se selecciona "OTROS" -->
            <div id="campo-otros" style="display:none;">
                <label for="otra_procedencia">Ingresa otra procedencia</label>
                <input type="text" id="otra_procedencia" name="otra_procedencia" class="form-control" />
            </div>

            <!-- Botón de guardar -->
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>

    <!-- Incluir el archivo de JavaScript personalizado -->
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection

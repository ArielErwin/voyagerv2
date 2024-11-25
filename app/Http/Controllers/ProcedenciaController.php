<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProcedenciaController extends Controller
{
    public function store(Request $request)
    {
        // Validamos los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255', // El nombre es obligatorio
            'related_table' => 'required|string',  // El nombre de la tabla relacionada
        ]);

        // Obtenemos el nombre de la tabla y el nombre del nuevo registro
        $relatedTable = $request->input('related_table');
        $nombre = $request->input('nombre');

        // Verificamos si la tabla existe en la base de datos
        if (!Schema::hasTable($relatedTable)) {
            return response()->json(['error' => 'La tabla no existe'], 400);
        }

        // Usamos reflexión para obtener el modelo correspondiente dinámicamente
        $modelClass = 'App\\Models\\' . ucfirst($relatedTable); // Construimos el nombre del modelo de manera dinámica

        // Verificamos si el modelo existe
        if (!class_exists($modelClass)) {
            return response()->json(['error' => 'El modelo no existe'], 400);
        }

        // Instanciamos el modelo correspondiente y guardamos el nuevo registro
        $model = new $modelClass();
        $model->create(['nombre' => $nombre]);

        // Devolvemos una respuesta con el nombre guardado para actualizar la lista en la vista
        return response()->json(['nombre' => $nombre], 200);
    }
}

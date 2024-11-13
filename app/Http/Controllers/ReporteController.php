<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Vicerrectorado; 
use App\Models\Rectorado;
use App\Models\Dsa;
use App\Models\Daf;
use App\Models\Full;
use App\Models\Agricolas;
use App\Models\Artes;
use App\Models\CienciasPuras;
use App\Models\CienciasSociales;
use App\Models\Derecho;
use App\Models\Economicas;
use App\Models\FacultadVicerrectorado;
use App\Models\Geologia;
use App\Models\Ingeneria;
use App\Models\Llica;
use App\Models\Medicina;
use App\Models\Minera;
use App\Models\Otros;
use App\Models\Salud;
use App\Models\TablaArtes;
use App\Models\TablaAgricolas;
use App\Models\TablaCienciasPuras;
use App\Models\TablaCienciasSociales;
use App\Models\TablaDaf;
use App\Models\TablaDerecho;
use App\Models\TablaDsa;
use App\Models\TablaEconomicas;
use App\Models\TablaFacultadVicerrectorado;
use App\Models\TablaGeologia;
use App\Models\TablaIngeneria;
use App\Models\TablaLlica;
use App\Models\TablaMedicina;
use App\Models\TablaMinera;
use App\Models\TablaRectorado;
use App\Models\TablaSalud;
use App\Models\TablaTecnologia;
use App\Models\TablaTupiza;
use App\Models\TablaUncia;
use App\Models\TablaUyuni;
use App\Models\TablaVicerrectordo;
use App\Models\TablaVillazon;
use App\Models\TablaLogica;
use App\Models\Tupiza;
use App\Models\Uncia;
use App\Models\Uyuni;
use App\Models\Villazon;

class ReporteController extends Controller
{
    public function generatePdf($slug)
    {
        // Definir los modelos de acuerdo con los nombres de cada slug
        $models = [
            'vicerrectorado' => Vicerrectorado::class,
            'rectorado' => Rectorado::class,
            'dsa' => Dsa::class,
            'daf' => Daf::class,
            'full' => Full::class,
            'agricolas' => Agricolas::class,
            'artes' => Artes::class,
            'ciencias_puras' => CienciasPuras::class,
            'ciencias_sociales' => CienciasSociales::class,
            'derecho' => Derecho::class,
            'economicas' => Economicas::class,
            'facultad_vicerrectorado' => FacultadVicerrectorado::class,
            'geologia' => Geologia::class,
            'ingeneria' => Ingeneria::class,
            'llica' => Llica::class,
            'medicina' => Medicina::class,
            'minera' => Minera::class,
            'otros' => Otros::class,
            'salud' => Salud::class,
            'tabla_artes' => TablaArtes::class,
            'tabla_agricolas' => TablaAgricolas::class,
            'tabla_ciencias_puras' => TablaCienciasPuras::class,
            'tabla_ciencias_sociales' => TablaCienciasSociales::class,
            'tabla_daf' => TablaDaf::class,
            'tabla_derecho' => TablaDerecho::class,
            'tabla_dsa' => TablaDsa::class,
            'tabla_economicas' => TablaEconomicas::class,
            'tabla_facultad_vicerrectorado' => TablaFacultadVicerrectorado::class,
            'tabla_geologia' => TablaGeologia::class,
            'tabla_ingeneria' => TablaIngeneria::class,
            'tabla_llica' => TablaLlica::class,
            'tabla_medicina' => TablaMedicina::class,
            'tabla_minera' => TablaMinera::class,
            'tabla_rectorado' => TablaRectorado::class,
            'tabla_salud' => TablaSalud::class,
            'tabla_tecnologia' => TablaTecnologia::class,
            'tabla_tupiza' => TablaTupiza::class,
            'tabla_uncia' => TablaUncia::class,
            'tabla_uyuni' => TablaUyuni::class,
            'tabla_vicerrectordo' => TablaVicerrectordo::class,
            'tabla_villazon' => TablaVillazon::class,
            'tabla_logica' => TablaLogica::class,
            'tupiza' => Tupiza::class,
            'uncia' => Uncia::class,
            'uyuni' => Uyuni::class,
            'villazon' => Villazon::class,
            // Otros modelos según tus tablas
        ];

        // Verifica que el slug proporcionado tenga un modelo asociado
        if (!isset($models[$slug])) {
            abort(404, 'Modelo no encontrado');
        }

        // Obtiene el modelo correspondiente al slug
        $modelClass = $models[$slug];

        // Obtiene los datos del modelo correspondiente
        $data = $modelClass::orderBy('id', 'asc')->get();
        //$data = $modelClass::all();

        // Genera el PDF usando la vista 'reportes/reportes.blade.php'
        $pdf = PDF::loadView('reportes.reportes', compact('data', 'slug'));

        // Muestra el PDF en el navegador
        return $pdf->stream($slug . '_reporte.pdf');
    }
}

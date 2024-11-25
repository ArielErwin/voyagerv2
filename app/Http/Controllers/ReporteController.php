<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Vicerrectorado; 
use App\Models\Rectorado;
use App\Models\Dsa;
use App\Models\Daf;

use App\Models\Artes;
use App\Models\Agricolas;
use App\Models\Economicas;
use App\Models\CienciasPuras;
use App\Models\CienciasSociales;
use App\Models\Derecho;
use App\Models\Ingenieria;
use App\Models\Geologica;
use App\Models\Minera;
use App\Models\Tecnologica;
use App\Models\Salud;
use App\Models\Medicina;
use App\Models\FacultadVicerrectorado;

use App\Models\Tupiza;
use App\Models\Uncia;
use App\Models\Uyuni;
use App\Models\Villazon;
use App\Models\Llica;

use App\Models\Full;
use App\Models\Otros;

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
            
            'artes' => Artes::class,
            'agricolas' => Agricolas::class,
            'economicas' => Economicas::class,
            'cienciaspuras' => CienciasPuras::class,
            'cienciassociales' => CienciasSociales::class,
            'derecho' => Derecho::class,
            'ingenieria' => Ingenieria::class,
            'geologica' => Geologica::class,
            'minera' => Minera::class,
            'tecnologica' => Tecnologica::class,
            'medicina' => Medicina::class,
            'salud' => Salud::class,
            'facultadvicerrectorado' => FacultadVicerrectorado::class,

            'tupiza' => Tupiza::class,
            'uncia' => Uncia::class,
            'uyuni' => Uyuni::class,
            'villazon' => Villazon::class,
            'llica' => Llica::class,
            
            'datosfull' => Full::class,
            'otros' => Otros::class,
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

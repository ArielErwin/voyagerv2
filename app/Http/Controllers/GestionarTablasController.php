<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\DataType;
class GestionarTablasController extends Controller
{
    public function gestionar($slug)
    {
        // Lógica para redirigir a la tabla correspondiente
        switch ($slug) {
            case 'rectorado':
                return redirect()->route('voyager.tablarectorado.index');
            case 'vicerrectorado':
                return redirect()->route('voyager.tablavicerrectorado.index');
            case 'dsa':
                return redirect()->route('voyager.tabladsa.index');
            case 'daf':
                return redirect()->route('voyager.tabladaf.index');
            case 'artes':
                return redirect()->route('voyager.tablaartes.index');
            case 'agricolas':
                return redirect()->route('voyager.tablaagricolas.index');
            case 'economicas':
                return redirect()->route('voyager.tablaeconomicas.index');
            case 'cienciaspuras':
                return redirect()->route('voyager.tablacienciaspuras.index');
            case 'cienciassociales':
                return redirect()->route('voyager.tablacienciassociales.index');
            case 'derecho':
                return redirect()->route('voyager.tabladerecho.index');
            case 'ingenieria':
                return redirect()->route('voyager.tablaingenieria.index');
            case 'geologica':
                return redirect()->route('voyager.tablageologica.index');
            case 'minera':
                return redirect()->route('voyager.tablaminera.index');
            case 'tecnologica':
                return redirect()->route('voyager.tablatecnologica.index');
            case 'salud':
                return redirect()->route('voyager.tablasalud.index');
            case 'medicina':
                return redirect()->route('voyager.tablamedicina.index');
            case 'facultadvicerrectorado':
                return redirect()->route('voyager.tablavicecarreras.index');
            case 'tupiza':
                return redirect()->route('voyager.tablatupiza.index');
            case 'uncia':
                return redirect()->route('voyager.tablauncia.index');
            case 'uyuni':
                return redirect()->route('voyager.tablauyuni.index');
            case 'villazon':
                return redirect()->route('voyager.tablavillazon.index');
            case 'llica':
                return redirect()->route('voyager.tablallica.index');
            // Agrega más casos si es necesario
            default:
                return redirect()->route('voyager.dashboard'); // Redirige a alguna página por defecto si no hay coincidencia
        }
    }
    
}

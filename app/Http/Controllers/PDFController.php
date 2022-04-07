<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use Illuminate\Http\Request;
use App\Models\Reclamo;
class PDFController extends Controller
{
    public function PDFreclamo($id){
        $reclamo = Reclamo::findOrFail($id);
        $pdf = app('dompdf.wrapper')->setOptions([ 'enable-javascript' => true,'javascript-delay'=> 5000,'enable-smart-shrinking' => true, 'no-stop-slow-scripts'=> true]);
        $data = [
            'reclamo'     => $reclamo
        ];
        //return view('Analisis.components.PDFnoprocede',$data);
        $pdf->setPaper('a4');
        //return ;
        $procesado = $reclamo->ListEstatusReclamo->where('idEstatus', 1);
        $noprocesado = $reclamo->ListEstatusReclamo->where('idEstatus', 2);
        if(sizeof($procesado) != 0){
            $pdf->loadView('warranty.components.PDFaprobado',$data);
            return $pdf->stream('Garantía'.$reclamo->codigoSucursal.'.pdf');
        }else if(sizeof($noprocesado) != 0){    
            $pdf->loadView('warranty.components.PDFnoAprobado',$data);
            return $pdf->stream('Garantía'.$reclamo->codigoSucursal.'.pdf');
        }

       return "No se ha realizado la garantía";
    }
    public function PDFanalisis($id){
        $reclamo = Reclamo::findOrFail($id);
        $pdf = app('dompdf.wrapper')->setOptions([ 'enable-javascript' => true,'javascript-delay'=> 5000,'enable-smart-shrinking' => true, 'no-stop-slow-scripts'=> true]);
        $data = [
            'reclamo'     => $reclamo
        ];
        //return view('Analisis.components.PDFnoprocede',$data);
        $pdf->setPaper('a4');
        //return ;
        $procesado = $reclamo->ListEstatusReclamo->where('idEstatus', 4);
        $ajuste = $reclamo->ListEstatusReclamo->where('idEstatus', 6);
        $noprocesado = $reclamo->ListEstatusReclamo->where('idEstatus', 5);
        if(sizeof($procesado) != 0|| sizeof($ajuste) != 0){
            $pdf->loadView('Analisis.components.PDFprocede',$data);
            return $pdf->stream('prueba.pdf');
        }else if(sizeof($noprocesado) != 0){    
            $pdf->loadView('Analisis.components.PDFnoprocede',$data);
            return $pdf->stream('prueba.pdf');
        }

       return "No se ha realizado el análisis técnico";
    }
    public function PDFGuia($id){
        $Guia = Guia::all()->where('codigo', $id)->firstOrFail();
        //return view('Guia.PDFGuia')->with('Guia', $Guia);
        $pdf = app('dompdf.wrapper')->setOptions([ 'enable-javascript' => true,'javascript-delay'=> 5000,'enable-smart-shrinking' => true, 'no-stop-slow-scripts'=> true]);
        $data = [
            'Guia'     => $Guia
        ];
        $pdf->loadView('Guia.PDFGuia',$data);

        return $pdf->stream('prueba.pdf');
    }
    function get_rendered_html($template_path){
        ob_start();
        include($template_path);
        $rendered = ob_get_contents();
        ob_end_clean();
        return $rendered;
    }
    
}

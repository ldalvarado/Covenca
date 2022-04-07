<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Models\Reclamo;
use App\Models\Sucursal;
class WelcomeController extends Controller
{
    public function getChartData(Request $request){
        $usuario = Auth::user();
        $reclamos = Reclamo::all();
        $clientes = User::where('idRole',6)->get();
        if($usuario -> sucursal -> principal != 0){
            if( $request-> sucursal != null){
                $reclamos = $reclamos->where('idSucursal',(int)$request -> sucursal);
                $clientes = $clientes->where('idSucursal',(int)$request -> sucursal);
            }
        }
        else{
            $reclamos = $reclamos->where('idSucursal',$usuario->sucursal->id);
          

        }
       
        $estado_array =[0,0,0,0,0,0];
        $estatus_array =[0,0,0,0,0,0];
        $garantias_tipo = [0,0,0,0,0];
        foreach($reclamos as $reclamo){
            $uno = 1;
            //Estado
            if($reclamo-> InfoProductoAnalisis != null){
                $tipoProducto =intval($reclamo-> InfoProductoAnalisis->idProducto);
                $tipoProducto = $tipoProducto - $uno;
                $garantias_tipo[$tipoProducto]++;
            }
            $estado = $reclamo -> estadoReclamo();
            $estado = $estado -> pluck('idEstado')->first();
            $estado =intval($estado);
            $cerrado = $reclamo -> getUltimoEstado() ->pluck('idEstado')->first();
            if($cerrado != null){
                $estado_array[5]++;
            }
            $estado = $estado - $uno;
            if($estado>-1){
                $estado_array[$estado]++;

            }
            //Estatus
            $estatus = $reclamo -> estatusReclamo();
            $estatus = $estatus -> pluck('idEstatus')->first();
            $estatus =intval($estatus);
            $uno = 1;
            $estatus = $estatus - $uno;
            if($estatus>-1){
                $estatus_array[$estatus]++;

            }
            
            
            
        }
        return response()->json([
            'sucursal'=>(int)$request-> sucursal,
            'reclamos'=>$reclamos,
            'Graf_Estado'=>$estado_array,
            'Graf_Estatus'=>$estatus_array,
            'garantias_tipo'=>$garantias_tipo,
            'clientes'=>count($clientes->toArray())
        ]);
    }
    // index
    public function index()
    {
        
        if(Auth::user() == null){
            return view('welcome');
        }
        else{
            return redirect()->route("dashboard");
        }
        
    }
    public function Dashboard()
    {
        $show_filters = Auth::user()->sucursal->principal != 0;
        
        $Sucursales = Sucursal::all();
        return View("dashboard")->with([
            'show_filters'=> $show_filters,
         
            'Sucursales'=>$Sucursales
        ]);
        
        
    }
}
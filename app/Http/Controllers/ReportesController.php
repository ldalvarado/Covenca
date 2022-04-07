<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Sucursal;
use App\Models\ClienteVehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\List_;

use function PHPUnit\Framework\isNull;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $Listado = [];
        $clientesList = Cliente::first();
        $Sucursales = Sucursal::all();
        $Clientes = $clientesList->select('cliente_datos.*')->join('users', 'users.id', '=', 'cliente_datos.idUser')->where('users.idRole',7)->get();
        $Clientes_tabla = $clientesList->select(DB::raw("(cliente_vehiculo.4x2*6+cliente_vehiculo.6x2*10+cliente_vehiculo.6x4*10+cliente_vehiculo.2x0*4+cliente_vehiculo.4x0*8+cliente_vehiculo.6x0*12+cliente_vehiculo.8x0*16) AS totalCaucho"),'cliente_datos.*')
        ->join('users', 'users.id', '=', 'cliente_datos.idUser')
        ->join('cliente_vehiculo','cliente_vehiculo.idCliente', '=', 'cliente_datos.id')
        ->where('users.idRole',7)
        ->get();
        $Usuarios = User::where('idRole','!=',7)->get();
        $CantidadVehRemolques = DB::table('cliente_vehiculo')->sum(DB::raw('cliente_vehiculo.4x2+cliente_vehiculo.6x2+cliente_vehiculo.6x4'));
        $CantidadRemolques = DB::table('cliente_vehiculo')->sum(DB::raw('cliente_vehiculo.2x0+cliente_vehiculo.4x0+cliente_vehiculo.6x0+cliente_vehiculo.8x0'));
        $CauchosOperatvios = DB::table('cliente_vehiculo')->sum(DB::raw('cliente_vehiculo.4x2*6+cliente_vehiculo.6x2*10+cliente_vehiculo.6x4*10+cliente_vehiculo.2x0*4+cliente_vehiculo.4x0*8+cliente_vehiculo.6x0*12+cliente_vehiculo.8x0*16'));
        return view('reporte.index')->with([
            'Clientes'=> $Clientes,
            'Usuarios'=> $Usuarios,
            'Sucursales'=> $Sucursales,
            'Clientes_tabla' =>  $Clientes_tabla,
            'Cantidad_cliente' => count($clientesList->get()->toArray()),
            'CauchosOperativos' => $CauchosOperatvios,
            'CantidadVehRemolques' => $CantidadVehRemolques,
            'CantidadRemolques' => $CantidadRemolques
        ]);
    }
    public function getFiltroReporteCliente(Request $request){
        $clientesList = Cliente::first();
        $Clientes = $clientesList->select(DB::raw("(cliente_vehiculo.4x2*6+cliente_vehiculo.6x2*10+cliente_vehiculo.6x4*10+cliente_vehiculo.2x0*4+cliente_vehiculo.4x0*8+cliente_vehiculo.6x0*12+cliente_vehiculo.8x0*16) AS totalCaucho"),'cliente_datos.*')
        ->join('users', 'users.id', '=', 'cliente_datos.idUser')
        ->join('cliente_vehiculo','cliente_vehiculo.idCliente', '=', 'cliente_datos.id')
        ->where('users.idRole',7)
        ->get();
        if( $request-> idSucursal != null){
            $Clientes = $Clientes->where('users.idSucursal',(int)$request -> idSucursal);
        }
        if( $request-> idCliente != null){
            $Clientes = $Clientes->where('cliente_datos.id',(int)$request -> idCliente);
        }
        if( $request-> idUsuario != null){
            $Clientes = $Clientes->where('users.id',(int)$request -> idUsuario);
        }
        return response()->json([
            'Clientes'=>$Clientes,
        ]);
    }
    public function usuarios()
    {
        $user = Auth::user();
        $clientesList = Cliente::first();
        $Sucursales = Sucursal::all();
        $Usuarios = User::where('idRole','!=',7)->get();
        $Clientes_tabla = $clientesList->select(DB::raw("(cliente_vehiculo.4x2*6+cliente_vehiculo.6x2*10+cliente_vehiculo.6x4*10+cliente_vehiculo.2x0*4+cliente_vehiculo.4x0*8+cliente_vehiculo.6x0*12+cliente_vehiculo.8x0*16) AS totalCaucho"),'cliente_datos.*')
        ->join('users', 'users.id', '=', 'cliente_datos.idUser')
        ->join('cliente_vehiculo','cliente_vehiculo.idCliente', '=', 'cliente_datos.id')
        ->where('users.idRole',7)
        ->get();
        return view('reporte.usuarios')->with([
            'Cantidad_sucursales'=> 1,
            'Usuarios'=> $Usuarios,
            'Sucursales'=> $Sucursales,
            'Clientes_tabla' =>  $Clientes_tabla,
            'Cantidad_cliente' => count($clientesList->get()->toArray()),
        ]);
    }
    public function datacliente()
    {
        $user = Auth::user();
        $Listado = [];
         
        return view('reporte.datos_clientes')->with('Listado', $Listado);
    }
}

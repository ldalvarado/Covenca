<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warranty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Models\AnchoCaucho;
use App\Models\CargaVehiculo;
use App\Models\CondicionCaucho;
use App\Models\CondicionVehiculo;
use App\Models\DisenoBanda;
use App\Models\ImagenReclamo;
use App\Models\InformacionProducto;
use App\Models\MarcaVehiculo;
use App\Models\MarcaCaucho;
use App\Models\MedidaCaucho;
use App\Models\ModeloCaucho;
use App\Models\ModeloVehiculo;
use App\Models\Pais;
use App\Models\Reclamo;
use App\Models\TipoVehiculo;
use App\Models\TipoCargaVehiculo;
use App\Models\TipoTerrenoVehiculo;
use App\Models\Estado;
use App\Models\Estatus;
use App\Models\ReclamoEstado;
use App\Models\ReclamoEstatus;
use Illuminate\Support\Facades\DB;
use App\Http\Conexiones;
use App\Models\Producto;
use App\Models\Condicion;
use App\Models\Zona;
use App\Models\Rechazo;
use App\Models\AnalisisReclamo;
class EspecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Garantias = Reclamo::all();
        $GarantiasList = collect();
        
        foreach($Garantias as $Garantia){
            if(sizeof($Garantia->estadoReclamo) != 0 && sizeof($Garantia->estatusReclamo) != 0){
                
                if($Garantia->estadoReclamo[0]->idEstado == 2 && $Garantia->estatusReclamo[0]->idEstatus == 3){
                    $GarantiasList->add($Garantia);
                }
                
            }

         };
         
        
        return view('Especial.index')->with('ListaCredito', $GarantiasList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('Credito.create');
    }

    public function wizard() {
        return view('Credito.wizard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $user = Auth::user();

            $affected = DB::table('reclamo_estatus')
            ->where('idReclamo', $request->idReclamo)
            ->update(['activo' => false]);
            
            $affected = DB::table('reclamo_estado')
            ->where('idReclamo', $request->idReclamo)
            ->update(['activo' => false]);
            if($request->seleccion == "true"){

                $nuevo = ReclamoEstatus::create([
                    'idReclamo' => $request->idReclamo,
                    'idEstatus' => 1,
                    'observacion' => "Se procesó la garantía especial",
                    'activo'=> true,
                    'idUsuario'=> $user->id
                ]);
                $nuevo = ReclamoEstado::create([
                    'idReclamo' => $request->idReclamo,
                    'idEstado' => 1,
                    'observacion' => "Movió la garantía a espera por guía",
                    'activo'=> true,
                    'idUsuario'=> $user->id
                ]);
            }else{

                $nuevo = ReclamoEstatus::create([
                    'idReclamo' => $request->idReclamo,
                    'idEstatus' => 2,
                    'observacion' => "La garantía especial no fué procesada",
                    'activo'=> true,
                    'idUsuario'=> $user->id
                ]);
                $nuevo = ReclamoEstado::create([
                    'idReclamo' => $request->idReclamo,
                    'idEstado' => 6,
                    'observacion' => "movió la garantía a cerrado",
                    'activo'=> false,
                    'idUsuario'=> $user->id
                ]);
            }

            return response()->json([
                'isSuccess'=> true,
                'message'=> $request->all()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'isSuccess'=> false,
                'message'=> 'ocurrió un error' +$e->getMessage()
            ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reclamo = Reclamo::findOrFail($id);
        $info_product =  InformacionProducto::all()->where('idReclamo', $reclamo->id)->first();

        return view('Especial.create', [
        'reclamo'=> $reclamo,
        'info_product'=>$info_product

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

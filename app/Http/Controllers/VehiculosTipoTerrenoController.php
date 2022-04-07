<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\TipoTerrenoVehiculo;
class VehiculosTipoTerrenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('Vehiculos.TipoTerreno.ListarTipoTerreno');
    }
    public function CreateTipoTerreno(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'descripcion'=>'required', 'activos'=>'required'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>$data]);
       }
       TipoTerrenoVehiculo::create([
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
        ]);
    }
    
    public function UpdateTipoTerreno(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $TipoTerreno = TipoTerrenoVehiculo::where("id",$id)->first();
            $TipoTerreno -> descripcion = $request -> descripcion;
            $TipoTerreno -> activo = $request -> activo;
            if($TipoTerreno != null){
                $TipoTerreno->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteTipoTerreno(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $TipoTerreno = TipoTerrenoVehiculo::where("id",$id)->first();
            if($TipoTerreno != null){
                $TipoTerreno -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetTipoTerreno(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $TipoTerreno = TipoTerrenoVehiculo::where("id",$id)->first();
            if($TipoTerreno != null){
               
                return response()->json(["success"=>true,"data"=>$TipoTerreno,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoTipoTerreno(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $TipoTerreno = TipoTerrenoVehiculo::all();
            if($TipoTerreno != null){
               
                return response()->json(["success"=>true,"data"=>$TipoTerreno,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

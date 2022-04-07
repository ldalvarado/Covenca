<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\TipoCargaVehiculo;
class VehiculosTipoCargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('Vehiculos.TipoCarga.ListarTipoCarga');
    }
    public function CreateTipoCarga(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'descripcion'=>'required', 'activos'=>'required'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>$data]);
       }
       TipoCargaVehiculo::create([
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
        ]);
    }
    
    public function UpdateTipoCarga(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $TipoCarga = TipoCargaVehiculo::where("id",$id)->first();
            $TipoCarga -> descripcion = $request -> descripcion;
            $TipoCarga -> activo = $request -> activo;
            if($TipoCarga != null){
                $TipoCarga->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteTipoCarga(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $TipoCarga = TipoCargaVehiculo::where("id",$id)->first();
            if($TipoCarga != null){
                $TipoCarga -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetTipoCarga(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $TipoCarga = TipoCargaVehiculo::where("id",$id)->first();
            if($TipoCarga != null){
               
                return response()->json(["success"=>true,"data"=>$TipoCarga,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoTipoCarga(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $TipoCarga = TipoCargaVehiculo::all();
            if($TipoCarga != null){
               
                return response()->json(["success"=>true,"data"=>$TipoCarga,]);
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

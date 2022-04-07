<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\MarcaVehiculo;
class VehiculosMarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('Vehiculos.Marcas.ListarMarcas');
    }
    public function CreateMarca(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'descripcion'=>'required', 'activos'=>'required'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>$data]);
       }
       MarcaVehiculo::create([
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
        ]);
    }
    
    public function UpdateMarca(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $marca = MarcaVehiculo::where("id",$id)->first();
            $marca -> descripcion = $request -> descripcion;
            $marca -> activo = $request -> activo;
            if($marca != null){
                $marca->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteMarca(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $marca = MarcaVehiculo::where("id",$id)->first();
            if($marca != null){
                $marca -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetMarca(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $marca = MarcaVehiculo::where("id",$id)->first();
            if($marca != null){
               
                return response()->json(["success"=>true,"data"=>$marca,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoMarca(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $marca = MarcaVehiculo::all();
            if($marca != null){
               
                return response()->json(["success"=>true,"data"=>$marca,]);
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

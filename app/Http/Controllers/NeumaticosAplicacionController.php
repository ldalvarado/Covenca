<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\Aplicacion;
class NeumaticosAplicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('neumaticos.Aplicaciones.ListarAplicacion');
    }
    public function CreateAplicacion(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'descripcion'=>'required', 'activos'=>'required'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>$data]);
       }
       Aplicacion::create([
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
           'estado' => 1,
        ]);
    }
    
    public function UpdateAplicacion(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Aplicacion = Aplicacion::where("id",$id)->first();
            $Aplicacion -> descripcion = $request -> descripcion;
            $Aplicacion -> activo = $request -> activo;
            if($Aplicacion != null){
                $Aplicacion->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteAplicacion(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Aplicacion = Aplicacion::where("id",$id)->first();
            if($Aplicacion != null){
                $Aplicacion -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetAplicacion(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Aplicacion = Aplicacion::where("id",$id)->first();
            if($Aplicacion != null){
               
                return response()->json(["success"=>true,"data"=>$Aplicacion,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoAplicacion(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $Aplicacion = Aplicacion::all();
            if($Aplicacion != null){
               
                return response()->json(["success"=>true,"data"=>$Aplicacion,]);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\RechazoRecomendacion;
class RechazoRecomendacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('Fallas.Recomendacion.ListarRecomendacion');
    }
    public function CreateRecomendacion(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'descripcion'=>'required', 'activos'=>'required','id_rechazo'=>'required',
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>$data]);
       }
       RechazoRecomendacion::create([
            'idRechazo'=>$request -> id_rechazo,
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
        ]);
    }
    
    public function UpdateRecomendacion(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Recomendacion = RechazoRecomendacion::where("id",$id)->first();
            $Recomendacion -> descripcion = $request -> descripcion;
            $Recomendacion -> activo = $request -> activo;
            if($Recomendacion != null){
                $Recomendacion->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteRecomendacion(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Recomendacion = RechazoRecomendacion::where("id",$id)->first();
            if($Recomendacion != null){
                $Recomendacion -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetRecomendacion(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Recomendacion = RechazoRecomendacion::where("id",$id)->first();
            if($Recomendacion != null){
               
                return response()->json(["success"=>true,"data"=>$Recomendacion,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoRecomendacion(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Recomendacion = RechazoRecomendacion::all();
            $Recomendacion = $Recomendacion -> where("idRechazo",$id);
            if($Recomendacion != null){
               
                return response()->json(["success"=>true,"data"=>array_values($Recomendacion->toArray()),]);
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

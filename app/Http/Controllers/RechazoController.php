<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\Rechazo;
class RechazoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('Fallas.Rechazo.ListarRechazo');
    }
    public function CreateRechazo(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[ 'codigo'=>'required',
            'descripcion'=>'required', 'activos'=>'required','idZona','procede'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>"no encontrado"]);
       }
       Rechazo::create([
           'codigo'=>$request -> codigo,
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
           'idZona' => $request -> idZona,
           'procede' => $request -> procede
        ]);
    }
    public function GetRechazoByProducto(Request $request){
        if($request->ajax()){
            $id = $request -> idZona;
            $user = Auth::user();
            
            $Rechazo = Rechazo::where("idZona",$id)->get();
            if($Rechazo != null){
               
                return response()->json(["success"=>true,"data"=>$Rechazo]);
            }
            
            return response()->json(["Data"=>"b"]);
            
        }
        return response()->json(["Data"=>"a"]);
    }
    public function UpdateRechazo(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Rechazo = Rechazo::where("id",$id)->first();
            $Rechazo -> codigo = $request -> codigo;
            $Rechazo -> descripcion = $request -> descripcion;
            $Rechazo -> idZona = $request -> idZona;
            $Rechazo -> procede = $request -> procede;
            $Rechazo -> activo = $request -> activo;
            if($Rechazo != null){
                $Rechazo->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteRechazo(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Rechazo = Rechazo::where("id",$id)->first();
            if($Rechazo != null){
                $Rechazo -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetRechazo(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Rechazo = Rechazo::where("id",$id)->first();
            if($Rechazo != null){
               
                return response()->json(["success"=>true,"data"=>$Rechazo,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoRechazo(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $Rechazo = Rechazo::all();
            if($Rechazo != null){
               
                return response()->json(["success"=>true,"data"=>$Rechazo,]);
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
 
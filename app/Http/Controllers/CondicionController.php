<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\Condicion;
class CondicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('Condicion.ListarCondicion');
    }
    public function CreateCondicion(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'descripcion'=>'required', 'activos'=>'required','idProducto','respuesta'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>$data]);
       }
       Condicion::create([
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
           'idProducto' => $request -> idProducto,
           'respuesta' => $request -> respuesta
        ]);
    }
    public function GetCondicionByProducto(Request $request){
        if($request->ajax()){
            $id = $request -> idProducto;
            $user = Auth::user();
            
            $Condicion = Condicion::where("idProducto",$id)->get();
            if($Condicion != null){
               
                return response()->json(["success"=>true,"data"=>$Condicion]);
            }
            
            return response()->json(["Data"=>"b"]);
            
        }
        return response()->json(["Data"=>"a"]);
    }
    public function UpdateCondicion(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Condicion = Condicion::where("id",$id)->first();
            $Condicion -> descripcion = $request -> descripcion;
            $Condicion -> idProducto = $request -> idProducto;
            $Condicion -> respuesta = $request -> respuesta;
            $Condicion -> activo = $request -> activo;
            if($Condicion != null){
                $Condicion->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteCondicion(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Condicion = Condicion::where("id",$id)->first();
            if($Condicion != null){
                $Condicion -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetCondicion(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Condicion = Condicion::where("id",$id)->first();
            if($Condicion != null){
               
                return response()->json(["success"=>true,"data"=>$Condicion,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoCondicion(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $Condicion = Condicion::all();
            if($Condicion != null){
               
                return response()->json(["success"=>true,"data"=>$Condicion,]);
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

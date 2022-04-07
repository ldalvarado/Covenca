<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\ModeloVehiculo;
class VehiculosModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('Vehiculos.Modelo.ListarModelo');
    }
    public function CreateModelo(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'descripcion'=>'required', 'activos'=>'required','idMarca'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>$data]);
       }
       ModeloVehiculo::create([
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
           'idMarca' => $request -> idMarca
        ]);
    }
    public function GetModeloByMarca(Request $request){
        if($request->ajax()){
            $id = $request -> idMarca;
            $user = Auth::user();
            
            $Modelo = ModeloVehiculo::where("idMarca",$id)->get();
            if($Modelo != null){
               
                return response()->json(["success"=>true,"data"=>$Modelo]);
            }
            
            return response()->json(["Data"=>"b"]);
            
        }
        return response()->json(["Data"=>"a"]);
    }
    public function UpdateModelo(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Modelo = ModeloVehiculo::where("id",$id)->first();
            $Modelo -> descripcion = $request -> descripcion;
            $Modelo -> idMarca = $request -> idMarca;
            $Modelo -> activo = $request -> activo;
            if($Modelo != null){
                $Modelo->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteModelo(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Modelo = ModeloVehiculo::where("id",$id)->first();
            if($Modelo != null){
                $Modelo -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetModelo(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Modelo = ModeloVehiculo::where("id",$id)->first();
            if($Modelo != null){
               
                return response()->json(["success"=>true,"data"=>$Modelo,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoModelo(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $Modelo = ModeloVehiculo::all();
            if($Modelo != null){
               
                return response()->json(["success"=>true,"data"=>$Modelo,]);
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

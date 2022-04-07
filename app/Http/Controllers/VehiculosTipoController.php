<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\TipoVehiculo;
class VehiculosTipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('Vehiculos.Tipo.ListarTipo');
    }
    public function CreateTipoVehiculo(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'descripcion'=>'required', 'activos'=>'required','idEje'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>$data]);
       }
       TipoVehiculo::create([
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
           'idEje' => $request -> idEje
        ]);
    }
    public function GetTipoVehiculoByEje(Request $request){
        if($request->ajax()){
            $id = $request -> idEje;
            $user = Auth::user();
            
            $TipoVehiculo = TipoVehiculo::where("idEje",$id)->get();
            if($TipoVehiculo != null){
               
                return response()->json(["success"=>true,"data"=>$TipoVehiculo]);
            }
            
            return response()->json(["Data"=>"b"]);
            
        }
        return response()->json(["Data"=>"a"]);
    }
    public function UpdateTipoVehiculo(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $TipoVehiculo = TipoVehiculo::where("id",$id)->first();
            $TipoVehiculo -> descripcion = $request -> descripcion;
            $TipoVehiculo -> idEje = $request -> idEje;
            $TipoVehiculo -> activo = $request -> activo;
            if($TipoVehiculo != null){
                $TipoVehiculo->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteTipoVehiculo(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $TipoVehiculo = TipoVehiculo::where("id",$id)->first();
            if($TipoVehiculo != null){
                $TipoVehiculo -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetTipoVehiculo(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $TipoVehiculo = TipoVehiculo::where("id",$id)->first();
            if($TipoVehiculo != null){
               
                return response()->json(["success"=>true,"data"=>$TipoVehiculo,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoTipoVehiculo(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $TipoVehiculo = TipoVehiculo::all();
            if($TipoVehiculo != null){
               
                return response()->json(["success"=>true,"data"=>$TipoVehiculo,]);
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

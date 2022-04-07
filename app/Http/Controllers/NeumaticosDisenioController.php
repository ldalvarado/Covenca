<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\DisenoBanda;
class NeumaticosDisenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('neumaticos.Diseno.ListarDiseno');
    }
    public function CreateDiseno(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'descripcion'=>'required', 'activos'=>'required','idAplicacion'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>$data]);
       }
       DisenoBanda::create([
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
           'idAplicacion' => $request -> idAplicacion,
           
        ]);
    }
   
    public function UpdateDiseno(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Diseno = DisenoBanda::where("id",$id)->first();
            $Diseno -> descripcion = $request -> descripcion;
            $Diseno -> idAplicacion = $request -> idAplicacion;
            $Diseno -> activo = $request -> activo;
            
            if($Diseno != null){
                $Diseno->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteDiseno(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Diseno = DisenoBanda::where("id",$id)->first();
            if($Diseno != null){
                $Diseno -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetDiseno(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Diseno = DisenoBanda::where("id",$id)->first();
            if($Diseno != null){
               
                return response()->json(["success"=>true,"data"=>$Diseno,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function GetDisenoByTemp(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Diseno = DisenoBanda::where("id",$id)->first();
            $Diseno = $Diseno->where("esFrio",$request -> esFrio);
            if($Diseno != null){
               
                return response()->json(["success"=>true,"data"=>$Diseno,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoDiseno(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $Diseno = DisenoBanda::all();
            if($Diseno != null){
               
                return response()->json(["success"=>true,"data"=>$Diseno,]);
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

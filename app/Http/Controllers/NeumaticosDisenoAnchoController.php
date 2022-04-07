<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\DisenoAncho;
use App\Models\AnchoDiseno;
use App\Models\Profundidad;
class NeumaticosDisenoAnchoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $anchos = AnchoDiseno::all();
        $profundidades = Profundidad::all();
        
        return view('neumaticos.Diseno.DisenoAncho.ListarDisenoAncho',['anchos'=>$anchos,'profundidades'=>$profundidades]);
    }
    public function CreateDisenoAncho(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'idAncho'=>'required', 'activos'=>'required','idDiseno'=>'required','idProfundidad'=>'required'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"]);
       }
       DisenoAncho::create([
           'idDiseno'=> $request ->idDiseno,
           'idAncho'=>$request ->idAncho,
           'idProfundidad' => $request ->idProfundidad,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
           'estado' => 1
        ]);
    }
    
    public function UpdateDisenoAncho(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Ancho = DisenoAncho::where("id",$id)->first();
            $Ancho -> idAncho = $request -> idAncho;
            $Ancho -> idProfundidad = $request -> idProfundidad;
            if($Ancho != null){
                $Ancho->save();
                return response()->json(["data","actualizado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function DeleteDisenoAncho(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Ancho = DisenoAncho::where("id",$id)->first();
            if($Ancho != null){
                $Ancho -> delete();
                return response()->json(["data","Eliminado"]);
            }
            
            return response()->json(["Data"=>"algo Fallo"]);
            
        }
        return response()->json(["Data"=>"fallo algo"]);
    }
    public function GetDisenoAncho(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Ancho = DisenoAncho::where("id",$id)->first();
            if($Ancho != null){
               
                return response()->json(["success"=>true,"data"=>$Ancho,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function GetProfundidadByDisenoAncho(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Ancho = DisenoAncho::all() ->where("idDiseno", $request->idDiseno)->where("idAncho",$request->idAncho)->Profundidad;
            if($Ancho != null){
               
                return response()->json(["success"=>true,"data"=>$Ancho,]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function ListadoDisenoAncho(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $Ancho = DisenoAncho::with(['ancho','profundidad'])->get();
            $Ancho = $Ancho -> where("idDiseno",$request ->id);
            
            if($Ancho != null){
               
                return response()->json(["success"=>true,"data"=>array_values($Ancho->toArray()),]);
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

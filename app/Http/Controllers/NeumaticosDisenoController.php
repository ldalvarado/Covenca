<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Http\Conexiones;
use App\Models\DisenoBanda;
use App\Models\AnchoDiseno;
use App\Models\DisenoAncho;
class NeumaticosDisenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    
    
        return view('neumaticos.Diseno.Diseno.ListarDiseno');
    }
    public function CreateDiseno(Request $request){
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'descripcion'=>'required', 'activos'=>'required','idMarca'
           
        ]);
        if($validator->fails()){
            return response()->json(["factura"=>$data]);
       }
       
       DisenoBanda::create([
           'descripcion'=> $request ->descripcion,
           'activo'=> $request ->activos,
           'idUsuario' => $user ->id,
           'idAplicacion' =>$request ->idAplicacion,
           'urlImagen'=>"1",
           'estado' => 1,
           'esFrio' => $request -> esFrio
        ]);
        
     }  
        
     public function GetDisenoByTemp(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            
            $Diseno = DisenoBanda::where("esFrio",$request -> esFrio)->get();
            if($Diseno != null){
               
                return response()->json(["success"=>false,"data"=>$Diseno->toArray(),]);
            }
            
            return response()->json(["Data"=>""]);
            
        }
        return response()->json(["Data"=>""]);
    }
    public function UpdateDiseno(Request $request){
        if($request->ajax()){
            $id = $request -> id;
            $user = Auth::user();
            
            $Diseno = DisenoBanda::where("id",$id)->first();
            $Diseno -> descripcion = $request -> descripcion;
            $Diseno -> idAplicacion = $request -> idAplicacion;
            $Diseno -> idAplicacion = $request -> idAplicacion;
            $Diseno -> esFrio = $request -> esFrio;
            $diseno -> activo = $request -> activo;

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
            
            $DisenoAncho = DisenoAncho::where('idDiseno',$request->id);
            foreach($DisenoAncho as $diseno){
                $diseno -> delete();
            }
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
    public function ListadoDiseno(Request $request){
        if($request->ajax()){
         
            $user = Auth::user();
            
            $Diseno = DisenoBanda::all();
            if($Diseno != null){
               
                return response()->json(["success"=>true,"data"=>$Diseno->toArray(),]);
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

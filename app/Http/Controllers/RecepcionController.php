<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warranty;
use Illuminate\Support\Facades\Auth;
use App\Models\Guia;
use App\Models\GuiaReclamo;
use App\Models\ReclamoEstado;
use PhpParser\Node\Expr\List_;
use App\Models\Reclamo;
use Illuminate\Support\Facades\DB;
class RecepcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $Guias = Guia::all()->where('codigoSucursalDestino', $user->sucursal->codigo)->where('activo', true);
         
        return view('Recepcion.index')->with(
            [
                'Guias'=> $Guias,
                'sucursal'=> $user->sucursal,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $Garantia = Warranty::all();
        return view('Recepcion.create')->with('Garantia', $Garantia);
    }

    public function wizard() {
        return view('Recepcion.wizard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //validaciones

            
                $data = $request->all();
                $user = Auth::user();
                #create or update your data here
                $Guia = Guia::all()->where('codigo', $request->codigo)->firstOrFail();

                if($request->datos[0][0] != null){
  
                    //hacer update a false si no queda ninguna garantia pendiente


                    
                    $list = $request->datos;
                    foreach($list as $Listareclamos){

                        $contenido = json_decode($Listareclamos[0]);
                        $GuiaReclamo = GuiaReclamo::find($Listareclamos);
                        $idReclamo = $GuiaReclamo->reclamo->id;
                     
                            app('App\Http\Controllers\MailController')->sendGarantiaEmail("Espera por análisis técnico",$idReclamo,Reclamo::where('id',$idReclamo)->pluck('email')->first());
            
                        

                        $GuiaReclamo->activo = false;
                        $GuiaReclamo->save();

                        $affected = DB::table('reclamo_estado')
                        ->where('idReclamo', $GuiaReclamo->reclamo->id)
                        ->update(['activo' => false]);


                        $nuevo = ReclamoEstado::create([
                            'idReclamo' => $GuiaReclamo->reclamo->id,
                            'idEstado' => 4,
                            'observacion' => "La garantía está en espera por análisis",
                            'activo'=> true,
                            'idUsuario'=> $user->id
                        ]); 
                        
                    }
                    if(sizeof($Guia->GuiaReclamo) == 0){
                        $Guia->activo = false;
                        $Guia->save();
                    }
                    return response()->json([
                        'isSuccess'=> true,
                        'message'=> $Guia
                    ]);
                }else{
                    return response()->json([
                        'isSuccess'=> false,
                        'message'=> 'Ninguna garantía seleccionada'
                ]);
                }

                /*


                //$eje->idUsuario = $request->idUsuario;
                */

            
        } catch (\Throwable $th) {
            dd($th);
            return response()->json([
                'isSuccess'=> false,
                'message'=> $th
            ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Guia = Guia::all()->where('codigo', $id)->firstOrFail();
         
         
        return view('Recepcion.show')->with('Guia', $Guia);
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

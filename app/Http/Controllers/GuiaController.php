<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reclamo;
use App\Models\ReclamoEstado;
use App\Models\GuiaReclamo;
use PhpParser\Node\Expr\List_;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class GuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $Guias = Guia::all()->where('codigoSucursalOrigen', $user->sucursal->codigo)->where('activo', true);
         
        return view('Guia.index')->with('Guias', $Guias);
    }

    public function pdf()
    {
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML('<h1>Styde.net</h1>');

        return $pdf->stream('mi-archivo.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *        

     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $usuario = Auth::user();
        $Garantias = Reclamo::all();
        if( Auth::user()->sucursal->principal  == 0  ){
            $Garantias = $Garantias->where('idSucursal', $usuario->idSucursal);
        }
        $GarantiasList = collect();
        
        foreach($Garantias as $Garantia){
            if(sizeof($Garantia->estadoReclamo) != 0 && sizeof($Garantia->estatusReclamo) != 0){
                
                if($Garantia->estadoReclamo[0]->idEstado == 1 && $Garantia->estatusReclamo[0]->idEstatus == 1){
                    $GarantiasList->add($Garantia);
                }
                
            }

         };
         
         
        return view('Guia.create')->with('Garantia', $GarantiasList);
    }

    public function wizard() {
        return view('Guia.wizard');
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


                if($request->datos[0][0] != null){

                    $Guia = Guia::all()->where('codigoSucursalOrigen', $user->sucursal->codigo);
                        
                    $newCode = '';
                    if(sizeof($Guia) == 0){
                        $newCode = $user->sucursal->codigo.'-GT0001';
                    }
                    else{
                        
                        $lastCode = $Guia->last()->codigo;

                        $arrCode = explode('-GT', $lastCode);
                        $id = (int) $arrCode[1];
                        $id = $id + 1;
                        $length = 4;
        
                        $newLastCode = str_pad($id,$length,"0", STR_PAD_LEFT);
                        $newCode = $user->sucursal->codigo.'-GT'.$newLastCode.'';
                        
                    }

                    $guia = Guia::create([
                        'codigo'=>$newCode,
                        'codigoSucursalOrigen'=>$user->sucursal->codigo,
                        'codigoSucursalDestino'=>"C01",
                        'activo' => true,
                        'idUsuario' => $user->id
                    ]);

                    $list = $request->datos;
                    foreach($list as $Listareclamos){
                     
                            app('App\Http\Controllers\MailController')->sendGarantiaEmail("En Transito",$Listareclamos,Reclamo::where('id',$Listareclamos)->pluck('email')->first());
            
                        
  
                        $affected = DB::table('reclamo_estado')
                        ->where('idReclamo', $Listareclamos)
                        ->update(['activo' => false]);
                        //$reclamo = Reclamo::find($contenido->id);
                        
                        $nuevo = ReclamoEstado::create([
                            'idReclamo' => $Listareclamos,
                            'idEstado' => 3,
                            'observacion' => "movió la garantía a en transito",
                            'activo'=> true,
                            'idUsuario'=> $user->id
                        ]);

                        $guiaReclamo = GuiaReclamo::create([
                            'idReclamo' => $Listareclamos,
                            'idGuia'=> $guia->id,
                            'activo' => true,
                            'idUsuario' => $user->id
                        ]);


                    };
                    
                    return response()->json([
                        'isSuccess'=> true,
                        'message'=> $guia
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
            return back()->with('error', $th);
        }

    }
    /*
    public function store(Request $request)
    {
        
        
        $affected = DB::table('reclamo_estado')
              ->where('idReclamo', 1)
              ->update(['votes' => 1]);
              

        return response()->json(['request'=>$request]);
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $Guia = Guia::all()->where('codigo', $id)->firstOrFail();
         
         
        return view('Guia.show')->with('Guia', $Guia);
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

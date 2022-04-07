<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Warranty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Models\AnchoCaucho;
use App\Models\CargaVehiculo;
use App\Models\CondicionCaucho;
use App\Models\CondicionVehiculo;
use App\Models\DisenoBanda;
use App\Models\ImagenReclamo;
use App\Models\InformacionProducto;
use App\Models\MarcaVehiculo;
use App\Models\MarcaCaucho;
use App\Models\MedidaCaucho;
use App\Models\ModeloCaucho;
use App\Models\ModeloVehiculo;
use App\Models\ReclamoCondicion;
use App\Models\Pais;
use App\Models\Reclamo;
use App\Models\TipoVehiculo;
use App\Models\TipoCargaVehiculo;
use App\Models\TipoTerrenoVehiculo;
use App\Models\Estado;
use App\Models\Estatus;
use App\Models\ReclamoEstado;
use App\Models\ReclamoEstatus;
use Illuminate\Support\Facades\DB;
use App\Http\Conexiones;
use App\Models\Producto;
use App\Models\Condicion;
use App\Models\Zona;
use App\Models\Rechazo;
use App\Models\AnalisisReclamo;
use App\Models\MarcaCamara;
use App\Models\MarcaProtector;
use App\Models\Valvula;
class AnalisisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Garantias = Reclamo::all();
        $GarantiasList = collect();
        $analisisList = collect();
        foreach($Garantias as $Garantia){
            if(sizeof($Garantia->estadoReclamo) != 0 && sizeof($Garantia->estatusReclamo) != 0){
                
                if($Garantia->estadoReclamo[0]->idEstado == 4 && $Garantia->estatusReclamo[0]->idEstatus == 1){
                    $GarantiasList->add($Garantia);
                }
                
            }

         };
         
         foreach($Garantias as $Garantia){

            foreach($Garantia->ListEstadosReclamo as $GarantiaReclamo){
                if($GarantiaReclamo->idEstado == 4 && $GarantiaReclamo->activo == false){
                    $analisisList->add($Garantia);
                }
            }

         };
        
         
        return view('Analisis.index')->with(['analisisListos'=> $analisisList,'ListaAnalisis'=> $GarantiasList]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function analizar() {
        return view('Analisis.analisis');
    }

    public function create() {
        return view('Analisis.analisis');

    }

    public function wizard() {
        return view('Analisis.wizard');
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

            $validator = Validator::make($request->all(),[

                'reconocimiento' => 'required',
                'veredicto' => 'required',
                'zona' => 'required',
                'rechazo' => 'required',

                'descripcion_falla' => 'required',

/*
                'marca' => 'required',
                'modelo' => 'required',
                'dot_serial' => 'required',

                'tipo_renovado' => 'required',
                'serial_produccion' => 'required'
                */
            ]);
            if($validator->errors()->any()){
                $errores = $validator->errors()->all();

                $contenido = "";
                foreach ($errores as $error){
                    $contenido = $contenido . $error .'<br>';
                }

                return response()->json([
                    'isSuccess'=> false,
                    'message'=> $contenido
                ]);
            }
            $errors = DB::transaction(function() use($request){
                           
            
            });
           
            $user = Auth::user();
            $reclamo = Reclamo::find($request->idReclamo);

            $idCondiciones =explode(',', $request->condiciones); 
           
            $condiciones_activo1 = explode(',', $request->condiciones_activo);

            for ($i =0; $i < count($idCondiciones); $i++){
              
        
                    ReclamoCondicion::create([
                        'idCondicion' =>   $idCondiciones[$i],
                        'idReclamo' =>      $request->idReclamo,
                        'respuesta'=>             " ",
                        'activo' =>         $condiciones_activo1[$i],
                        'idUsuario' =>      $user -> id,]);
            }


            $info_product = InformacionProducto::create([
                'idReclamo'=>$reclamo->id,
                'idProducto' => $request->idProducto, 
                'idPais'=>$request->pais,
                'idMarcaCaucho'=>$request->marca,
                'idModeloCaucho'=>$request->modelo,
                'idMedidaCaucho'=>$request->medida,
                'idDisenoBanda'=>$request->diseno,
                'idProfundidad'=>$request->idProfundidad,

                'dotSerial'=>$request->dotSerial,
                'profundidad'=>$request->profundidadActual,
                'boleta'=>$request->boleta,
                'tipoRenovado'=>($request->tipo_renovado == 'on') ? true : false,
                'serial'=>$request->serial_produccion,
                'loteBanda'=>$request->lote_banda,
                'loteVulcanizacion' => $request -> loteVulcanizacion,
                'loteProducto' => $request ->loteProducto,
                'valvula' => $request -> valvula,
                'fechaRecepcion' => $request -> fechaRecepcion,
                'activo' => 1,
                'idUsuario' => $user -> id
            ]);

            $imagen = $request->file('photo');
            if($imagen != null){
                    $nombre = $imagen->getClientOriginalName(); 
                $imagen->move(public_path("img"), $nombre);
                // Creamos una imagen
                
                switch($request->tipo){ 
                    case 'image/jpeg': 
                        $image = imagecreatefromjpeg( public_path("img/".$nombre)); 
                        break; 
                    case 'image/png': 
                        $image = imagecreatefrompng( public_path("img/".$nombre)); 
                        break; 
                    default: 
                        $image = imagecreatefromjpeg( public_path("img/".$nombre)); 
                } 
            
                
                imagejpeg($image, public_path("img/".$nombre), 20); 
                $foto = ImagenReclamo::create([
                    'idReclamo'=>$request->idReclamo,
                    'urlImagen'=>'/img/'.$nombre,
                    'descripcionImagen'=>$request->descripcion_falla,
                    'idUsuario'=>$user->id,
                    'imagen64' => file_get_contents(public_path("img/".$nombre)), 
                ]);
        
                unlink(public_path("img/".$nombre));
            }
            

            // Guardamos la imagen

            //$imagen->move(public_path("img")factura, $nombre,20);

            



            if($reclamo->InfoProductoAnalisis->getProducto->id == 1 ||$reclamo->InfoProductoAnalisis->getProducto->id == 2||$reclamo->InfoProductoAnalisis->getProducto->id == 4){
                $analisis = AnalisisReclamo::create([
                    'idReclamo' => $request->idReclamo,
                    'idRechazo'=> $request->rechazo,
                    'profundidadActual'=> $request->profundidadActual,
                    'porcentaje'=> $request->Porcentaje,
                    'descripcion'=> $request->descripcion_falla,
                    'ajusteComercial'=> ($request->ajusteComercial == 'on') ? true : false ,
                    'idUsuario' => $user->id,
                    'activo' => true
                ]);

            }else{
                $analisis = AnalisisReclamo::create([
                    'idReclamo' => $request->idReclamo,
                    'idRechazo'=> $request->rechazo,
                    'porcentaje'=> $request->Porcentaje,
                    'descripcion'=> $request->descripcion_falla,
                    'ajusteComercial'=> ($request->ajusteComercial == 'on') ? true : false ,
                    'idUsuario' => $user->id,
                    'activo' => true
                ]);

            }



            $affected = DB::table('reclamo_estatus')
            ->where('idReclamo', $request->idReclamo)
            ->update(['activo' => false]);
            
            $affected = DB::table('reclamo_estado')
            ->where('idReclamo', $request->idReclamo)
            ->update(['activo' => false]);


            if($request->veredicto == "true"){

                $nuevo = ReclamoEstatus::create([
                    'idReclamo' => $request->idReclamo,
                    'idEstatus' => 4,
                    'observacion' => "La garantía ha sido aprobada",
                    'activo'=> true,
                    'idUsuario'=> $user->id
                ]);
                $nuevo = ReclamoEstado::create([
                    'idReclamo' => $request->idReclamo,
                    'idEstado' => 5,
                    'observacion' => "movió la garantía a espera por crédito",
                    'activo'=> true,
                    'idUsuario'=> $user->id
                ]);
            }else if ($request->ajusteComercial == 'on'){
                $nuevo = ReclamoEstatus::create([
                    'idReclamo' => $request->idReclamo,
                    'idEstatus' => 6,
                    'observacion' => "La garantía pasa por ajuste comercial",
                    'activo'=> true,
                    'idUsuario'=> $user->id
                ]);
                $nuevo = ReclamoEstado::create([
                    'idReclamo' => $request->idReclamo,
                    'idEstado' => 5,
                    'observacion' => "movió la garantía a espera por crédito",
                    'activo'=> true,
                    'idUsuario'=> $user->id
                ]);
            }else{
                $nuevo = ReclamoEstatus::create([
                    'idReclamo' => $request->idReclamo,
                    'idEstatus' => 5,
                    'observacion' => "La garantía no fué aprobada",
                    'activo'=> true,
                    'idUsuario'=> $user->id
                ]);
                $nuevo = ReclamoEstado::create([
                    'idReclamo' => $request->idReclamo,
                    'idEstado' => 6,
                    'observacion' => "movió la garantía a cerrado",
                    'activo'=> false,
                    'idUsuario'=> $user->id
                ]);
            }
            try {
                app('App\Http\Controllers\MailController')->sendGarantiaEmail("Espera por Credito",$request->idReclamo,Reclamo::where('id',$request->idReclamo)->pluck('email')->first());

            }catch(Throwable $th){
                
            }



/*

            */
return response()->json([
    'isSuccess'=> true,
    'message'=> $analisis
]);
        } catch (\Throwable $th) {
            return response()->json([
                'isSuccess'=> false,
                'message'=> 'ocurrió un error' .$th
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
        
            $reclamo = Reclamo::findOrFail($id);
            $cond_caucho = CondicionCaucho::all()->where('idReclamo', $reclamo->id)->first();
            $cargaVehiculo = CargaVehiculo::all();
            $anchosCauchos = AnchoCaucho::all();
            $medidasCauchos = MedidaCaucho::all();
            $diseniosCauchos = DisenoBanda::all();
            
            if($reclamo->InfoProductoSucursal->idProducto == 5){
                $marcaCauchos = MarcaProtector::all();
            }
            elseif($reclamo->InfoProductoSucursal->idProducto == 3){
                $marcaCauchos = MarcaCamara::all();
            }else{
                $marcaCauchos = MarcaCaucho::all();
            }
            $modeloCauchos = ModeloCaucho::all();
            $cond_vehiculo = DB::table('condicion_vehiculo')->where('idReclamo', $reclamo->id)->first();
            $info_product =  InformacionProducto::all()->where('idReclamo', $reclamo->id)->first();
            $zonas =  Zona::all();
            $rechazo = Rechazo::all();
            $valvula = Valvula::all();
            return view('Analisis.analisis', ['reclamo'=> $reclamo,
            'cond_caucho'=>$cond_caucho,
            'cond_vehiculo'=>$cond_vehiculo,
            'zonas'=>$zonas,
            'valvula'=>$valvula,
            'Rechazo'=>$rechazo,
            'info_product'=>$info_product,
            'cargaVehiculo'=>$cargaVehiculo,
            'medidas'=>$medidasCauchos,//
            'anchos'=>$anchosCauchos,//
            'marcaCauchos'=>$marcaCauchos,
            'modeloCauchos'=>$modeloCauchos,
            'disenios'=> $diseniosCauchos->where('esFrio',$info_product->tipoRenovado)

            ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $idZona
     * @param  bool  $veredicto
     * @return \Illuminate\Http\Response
     */
    public function buscarFalla($id)
    {
        $rechazo = Rechazo::find($id);
        $objeto = (object) [
            'causas'=>$rechazo->ListCausa,
            'recomendaciones'=>$rechazo->ListRecomendacion
        ];

        
        return $objeto;
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

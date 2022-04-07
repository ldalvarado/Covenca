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
use App\Models\DocventaReclamo;
use App\Models\CreditoReclamo;
use App\Models\Sucursal;
use App\Models\PdfReclamo;
class CreditoController extends Controller
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
        $creditoList = collect();
        foreach($Garantias as $Garantia){
            if(sizeof($Garantia->estadoReclamo) != 0 && sizeof($Garantia->estatusReclamo) != 0){
                
                if($Garantia->estadoReclamo[0]->idEstado == 5 && $Garantia->estatusReclamo[0]->idEstatus == 4 || $Garantia->estatusReclamo[0]->idEstatus == 6){
                    $Garantia -> created_at_str = strval(date('d/m/Y',strtotime($Garantia -> created_at))) ;
                    $Garantia -> sucursal;
                    $Garantia -> DocVenta;
                    $Garantia -> Analisis;
                    $Garantia ->ReclamoCompra;

                    $Garantia -> proc_str = $Garantia -> analisis -> porcentaje;
                    $Garantia -> estatus_str = $Garantia ->estatusReclamo->first()->getEstatus->descripcion;
                    $Garantia -> estatus_id = $Garantia ->estatusReclamo->first()->getEstatus->idEstatus;

                    $GarantiasList->add($Garantia);
                }
                
            }

         };

         foreach($Garantias as $Garantia){

            foreach($Garantia->ListEstadosReclamo as $GarantiaReclamo){
                if($GarantiaReclamo->idEstado == 5 && $GarantiaReclamo->activo == false|| $GarantiaReclamo->idEstado == 6 && $GarantiaReclamo->activo == false){
                   
                    $Garantia -> created_at_str = strval(date('d/m/Y',strtotime($Garantia -> created_at))) ;
                    $Garantia -> sucursal;
                    $Garantia -> DocVenta;
                    $Garantia -> Analisis;
                    $Garantia ->ReclamoCompra;

                    $Garantia ->ListEstatusReclamo->last()->getEstatus;
                    $Garantia-> estatus_str = $Garantia ->ListEstatusReclamo->last()->getEstatus->descripcion;
                    $Garantia -> estatus_id = $Garantia ->estatusReclamo->first()->getEstatus->idEstatus;

                    $creditoList->add($Garantia);
                    break;
                }
            }

         };
        
        $Sucursales = Sucursal::all();
        $estatus = Estatus::all();
        return view('Credito.index')->with(['creditosListos'=> $creditoList,'ListaCredito'=> $GarantiasList,'Sucursales'=>$Sucursales,"estatus"=>$estatus]);
    }
    function FiltroSucursal(Request $request){
        $Garantias = Reclamo::all();
        $GarantiasList = collect();
        $creditoList = collect();
        foreach($Garantias as $Garantia){
            if(sizeof($Garantia->estadoReclamo) != 0 && sizeof($Garantia->estatusReclamo) != 0){
                
                if($Garantia->estadoReclamo[0]->idEstado == 5 && $Garantia->estatusReclamo[0]->idEstatus == 4 || $Garantia->estatusReclamo[0]->idEstatus == 6){
                    $Garantia -> created_at_str = strval(date('d/m/Y',strtotime($Garantia -> created_at))) ;
                    $Garantia -> sucursal;
                    $Garantia -> DocVenta;
                    $Garantia -> Analisis;
                    $Garantia ->ReclamoCompra;
                    $Garantia -> proc_str = $Garantia -> analisis -> porcentaje;

                    $Garantia -> estatus_str = $Garantia ->estatusReclamo->first()->getEstatus->descripcion;
                    $Garantia -> estatus_id = $Garantia ->estatusReclamo->first()->getEstatus->idEstatus;

                    if($request->estatus){
                        if($request->estatus ==$Garantia->estatusReclamo[0]->idEstatus){
                            $GarantiasList->add($Garantia);
                        }
                        
                    }else{
                        $GarantiasList->add($Garantia);

                    }
                }
                
            }

         };
         
         foreach($Garantias as $Garantia){

            foreach($Garantia->ListEstadosReclamo as $GarantiaReclamo){
                if($GarantiaReclamo->idEstado == 5 && $GarantiaReclamo->activo == false|| $GarantiaReclamo->idEstado == 6 && $GarantiaReclamo->activo == false){
                    $Garantia -> created_at_str = strval(date('d/m/Y',strtotime($Garantia -> created_at))) ;
                    $Garantia -> sucursal;
                    $Garantia -> DocVenta;
                    $Garantia -> Analisis;
                    $Garantia ->ReclamoCompra;

                    $Garantia ->ListEstatusReclamo->last()->getEstatus;
                    $Garantia-> estatus_str = $Garantia ->ListEstatusReclamo->last()->getEstatus->descripcion;
                    $Garantia -> estatus_id = $Garantia ->estatusReclamo->first()->getEstatus->idEstatus;

                    if($request->estatus){
                        if($request->estatus ==$Garantia->estatusReclamo[0]->idEstatus){
                            $creditoList->add($Garantia);
                            break;
                        }
                    }else{
                        $creditoList->add($Garantia);
                        break;

                    }
             
                }
            }

         };
         if($request->id){
            $creditoList = $creditoList->where('idSucursal',$request->id);
            $GarantiasList = $GarantiasList->where('idSucursal',$request->id);
         }
         if($request->fecha1){
            $creditoList = $creditoList->where('created_at','>',$request->fecha1);
            $GarantiasList = $GarantiasList->where('created_at','>',$request->fecha1);

         }
         if($request->fecha2){
            $creditoList = $creditoList->where('created_at','<',$request->fecha2);
            $GarantiasList = $GarantiasList->where('created_at','<',$request->fecha2);

         }
         return response()->json(['creditosListos'=> $creditoList,'ListaCredito'=> $GarantiasList]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('Credito.create');
    }

    public function wizard() {
        return view('Credito.wizard');
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

                'idReclamo' => 'required',
                'precioVenta'=> 'required',
                'nroCredito'=> 'required',
                'reconocimiento'=> 'required',
                'credito'=> 'required'
                
            ]);
            $user = Auth::user();

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

            $credito = CreditoReclamo::create([
                'idReclamo' => $request->idReclamo,
                'codigo' => $request->nroCredito,
                'codigoControl'=> $request->nroControl,
                'porcentaje'=> $request->reconocimiento,
                'montoPagar'=> $request->credito,
                'precioVenta'=> $request->precioVenta,
                'idUsuario' => $user->id
            ]);


            $affected = DB::table('reclamo_estado')
            ->where('idReclamo', $request->idReclamo)
            ->update(['activo' => false]);

            $nuevo = ReclamoEstado::create([
                'idReclamo' => $request->idReclamo,
                'idEstado' => 6,
                'observacion' => "movió la garantía a cerrado",
                'activo'=> false,
                'idUsuario'=> $user->id
            ]);
         
                app('App\Http\Controllers\MailController')->sendGarantiaEmail("Cerrado",$request->idReclamo,Reclamo::where('id',$request->idReclamo)->pluck('email')->first());
            
                try{try{
                    $imagen = $request->file('pdf');
                    
                    if($imagen != null) {
                    
    
                        $nombre = $imagen->getClientOriginalName(); 
                        $imagen->move(public_path("img"), $nombre);
                        // Creamos una imagen
                    
                        // Guardamos la imagen
        
                            //$imagen->move(public_path("img")factura, $nombre,20);
                
                            $foto = PdfReclamo::create([
                                'idReclamo'=>$request->idReclamo,
                                'urlpdf'=>'/img/'.$nombre,
                                'descripcionImagen'=>$nombre,
                                'idUsuario'=>$user->id,
                                'estado'=>1,
                                'activo'=>1,
                                'pdf64' => file_get_contents(public_path("img/".$nombre)), 
                            ]);
                
                        unlink(public_path("img/".$nombre));
                        
                    }
                }catch(Throwable $t ){
                    $successState = false;
                    $error_str = "La imagen colocada no esta en un formato valido, los formatos permitidos son Jpeg y Png";
                    return ;
                }}
                catch(Exception $e ){ 
                    $successState = false;
                    $error_str = "La imagen colocada no esta en un formato valido, los formatos permitidos son Jpeg y Png";
                    return ;
                }
           

            return response()->json([
                'isSuccess'=> true,
                'message'=> $credito
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'isSuccess'=> false,
                'message'=> 'ocurrió un error' ,
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
        $marcaCauchos = MarcaCaucho::all();
        $modeloCauchos = ModeloCaucho::all();
        $modeloCauchos = DisenoBanda::all();
        
        $cond_vehiculo = DB::table('condicion_vehiculo')->where('idReclamo', $reclamo->id)->first();
        $info_product =  InformacionProducto::all()->where('idReclamo', $reclamo->id)->first();
        $zonas =  Zona::all();
        $rechazo = Rechazo::all();
        $DocventaReclamo =DocventaReclamo::all()->Where('idReclamo', $reclamo->id);
        return view('Credito.create', ['reclamo'=> $reclamo,
        'DocventaReclamo'=>$DocventaReclamo,
        'DisenoBanda'=>$diseniosCauchos,
        'info_product'=>$info_product,
        'cargaVehiculo'=>$cargaVehiculo,
        'medidas'=>$medidasCauchos,//
        'anchos'=>$anchosCauchos,//
        'marcaCauchos'=>$marcaCauchos,
        'modeloCauchos'=>$modeloCauchos,
        'disenios'=> $diseniosCauchos

        ]);
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

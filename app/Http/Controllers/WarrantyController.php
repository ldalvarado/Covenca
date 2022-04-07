<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\Models\Warranty;
use Illuminate\Support\Facades\DB;
use App\Http\Conexiones;
use App\Models\c;
use App\Models\Condicion;
use App\Models\DiagramaCaucho;
use App\Models\TipoDiagrama;
use App\Models\DatosCampos;
use App\Models\DisenoAncho;
use App\Models\ReclamoCondicion;
use App\Models\Sucursal;
use App\Models\ReclamoDiagramaCaucho;
use App\Models\ReclamoDiagramaAD    ;
use App\Models\ReclamoEspecial;
use App\Models\DocventaReclamo;
use App\Models\Profundidad;
use App\Models\Valvula;
use App\Models\ReclamoCompra;
use App\Models\DiagramaArea;
use App\Models\ReclamoDiagramaCamara;
use App\Models\Producto;
class WarrantyController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user();
        $reclamos_temp = Reclamo::all();
        $reclamos = collect();
        foreach($reclamos_temp as $reclamo){
            $reclamo -> estado_str = "error";
            if($reclamo->ListEstadosReclamo->last() != null)
                $reclamo -> estado_str = $reclamo->ListEstadosReclamo->last()->getEstado->descripcion;

           
            $reclamos -> add($reclamo);
        }
        if( Auth::user()->sucursal->principal == 0 ){
            $reclamos = $reclamos->where('idSucursal', $usuario->idSucursal);
            
            /*
            
            */
        }
       
        

        return view('warranty.index')->with('reclamos', $reclamos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function DiagramaCamara(Request $request){
     
        if($request->ajax()){
            $id = $request->id;
            $user = Auth::user();
            $DiagramaArea = DiagramaArea::all()->first();
            
            
            return response()->json(["Data"=>$DiagramaArea]);
            
        }
        return response()->json(["Data"=>""]);
            
    }
    public function DiagramaCaucho(Request $request){
     
        if($request->ajax()){
            $id = $request->id;
            $user = Auth::user();
            $producto = Producto::find($id)->first();
            $tipo = TipoDiagrama::where('idProducto',$id)->first();
            if($tipo != null){
                $id = $tipo ->id;
                $diagrama = DiagramaCaucho::where('idTipoDiagrama',$id)->get();
                return response()->json(["Data"=>$diagrama]);
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
        $condiciones = Condicion::all();
        $products = Producto::all();
        $countries = Pais::all();
        $marcaVehiculos = MarcaVehiculo::all();
        $modeloVehiculos = ModeloVehiculo::all();
        $marcaCauchos = MarcaCaucho::all();
        $modeloCauchos = ModeloCaucho::all();
        $tipoVehiculos = TipoVehiculo::all();
        $tipoCargaVehiculos = TipoCargaVehiculo::all();
        $tipoTerrenoVehiculos = TipoTerrenoVehiculo::all();
        $cargaVehiculo = CargaVehiculo::all();
        $anchosCauchos = AnchoCaucho::all();
        $medidasCauchos = MedidaCaucho::all();
        $diseniosCauchos = DisenoBanda::all();
        $valvulas = Valvula::all();
        //$url = 'http://3.14.204.63/backend/public/api/';
        
        /*//de 'neumáticos': medidas, anchos, diseños,
        $response_medidas = Http::get('http://3.14.204.63/backend/public/api/medidas');
        if ($response_medidas->successful()){
            $medidas = $response_medidas->collect()['data'];
            //validar luego si estan activas o no
        } else $medidas = [];

        //ancho
        $response_anchos = Http::get('http://3.14.204.63/backend/public/api/anchos');
        if ($response_anchos->successful()){
            $anchos = $response_anchos->collect()['data'];
            //validar luego si estan activas o no
        } else $anchos = [];

        //disenio
        $response_disenios = Http::get('http://3.14.204.63/backend/public/api/disenos');
        if ($response_disenios->successful()){
            $disenios = $response_disenios->collect()['data'];
            //validar luego si estan activas o no
        } else $disenios = [];*/

        return view('warranty.create', ['condiciones'=>$condiciones,
                                        'products' => $products,
                                        'countries'=> $countries,
                                        'marcaVehiculos'=>$marcaVehiculos,
                                        'modeloVehiculos'=>$modeloVehiculos,
                                        'marcaCauchos'=>$marcaCauchos,
                                        'modeloCauchos'=>$modeloCauchos,
                                        'tipoVehiculos'=>$tipoVehiculos,
                                        'tipoCargaVehiculos'=>$tipoCargaVehiculos,
                                        'tipoTerrenoVehiculos'=>$tipoTerrenoVehiculos,
                                        'cargaVehiculo'=>$cargaVehiculo,
                                        'medidas'=>$medidasCauchos,//
                                        'anchos'=>$anchosCauchos,//
                                        'disenios'=> $diseniosCauchos,
                                        'valvulas'=>$valvulas,
                                    ]);
    }

    public function wizard() {
        return view('warranty.wizard');
    }

  

  
    
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
           $validator = Validator::make($request->all(),[
            'codigoWeb'		=>'required',
            'codigoLocal'		=>'required',
            'activo'		=>'required',
            'fechaFactura'		=>'required',
            'precio'		=>'required',
            'iva'		=>'required',
            'factura'		=>'required',
            'mtoTotal'		=>'required',
            'idTipoDiagrama'		=>'required',
            'rif'	=>'required',
            'nombre'		=>'required',
            'direccion'		=>'required',
            'observacion'		=>'required',
            'condiciones'		=>'required',
            'condiciones_activo'		=>'required',
            'idEstado'		=>'required',
            'observacionEstado'		=>'required',
            'idEstatus'		=>'required',
            'observacionEstatus'		=>'required',
            'CodItem'		=>'required',
            'ItemDescripcion'		=>'required',
            'ItemCantidad'		=>'required',
            'TotalItem'		=>'required',
            'CostoItem'		=>'required',
            'PrecioItem'		=>'required',
            'MtoTaxItem'		=>'required',
            'idProducto' => 'required',
            'idTipoVehiculo'        => 'required',
            'idMarca'               => 'required',
            'idModelo'              => 'required',
            'idCargaVehiculo'       => 'required',
            'idTipoCargaVehiculo'   => 'required',
            'idEjeVehiculo'         => 'required',//$reclamo -> idEjeVehiculo,
            'kilometraje'           => 'required',
            'anchoRin'              => 'required',
            'psi'                   => 'required', 
            'email' => 'required',
            'telefono' =>'required'          
        ]);
         if($validator->fails()){
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
            $reclamo =             $request;
            if($reclamo->boleta!= null){
                $info_producto = InformacionProducto::where('boleta',$reclamo ->boleta)->get();
                if(count($info_producto) >0 ){
                    return response()->json([
                        'isSuccess'=> false,
                        'message'=> "El numero de Boleta Ya Existe",
                        'data'=>$info_producto
                    ]);
                }
            }
            $error_str = "Garantia Creada correctamente";
            $successState = true;
            $error_transaction = DB::transaction(function() use ($reclamo,$request,&$error_str,&$successState){
                
                /// Crear Reclamo
                $user = Auth::user(); 

                $Reclamos = Reclamo::where('idSucursal', $user->sucursal->id)->get();
                $newCode = '';
                if(sizeof($Reclamos) == 0){
                    $newCode = $user->sucursal->codigo.'-100001';
                } else {
                    $lastCode = $Reclamos->last()['codigoSucursal'];
                    $arrCode = explode('-', $lastCode);
                    $id = (int) $arrCode[1];
                    $id = $id + 1;
                    $length = 6;

                    $newLastCode = str_pad($id,$length,"0", STR_PAD_LEFT);
                    $newCode = $user->sucursal->codigo.'-'.$newLastCode;
                }            
                $sucursal = $user->sucursal;
                $garantia = Reclamo::create([
                    'idTipoDiagrama' => $reclamo    -> idTipoDiagrama,
                    'idSucursal'    =>$user         ->idSucursal,
                    'factura'       =>$reclamo      ->factura,
                    'fechaFactura'  =>$reclamo      ->fechaFactura,
                    'precio'        =>$reclamo      ->precio,
                    'iva'           =>$reclamo      ->iva,
                    'mtoTotal'      =>$reclamo      ->mtoTotal,
                    'rif'           =>$reclamo      ->rif,
                    'nombre'        =>$reclamo      ->nombre,
                    'direccion'     =>$reclamo      ->direccion,
                    'observacion'   =>$reclamo      ->observacion,
                    'codigoSucursal'=>$newCode,
                    'codigoWeb'     =>$reclamo      -> codigoWeb,
                    'codigoLocal'   =>$reclamo      -> codigoLocal,
                    'activo'        =>$reclamo      -> activo,
                    'idUsuario'     =>$user -> id,
                    'email' =>$reclamo -> email,
                    'telefono' =>$reclamo ->telefono
            
                    //Crear  Reclamo Condicion
                

                ]);
                         
                $reclamoId = $garantia->id;
                  
                    try{try{
                        $imagen = $request->file('image');
                        
                        if($imagen != null) {
                        
        
                            $nombre = $imagen->getClientOriginalName(); 
                            $imagen->move(public_path("img"), $nombre);
                            // Creamos una imagen
                        
                            // Guardamos la imagen
            
                                //$imagen->move(public_path("img")factura, $nombre,20);
                    
                                $foto = ImagenReclamo::create([
                                    'idReclamo'=>$reclamoId,
                                    'urlImagen'=>'/img/'.$nombre,
                                    'descripcionImagen'=>$request->descripcion_foto,
                                    'idUsuario'=>$user->id,
                                    'imagen64' => file_get_contents(public_path("img/".$nombre)), 
                                ]);
                    
                            unlink(public_path("img/".$nombre));
                            
                        }
                    }catch(\Throwable $t ){
                        $successState = false;
                        $error_str = "La imagen colocada no esta en un formato valido, los formatos permitidos son Jpeg y Png";
                        return ;
                    }}
                    catch(\Exception $e ){ 
                        $successState = false;
                        $error_str = "La imagen colocada no esta en un formato valido, los formatos permitidos son Jpeg y Png";
                        return ;
                    }
      
              
                
                    
        
                
                $idCondiciones =explode(',', $reclamo->condiciones); 
            
                $condiciones_activo1 = explode(',', $reclamo->condiciones_activo);
            
                for ($i =0; $i < count($idCondiciones); $i++){
                
            
                        ReclamoCondicion::create([
                            'idCondicion' =>   $idCondiciones[$i],
                            'idReclamo' =>      $reclamoId,
                            'respuesta'=>             " ",
                            'activo' =>         $condiciones_activo1[$i],
                            'idUsuario' =>      $user -> id,]);
                }
                if($reclamo ->idProducto == 1 || $reclamo->idProducto == 2 || $reclamo ->idProducto == 4){
                    ReclamoDiagramaCaucho::create([
                        'idReclamo'  => $reclamoId,
                        'idDiagrama' => $reclamo -> id_diagrama,
                        'posicion'   => $reclamo -> posicion,    
                        'contenido'  => $reclamo -> diagramaContenido,    
                        'activo' => 1,
                        'idUsuario' => $user -> id
                ]);
                }
                    
                if($reclamo ->idProducto == 3){
                    ReclamoDiagramaCaucho::create([
                        'idReclamo'  => $reclamoId,
                        'idDiagrama' => 1,
                        'posicion'   => $reclamo -> posicionCamara,    
                        'activo' => 1,
                        'contenido' => $reclamo ->allDiagrama,
                        'idUsuario' => $user -> id
                        ]); 
                }
        
                /*ReclamoDiagramaAD::create([
                'idReclamo' => $reclamoId,
                'idDiagrama' => $reclamo -> id_diagrama,
                'seleccionado'=>   $reclamo -> seleccionado,
                'contenido' => $reclamo -> contenidoDiagrama,  
                'respuesta' =>'',   
                'activo' => 1,
                'idUsuario' => $user -> id
                ]); */
                if($reclamo -> idEstado != null){
                    if($reclamo -> idEstado == 6){
                        ReclamoEstado::create([
                            'idReclamo' => $reclamoId,
                            'idEstado' => $reclamo -> idEstado,
                            'observacion' => $reclamo -> observacionEstado,
                            'activo' => 0,
                            'idUsuario' => $user -> id,]);
                    }else{
                        ReclamoEstado::create([
                            'idReclamo' => $reclamoId,
                            'idEstado' => $reclamo -> idEstado,
                            'observacion' => $reclamo -> observacionEstado,
                            'activo' => 1,
                            'idUsuario' => $user -> id,]);
                    }

                }
                
                ReclamoEstatus::create([
                        'idReclamo' => $reclamoId,
                        'idEstatus' => $reclamo -> idEstatus,
                        'observacion' => $reclamo -> observacionEstatus,
                        'activo' => 1,
                        'idUsuario' => $user -> id,]);
                DocventaReclamo::create([
                    'idReclamo'     =>$reclamoId,
                    'idSucursal'    =>$user ->idSucursal,
                    'NumedoD'       => $reclamo -> factura,
                    'CodItem'       => $reclamo -> CodItem ,
                    'descripcion'   => $reclamo -> ItemDescripcion,
                    'cantidad'      => $reclamo -> ItemCantidad,
                    'TotalItem'     => $reclamo -> TotalItem,
                    'Costo'         => $reclamo -> CostoItem,
                    'Precio'        => $reclamo -> PrecioItem,
                    'MtoTax'        => $reclamo -> MtoTaxItem,
                    'activo'        => 1
                ]);
                if($reclamo -> descripcionEspecial != null){
                    ReclamoEspecial::create ([      
                        'idReclamo' => $reclamoId, 
                        'descripcion' => $reclamo -> descripcionEspecial, 
                        'observacion' => $reclamo -> descripcionEspecial, 
                        'estado' => 1,
                        'idUsuario' => $user->id, 
                        'activo'=> 1
        
                ]);
                }

                //WIP
                CondicionVehiculo::create([ 
                    'idReclamo' => $reclamoId,
                    'idTipoVehiculo'        => $reclamo -> idTipoVehiculo,
                    'idMarca'               => $reclamo -> idMarca,
                    'idModelo'              => $reclamo -> idModelo,
                    'idCargaVehiculo'       => $reclamo -> idCargaVehiculo,
                    'idTipoCargaVehiculo'   => $reclamo -> idTipoCargaVehiculo,
                    'idEjeVehiculo'         => 1,//$reclamo -> idEjeVehiculo,
                    'kilometraje'           => $reclamo -> kilometraje, 
                    'anchoRin'              => $reclamo -> anchoRin,
                    'psi'                   => $reclamo -> psi,
                    'activo'                => 1,
                    'idUsuario'             => $user -> id]);
                    
                InformacionProducto::create([
                    'idReclamo' => $reclamoId,
                    'idProducto' => $reclamo -> idProducto, 
                    'idPais' => $reclamo -> pais, 
                    'idMarcaCaucho' => $reclamo -> idMarcaCaucho, 
                    'idModeloCaucho' => $reclamo -> idModeloCaucho,
                    'idMedidaCaucho' => $reclamo -> idMedidaCaucho,
                    'idDisenoBanda' => $reclamo -> idDisenoBanda,
                    'idProfundidad' => $reclamo->idProfundidad,
                    
                    'dotSerial' => $reclamo -> dotSerial, 
                    'profundidad' => $reclamo -> profundidad,
                    'boleta' => $reclamo ->boleta,
                    'tipoRenovado' => $reclamo -> tipoRenovado,
                    'serial' => $reclamo -> serial, 
                    'loteBanda' => $reclamo -> loteBanda,
                    'loteVulcanizacion' => $reclamo -> loteVulcanizacion,
                    'loteProducto' => $reclamo ->loteProducto,
                    'valvula' => $reclamo -> valvula,
                    'fechaRecepcion' => $reclamo -> fechaRecepcion,
                    'activo' => 1,
                    'idUsuario' => $user -> id

                ]);
                if($reclamo -> DCompra !=null){
                    ReclamoCompra::create([
                        'idReclamo' => $reclamoId,
                        'NumeroD' =>$reclamo ->DCompra, 
                        'Fecha'=>$reclamo ->FechaCompra,
                        'CodProv'=>$reclamo ->ProvCompra,
                        'Descrip'=>$reclamo ->DesCompra,
                        'Monto' =>$reclamo ->MonCompra,
                        'MtoTax'=>$reclamo ->TaxDCompra,
                        'Direc1' => $reclamo -> Direc1,
                        'TExento'=>$reclamo ->TexDCompra,
                        'idUsuario'=>$user -> id,
                        'activo' => 1
                    ]);
                   
                            app('App\Http\Controllers\MailController')->sendGarantiaEmail("Pendiente Por Guía",$reclamoId,$reclamo -> email);
                        
                      
                
                    
                }
            return response()->json([
                'isSuccess'=> $successState,
                'message'=> $garantia
            ]);
            });
            return response()->json([
                'isSuccess'=> $successState,
                'message'=> $error_str
            ]);
       
    }
    
    public function storeData(Request $request){
        $user = Auth::user();
        $reclamo =             $request;
        $reclamoId = (Reclamo::all()->last())->id;

        CondicionVehiculo::create([ 
            'idReclamo' => $reclamoId,
            'idTipoVehiculo'        => $reclamo -> idTipoVehiculo,
            'idMarca'               => $reclamo -> idMarca,
            'idModelo'              => $reclamo -> idModelo,
            'idCargaVehiculo'       => $reclamo -> idCargaVehiculo,
            'idTipoCargaVehiculo'   => $reclamo -> idTipoCargaVehiculo,
            'idEjeVehiculo'         => 1,//$reclamo -> idEjeVehiculo,
            'kilometraje'           => $reclamo -> kilometraje, 
            'anchoRin'              => $reclamo -> anchoRin,
            'psi'                   => $reclamo -> psi,
            'activo'                => 1,
            'idUsuario'             => $user -> id]);

        InformacionProducto::create([
            'idReclamo' => $reclamoId,
            'idProducto' => $reclamo -> idProducto, 
            'idPais' => $reclamo -> pais, 
            'idMarcaCaucho' => $reclamo -> idMarcaCaucho, 
            'idModeloCaucho' => $reclamo -> idModeloCaucho,
            'idMedidaCaucho' => $reclamo -> idMedidaCaucho,
            'idDisenoBanda' => $reclamo -> idDisenoBanda,
            'idProfundidad' => $reclamo->idProfundidad,
            
            'dotSerial' => $reclamo -> dotSerial, 
            'profundidad' => $reclamo -> profundidad,
            'boleta' => $reclamo ->boleta,
            'tipoRenovado' => $reclamo -> tipoRenovado,
            'serial' => $reclamo -> serial, 
            'loteBanda' => $reclamo -> loteBanda,
            'loteVulcanizacion' => $reclamo -> loteVulcanizacion,
            'loteProducto' => $reclamo ->loteProducto,
            'valvula' => $reclamo -> valvula,
            'fechaRecepcion' => $reclamo -> fechaRecepcion,
            'activo' => 1,
            'idUsuario' => $user -> id

        ]);
    }
    /*public function store(Request $request)
    {
        try {
            dd($request);
            //validaciones
            $validator = Validator::make($request->all(),[
                'nro_factura' => 'required',
                'fecha' => 'required',
                'precio' => 'required',
                'iva' => 'required',
                'monto_civa' => 'required',
                'nombre_cliente' => 'required',
                'direccion' => 'required',
                'descripcion_solicitud' => 'required',

                'req_reparaciones' => 'required',
                'req_danios' => 'required',
                'req_banda' => 'required',
                'req_etiqueta' => 'required',
                'req_dot_serial' => 'required',
                'req_renovacion' => 'required',

                'foto_falla' => 'required|mimes:png,jpg|max:2048',
                'nombre_foto' => 'required',
                'descripcion_foto' => 'required',

                'tipo_vehiculo' => 'required',
                'marca_vehiculo' => 'required',
                'modelo_vehiculo' => 'required',
                'carga_maxima' => 'required',
                'tipo_carga' => 'required',
                'kilometraje' => 'required',
                'ancho_rin' => 'required',
                'psi' => 'required',

                'marca' => 'required',
                'modelo' => 'required',
                'dot_serial' => 'required',
                'profundidad' => 'required',
                'boleta' => 'required|unique:App\Models\InformacionProducto',
                'tipo_renovado' => 'required',
                'serial_produccion' => 'required'
            ]);
            
            if($validator->fails()){
                return back()->withInput()
                             ->with('error', 'Error en los campos')
                             ->withErrors($validator);
            }
            

            $user = Auth::user();

            $Reclamos = Reclamo::where('codigoSucursal', $user->idSucursal)->get();
            $newCode = '';
            if(sizeof($Reclamos) == 0){
                $newCode = $user->sucursal->codigo.'-000001';
            } else {
                $lastCode = $Reclamos->last()['codigo'];
                $arrCode = explode('-', $lastCode);
                $id = (int) $arrCode[1];
                $id = $id + 1;
                $length = 6;

                $newLastCode = str_pad($id,$length,"0", STR_PAD_LEFT);
                $newCode = $user->sucursal->codigo.'-'.$newLastCode;
            }

            $reclamo = Reclamo::create([
                //'idEstatus'=>1,//dará problemas porque es relacional y es atabla está vacia
                'idSucursal'=>$user->idSucursal,
                'factura'=>$request->nro_factura,
                'fechaFactura'=>$request->fecha,
                'precio'=>$request->precio,
                'iva'=>$request->iva,
                'mtoTotal'=>$request->monto_civa,
                'rif'=>$request->rif,
                'nombre'=>$request->nombre_cliente,
                'direccion'=>$request->direccion,
                'observacion'=>$request->descripcion_solicitud,
                'codigoSucursal'=>$newCode,
                'codigoWeb'=>1,
                'codigoLocal'=>1,
                'activo'=>true,
                'idUsuario'=>$user->id
            ]);

            $condicion = CondicionCaucho::create([
                'idReclamo'=>$reclamo->id,
                'reparacionesTerceros'=>($request->req_reparaciones == 'on') ? true : false ,
                'danioTalones'=>($request->req_danios == 'on') ? true : false ,
                'bandaRodamiento'=>($request->req_banda == 'on') ? true : false ,
                'etiquetaProduccion'=>($request->req_etiqueta == 'on') ? true : false ,
                'dotSerial'=>($request->req_dot_serial == 'on') ? true : false ,
                'renovacionMayor'=>($request->req_renovacion == 'on') ? true : false ,
                'activo'=>true, //softdelete
                'idUsuario'=>$user->id,
            ]);

            //guarda la imagen que sube el analista
            $imagen = $request->file('foto_falla');
            $imagen = $request->file('foto_falla');
            $nombre = $request->nombre_foto.'.'.$imagen->getClientOriginalExtension();
            $destino = public_path().('\garantia');
            $imagen->move($destino, $nombre);
            $foto = ImagenReclamo::create([
                'idReclamo'=>$reclamo->id,
                'urlImagen'=>'/garantia/'.$nombre,
                'descripcionImagen'=>$request->descripcion_foto,
                'idUsuario'=>$user->id
            ]);

            $cond_vehiculo = CondicionVehiculo::create([
                'idReclamo'=>$reclamo->id,
                'idTipoVehiculo'=>$request->tipo_vehiculo,
                'idMarca'=>$request->marca_vehiculo,
                'idModelo'=>$request->modelo_vehiculo,
                'idCargaVehiculo'=>$request->carga_maxima,
                'idTipoCargaVehiculo'=>$request->tipo_carga,
                'idEjeVehiculo'=>1, //falta capturar
                'kilometraje'=>$request->kilometraje,
                'anchoRin'=>$request->ancho_rin,
                'psi'=>$request->psi,
                'activo'=>true,
                'idUsuario'=>$user->id
            ]);

            $info_product = InformacionProducto::create([
                'idReclamo'=>$reclamo->id,
                //'idPais'=>$request->pais,
                'idMarcaCaucho'=>$request->marca,
                'idModeloCaucho'=>$request->modelo,
                'idMedidaCaucho'=>$request->medida,
                'idDisenoBanda'=>$request->disenio,
                'dotSerial'=>$request->dot_serial,
                'profundidad'=>$request->profundidad,
                'boleta'=>$request->boleta,
                'tipoRenovado'=>($request->tipo_renovado == 'on') ? true : false,
                'serial'=>$request->serial_produccion,
                //'loteBanda'=>$request->lote_banda,
                //'loteVulcanizacion'=>$request->lote_vulcanizacion,
                'activo'=>true,//
                'idUsuario'=>$user->id
            ]);

            $respuesta = array(
                'status' => 'success',
                'message' => 'Solicitud guardada exitosamente');
            return redirect('/warranty')->with('success', $respuesta);
        } catch (\Throwable $th) {
            dd($th);
            return back()->with('error', $th);
        }
    }*/

    /**
     * Search the specified resource by nro_factura.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscarFactura(Request $request) {
        
        if($request->ajax()){
            $id = $request->factura;
            $user = Auth::user();

            $rs = Conexiones::conectar($user->sucursal->id);
 
            
            //if ($facturas = $rs->query("SELECT * FROM saint.CD_SAFACT WHERE NumeroD='".$id."'")) {
            $saintdb = $user->sucursal->bd;   
            $facturas = $rs->query("SELECT * FROM ".$saintdb.".cd_safact WHERE NumeroD='".$id."'");
         
                $data = $facturas->fetch_all(MYSQLI_ASSOC);
            if(count($data)>0){
                return response()->json(["factura"=>$data]);
            }        
        

            return response()->json(["error"=>"Factura no encontrada","factura"=>""]);

        }
        return response()->json(["error"=>"Factura no encontrada","factura"=>""]);
    }
    /**
     * Search the specified resource by nro_factura.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscarDatosCampos(Request $request) {
        
        if($request->ajax()){
            $id = $request->id;
            $user = Auth::user();
            $producto = Producto::find($id)->first();
            $datos = DatosCampos::where('idProducto',$id)->first();
           
          
            return response()->json(["Data"=>$datos]);
        }
        return response()->json(["error"=>"Factura no encontrada"]);
    }
    public function ListadoTipoProducto(Request $request) {
        
        if($request->ajax()){
            $id = $request->id;
            $user = Auth::user();
            $producto = Producto::all();
       
           
          
            return response()->json(["data"=>$producto]);
        }
        return response()->json(["error"=>"Factura no encontrada"]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscarRIF(Request $request) {
        
        if($request->ajax()){
            $id = $request->factura;
            $user = Auth::user();
            $rs = Conexiones::conectar($user->sucursal->id);
            //$facturas = $rs->query("SELECT * FROM saint.CD_SAFACT WHERE CodClie='".$id."'");
             
           $saintdb = $user->sucursal->bd; 
            $facturas = $rs->query("SELECT * FROM ".$saintdb.".cd_safact WHERE CodClie='".$id."'");
            $data = $facturas->fetch_all(MYSQLI_ASSOC);

            return response()->json(["factura"=>$data]);
        }
        return response()->json(["error"=>"Factura no encontrada"]);
    }
    public function buscarProductos(Request $request) {
        
        if($request->ajax()){
            $id = $request->id;
            $user = Auth::user();
            $rs = Conexiones::conectar($user->sucursal->id);
            //$facturas = $rs->query("SELECT * FROM saint.CD_SAITEMFAC WHERE NumeroD='".$id."'");
           $saintdb = $user->sucursal->bd; 
            $facturas = $rs->query("SELECT * FROM ".$saintdb.".cd_saitemfac WHERE NumeroD='".$id."'");
            $data = $facturas->fetch_all(MYSQLI_ASSOC);

            return response()->json(["factura"=>$data]);
        }
        return response()->json(["error"=>"Factura no encontrada"]);
    }
    
    public function buscarSerial(Request $request) {
        
        if($request->ajax()){
            $codItem = $request->codItem;
            $NumeroD = $request ->numeroD;  
            $user = Auth::user();
            $rs = Conexiones::conectar($user->sucursal->id);
            //$facturas = $rs->query("SELECT * FROM saint.CD_SASERI WHERE CodProd='".$id."'");
            $saintdb = $user->sucursal->bd; 
            $facturas = $rs->query("SELECT * FROM ".$saintdb.".cd_saseprfac WHERE CodItem='".$codItem."' AND NumeroD='".$NumeroD."'");
           

            $data = $facturas->fetch_all(MYSQLI_ASSOC);

            return response()->json(["seriales"=>$data]);
        }
        return response()->json(["error"=>"Factura no encontrada"]);
    }
    public function buscarDatosCompra(Request $request) {
        
        if($request->ajax()){
            $id = $request->id;
            $user = Auth::user();
            $rs = Conexiones::conectar($user->sucursal->id);
            //$facturas = $rs->query("SELECT * FROM saint.CD_SASERI WHERE CodProd='".$id."'");
            $saintdb = $user->sucursal->bd; 
            $facturas = $rs->query("SELECT * FROM ".$saintdb.".cd_sacomp INNER JOIN ".$saintdb.".cd_saseprcom ON ".$saintdb.".cd_saseprcom.NumeroD =  ".$saintdb.".cd_sacomp.NumeroD  WHERE ".$saintdb.".cd_saseprcom.NroSerial='".$id."'AND (INSTR(".$saintdb.".cd_saseprcom.CodProv, '085037667') > 0 OR INSTR(".$saintdb.".cd_sacomp.ID3, '085037667') > 0)"  );
            
            if($facturas == false ){
                $query = "SELECT * FROM ".$saintdb.".cd_sacomp INNER JOIN ".$saintdb.".cd_saitemcom ON ".$saintdb.".cd_saitemcom.NumeroD =  ".$saintdb.".cd_sacomp.NumeroD  WHERE ".$saintdb.".cd_saitemcom.CodItem='".$request->CodItem."' AND (INSTR(".$saintdb.".cd_saitemcom.CodProv, '085037667') > 0  OR INSTR(".$saintdb.".cd_sacomp.ID3, '085037667') > 0)";
                $facturas = $rs->query( $query );
                $data = $facturas->fetch_all(MYSQLI_ASSOC);
                return response()->json(["compra"=>$data, 'query' => $query]);
            }
            $data = $facturas->fetch_all(MYSQLI_ASSOC);
            if(  count(   $data) === 0 ){
                $query = "SELECT * FROM ".$saintdb.".cd_sacomp INNER JOIN ".$saintdb.".cd_saitemcom ON ".$saintdb.".cd_saitemcom.NumeroD =  ".$saintdb.".cd_sacomp.NumeroD  WHERE ".$saintdb.".cd_saitemcom.CodItem='".$request->CodItem."' AND (INSTR(".$saintdb.".cd_saitemcom.CodProv, '085037667') > 0  OR INSTR(".$saintdb.".cd_sacomp.ID3, '085037667') > 0)";
                $facturas = $rs->query( $query );
                $data = $facturas->fetch_all(MYSQLI_ASSOC);
                return response()->json(["compra"=>$data, 'query' => $query]);
            }
          
            //$compras = $rs->query("SELECT * FROM ".$saintdb.".cd_saitemcom WHERE NumeroD='".$facturas->fetch_fields()[1]."'");
            
            return response()->json(["compra"=>$data]);
        }
        return response()->json(["error"=>"Factura no encontrada"]);
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
        $cond_sucursal = collect();
        $cond_analisis = collect();
        foreach($reclamo->condiciones as $condicion){
            if(date('d/m/Y h:i',strtotime($condicion->created_at)) != date('d/m/Y h:i',strtotime($reclamo->created_at))){
                $cond_analisis->add($condicion);
            }else{
                $cond_sucursal->add($condicion);
            }

        };
 
        $foto = DB::table('imagen_reclamo')->where('idReclamo', $reclamo->id)->first();
        $cond_vehiculo = DB::table('condicion_vehiculo')->where('idReclamo', $reclamo->id)->first();
        $info_product =  InformacionProducto::all()->where('idReclamo', $reclamo->id)->first();
        return view('warranty.show', ['reclamo'=> $reclamo,
        'cond_sucursal'=>$cond_sucursal,
        'cond_analisis'=>$cond_analisis,
        'foto'=>$foto,
        'cond_vehiculo'=>$cond_vehiculo,
        'pasa' => 0,
        'info_product'=>$info_product
    ]);
    }

    public function buscarProfundidad($idDiseno)
    {
        $diseno = DisenoBanda::find($idDiseno);
        $objeto = [];

        foreach($diseno->ListProfundidad as $dis){
            array_push($objeto, (object) ['id'=>$dis->Profundidad->id, 'value'=>$dis->Profundidad->descripcion ]);
        }

        return $objeto;
    }

    public function buscarAnchoDiseno($idDiseno)
    {
        $diseno = DisenoBanda::find($idDiseno);
        $objeto = [];

        foreach($diseno->ListDisenoAncho as $dis){
            array_push($objeto, (object) ['id'=>$dis->Profundidad->id, 'value'=>$dis->Ancho->descripcion ]);
        }

        return $objeto;
    }

    public function getProfundidad($id)
    {
        $prof = Profundidad::find($id);

        return $prof->descripcion;
    }

    public function facturaById($id)
    {
        $data = [];

        $user = Auth::user();
        $rs = Conexiones::conectar($user->sucursal->id);
        //$facturas = $rs->query("SELECT * FROM CD_SAFACT WHERE NumeroD='".$id."'");
        $facturas = $rs->query("SELECT * FROM cd_safact WHERE NumeroD='".$id."'");
        $data = $facturas->fetch_all(MYSQLI_ASSOC);

        return response()->json(['success' => true, 'data' => $data], 200);
    }

    public function facturaByClient($id)
    {
        $data = [];

        $user = Auth::user();
        $rs = Conexiones::conectar($user->sucursal->id);
        //$facturas = $rs->query("SELECT * FROM CD_SAFACT WHERE CodClie='".$id."'");
        $facturas = $rs->query("SELECT * FROM cd_safact WHERE CodClie='".$id."'");
        $data = $facturas->fetch_all(MYSQLI_ASSOC);

        return response()->json(['success' => true, 'data' => $data], 200);
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
    public function getPdfReclamo($id){
        $reclamo = Reclamo::where('id',$id)->first();
        $pdfReclamo = $reclamo->PdfReclamo();
        return response($pdfReclamo->first()->pdf64)->header("Content-Type", 'application/pdf');

    }
}

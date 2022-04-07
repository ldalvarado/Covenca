<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\BarCodeController;
use App\Http\Controllers\WarrantyController;
use App\Http\Controllers\EspecialController;
use App\Mail\TestMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/register', 'App\Http\Controllers\Auth\RegisteredUserController@create')
          
                ->name('auth');
Route::get('/','App\Http\Controllers\WelcomeController@index')->name('welcome');

Route::get('/dashboard', 'App\Http\Controllers\WelcomeController@Dashboard')->middleware(['auth'])->name('dashboard');
Route::get('/getPdfReclamo/{id}','App\Http\Controllers\WarrantyController@getPdfReclamo')->name('getPdfReclamo');;
Route::get('/send-email', function(){//function to test send email
    $details = array();
    $details['title'] = 'Coreo de Prueba';
    $details['body'] = 'Este es el texto del correo';
  
    $correo = new TestMail($details);

    Mail::to('dulby.mendez@gmail.com')->send($correo);

    return "Mensaje Enviado";
});

Route::get('users/{id}/changePassword', 'App\Http\Controllers\PasswordController@edit')->name('users.changePassword');
Route::post('/users/changePassword', 'App\Http\Controllers\PasswordController@changePassword')->name('changePasswordFunction'); //dy


//Listados y Gets que no requieren auth
Route::post('/Welcome/getChartData', 'App\Http\Controllers\WelcomeController@getChartData')->name('WelcomeGetChartData'); //dy

Route::post('/Credito/FiltroSucursal', 'App\Http\Controllers\CreditoController@FiltroSucursal')->name('FiltroSucursal'); //dy

Route::post('/Condicion/ListadoCondicion', 'App\Http\Controllers\CondicionController@ListadoCondicion')->name('ListadoCondicion'); //dy
Route::post('/Condicion/GetCondicion', 'App\Http\Controllers\CondicionController@GetCondicion')->name('GetCondicion'); //dy
Route::post('/Condicion/GetCondicionByProducto', 'App\Http\Controllers\CondicionController@GetCondicionByProducto')->name('GetCondicionByProducto'); //dy
Route::post('/Rechazo/ListadoRechazo', 'App\Http\Controllers\RechazoController@ListadoRechazo')->name('ListadoRechazo'); //dy
Route::post('/Rechazo/CreateRechazo', 'App\Http\Controllers\RechazoController@CreateRechazo')->name('CreateRechazo'); //dy
Route::post('/Rechazo/GetRechazoByProducto', 'App\Http\Controllers\RechazoController@GetRechazoByProducto')->name('GetRechazoByProducto'); //dy
Route::post('/Rechazo/ListadoZona', 'App\Http\Controllers\RechazoZonaController@ListadoZona')->name('ListadoZona'); //dy
Route::post('/Rechazo/GetZona', 'App\Http\Controllers\RechazoZonaController@GetZona')->name('GetZona'); //dy
Route::post('/Rechazo/ListadoRecomendacion', 'App\Http\Controllers\RechazoRecomendacionController@ListadoRecomendacion')->name('ListadoRecomendacion'); //dy
Route::post('/Rechazo/GetRecomendacion', 'App\Http\Controllers\RechazoRecomendacionController@GetRecomendacion')->name('GetRecomendacion'); //dy
Route::post('/Rechazo/ListadoCausa', 'App\Http\Controllers\RechazoCausaController@ListadoCausa')->name('ListadoCausa'); //dy
Route::post('/Rechazo/GetCausa', 'App\Http\Controllers\RechazoCausaController@GetCausa')->name('GetCausa'); //dy
Route::post('/Neumaticos/ListadoMarca', 'App\Http\Controllers\NeumaticosMarcaController@ListadoMarca')->name('ListadoMarca'); //dy
Route::post('/Neumaticos/GetMarca', 'App\Http\Controllers\NeumaticosMarcaController@GetMarca')->name('GetMarca'); //dy
Route::post('/Neumaticos/ListadoAncho', 'App\Http\Controllers\NeumaticosAnchoController@ListadoAncho')->name('NeumaticoListadoAncho'); //dy
Route::post('/Neumaticos/GetAncho', 'App\Http\Controllers\NeumaticosAnchoController@GetAncho')->name('NeumaticoGetAncho');             //dy
Route::post('/Neumaticos/ListadoProfundidad', 'App\Http\Controllers\NeumaticosProfundidadController@ListadoProfundidad')->name('NeumaticoListadoProfundidad'); //dy
Route::post('/Neumaticos/GetProfundidad', 'App\Http\Controllers\NeumaticosProfundidadController@GetProfundidad')->name('NeumaticoGetProfundidad');             //dy
Route::post('/Neumaticos/ListadoDiseno', 'App\Http\Controllers\NeumaticosDisenoController@ListadoDiseno')->name('ListadoDiseno'); //dy
Route::post('/Neumaticos/GetDiseno', 'App\Http\Controllers\NeumaticosDisenoController@GetDiseno')->name('GetDiseno'); //dy
Route::post('/Neumaticos/GetDisenoByTemp', 'App\Http\Controllers\NeumaticosDisenoController@GetDisenoByTemp')->name('GetDisenoByTemp'); //dy
Route::post('/Neumaticos/ListadoDisenoAncho', 'App\Http\Controllers\NeumaticosDisenoAnchoController@ListadoDisenoAncho')->name('ListadoDisenoAncho'); //dy
Route::post('/Neumaticos/GetDisenoAncho', 'App\Http\Controllers\NeumaticosDisenoAnchoController@GetDisenoAncho')->name('GetDisenoAncho');             //dy
Route::post('/Neumaticos/GetProfundidadByDisenoAncho', 'App\Http\Controllers\NeumaticosDisenoAnchoController@GetProfundidadByDisenoAncho')->name('GetProfundidadByDisenoAncho');     //dy
Route::post('/Neumaticos/ListadoModelo', 'App\Http\Controllers\NeumaticosModeloController@ListadoModelo')->name('ListadoModelo'); //dy
Route::post('/Neumaticos/GetModelo', 'App\Http\Controllers\NeumaticosModeloController@GetModelo')->name('GetModelo'); //dy
Route::post('/Neumaticos/GetModeloByMarca', 'App\Http\Controllers\NeumaticosModeloController@GetModeloByMarca')->name('GetModeloByMarca'); //dy
Route::post('/Neumaticos/ListadoMedida', 'App\Http\Controllers\NeumaticosMedidaController@ListadoMedida')->name('ListadoMedida'); //dy
Route::post('/Neumaticos/GetMedida', 'App\Http\Controllers\NeumaticosMedidaController@GetMedida')->name('GetMedida'); //dy
Route::post('/Neumaticos/ListadoLesion', 'App\Http\Controllers\NeumaticosLesionController@ListadoLesion')->name('NeumaticoListadoLesion'); //dy
Route::post('/Neumaticos/GetLesion', 'App\Http\Controllers\NeumaticosLesionController@GetLesion')->name('NeumaticoGetLesion');             //dy
Route::post('/Neumaticos/ListadoAplicacion', 'App\Http\Controllers\NeumaticosAplicacionController@ListadoAplicacion')->name('NeumaticoListadoAplicacion'); //dy
    Route::post('/Neumaticos/GetAplicacion', 'App\Http\Controllers\NeumaticosAplicacionController@GetAplicacion')->name('NeumaticoGetAplicacion');             //dy
    Route::post('/CauchoIndustrial/ListadoMarca', 'App\Http\Controllers\CauchoIndustrialMarcaController@ListadoMarca')->name('CauchoIndustrialListadoMarca'); //dy
    Route::post('/CauchoIndustrial/GetMarca', 'App\Http\Controllers\CauchoIndustrialMarcaController@GetMarca')->name('CauchoIndustrialGetMarca');             //dy
    Route::post('/CauchoIndustrial/ListadoMedida', 'App\Http\Controllers\CauchoIndustrialMedidaController@ListadoMedida')->name('CauchoIndustrialListadoMedida'); //dy
    Route::post('/CauchoIndustrial/GetMedida', 'App\Http\Controllers\CauchoIndustrialMedidaController@GetMedida')->name('CauchoIndustrialGetMedida'); //dy
    Route::post('/Camara/ListadoMarca', 'App\Http\Controllers\CamaraMarcaController@ListadoMarca')->name('CamaraListadoMarca'); //dy
    Route::post('/Camara/GetMarca', 'App\Http\Controllers\CamaraMarcaController@GetMarca')->name('CamaraGetMarca');             //dy
    Route::post('/Camara/ListadoMedida', 'App\Http\Controllers\CamaraMedidaController@ListadoMedida')->name('CamaraListadoMedida'); //dy
    Route::post('/Camara/GetMedida', 'App\Http\Controllers\CamaraMedidaController@GetMedida')->name('CamaraGetMedida'); //dy
    Route::post('/Camara/ListadoValvula', 'App\Http\Controllers\CamaraValvulaController@ListadoValvula')->name('CamaraListadoValvula'); //dy
    Route::post('/Camara/GetValvula', 'App\Http\Controllers\CamaraValvulaController@GetValvula')->name('CamaraGetValvula');             //dy
    Route::post('/Protector/ListadoMarca', 'App\Http\Controllers\ProtectorMarcaController@ListadoMarca')->name('protectorListadoMarca'); //dy
     Route::post('/Protector/GetMarca', 'App\Http\Controllers\ProtectorMarcaController@GetMarca')->name('protectorGetMarca');             //dy
     Route::post('/Vehiculos/ListadoTipoVehiculo', 'App\Http\Controllers\VehiculosTipoController@ListadoTipoVehiculo')->name('ListadoTipoVehiculo'); //dy
     Route::post('/Vehiculos/GetTipoVehiculo', 'App\Http\Controllers\VehiculosTipoController@GetTipoVehiculo')->name('GetTipoVehiculo'); //dy
     Route::post('/Vehiculos/GetTipoVehiculoByEje', 'App\Http\Controllers\VehiculosTipoController@GetTipoVehiculoByEje')->name('GetTipoVehiculoByEje'); //dy
     Route::post('/Vehiculos/ListadoMarca', 'App\Http\Controllers\VehiculosMarcaController@ListadoMarca')->name('VehiculoListadoMarca'); //dy
    Route::post('/Vehiculos/GetMarca', 'App\Http\Controllers\VehiculosMarcaController@GetMarca')->name('VehiculoGetMarca');             //dy
    Route::post('/Vehiculos/ListadoModelo', 'App\Http\Controllers\VehiculosModeloController@ListadoModelo')->name('ListadoModeloVehiculo'); //dy
    Route::post('/Vehiculos/CreateModelo', 'App\Http\Controllers\VehiculosModeloController@CreateModelo')->name('CreateModeloVehiculo'); //dy
    Route::post('/Vehiculos/ListadoCarga', 'App\Http\Controllers\VehiculosCargaController@ListadoCarga')->name('VehiculoListadoCarga'); //dy
    Route::post('/Vehiculos/GetCarga', 'App\Http\Controllers\VehiculosCargaController@GetCarga')->name('VehiculoGetCarga');             //dy
    Route::post('/Vehiculos/ListadoTipoCarga', 'App\Http\Controllers\VehiculosTipoCargaController@ListadoTipoCarga')->name('VehiculoListadoTipoCarga'); //dy
    Route::post('/Vehiculos/GetTipoCarga', 'App\Http\Controllers\VehiculosTipoCargaController@GetTipoCarga')->name('VehiculoGetTipoCarga');             //dy
    Route::post('/Vehiculos/ListadoTipoTerreno', 'App\Http\Controllers\VehiculosTipoTerrenoController@ListadoTipoTerreno')->name('VehiculoListadoTipoTerreno'); //dy
    Route::post('/Vehiculos/GetTipoTerreno', 'App\Http\Controllers\VehiculosTipoTerrenoController@GetTipoTerreno')->name('VehiculoGetTipoTerreno');             //dy
    Route::post('/Vehiculos/GetModeloByMarca', 'App\Http\Controllers\VehiculosModeloController@GetModeloByMarca')->name('GetModeloByMarcaVehiculo'); //dy
    Route::post('/Garantia/getProfundidad', 'App\Http\Controllers\WarrantyController@getProfundidad')->name('getProfundidad');
    
    Route::post('/Garantia/getProfundidad/{id}', 'App\Http\Controllers\WarrantyController@getProfundidad');


Route::group(['middleware' => ['auth', 'admin']], function(){

    Route::resource('/Neumaticos/renovados', 'App\Http\Controllers\RenewController');
    
     //Condiciones Productos
     Route::resource('/Condicion/Condicion', 'App\Http\Controllers\CondicionController');
     Route::post('/Condicion/CreateCondicion', 'App\Http\Controllers\CondicionController@CreateCondicion')->name('CreateCondicion'); //dy
     Route::delete('/Condicion/DeleteCondicion', 'App\Http\Controllers\CondicionController@DeleteCondicion')->name('DeleteCondicion'); //dy
     Route::put('/Condicion/UpdateCondicion', 'App\Http\Controllers\CondicionController@UpdateCondicion')->name('UpdateCondicion'); //dy
     
     //Rechazo
     Route::resource('/Rechazo/Rechazo', 'App\Http\Controllers\RechazoController');
     Route::delete('/Rechazo/DeleteRechazo', 'App\Http\Controllers\RechazoController@DeleteRechazo')->name('DeleteRechazo'); //dy
     Route::post('/Rechazo/GetRechazo', 'App\Http\Controllers\RechazoController@GetRechazo')->name('GetRechazo'); //dy
     Route::put('/Rechazo/UpdateRechazo', 'App\Http\Controllers\RechazoController@UpdateRechazo')->name('UpdateRechazo'); //dy
    //Rechazo Zona
    Route::resource('/Rechazo/Zona', 'App\Http\Controllers\RechazoZonaController');
    Route::delete('/Rechazo/DeleteZona', 'App\Http\Controllers\RechazoZonaController@DeleteZona')->name('DeleteZona'); //dy
    Route::put('/Rechazo/UpdateZonaZona', 'App\Http\Controllers\RechazoZonaController@UpdateZona')->name('UpdateZona'); //dy
    Route::post('/Rechazo/CreateZona', 'App\Http\Controllers\RechazoZonaController@CreateZona')->name('CreateZona'); //dy
     //Rechazo Recomendacion
     Route::resource('/Rechazo/Recomendacion', 'App\Http\Controllers\RechazoRecomendacionController');
     Route::delete('/Rechazo/DeleteRecomendacion', 'App\Http\Controllers\RechazoRecomendacionController@DeleteRecomendacion')->name('DeleteRecomendacion'); //dy
     Route::put('/Rechazo/UpdateRecomendacion', 'App\Http\Controllers\RechazoRecomendacionController@UpdateRecomendacion')->name('UpdateRecomendacion'); //dy
     Route::post('/Rechazo/CreateRecomendacion', 'App\Http\Controllers\RechazoRecomendacionController@CreateRecomendacion')->name('CreateRecomendacion'); //dy
    //Rechazo Causa
    Route::resource('/Rechazo/Causa', 'App\Http\Controllers\RechazoCausaController');
    Route::delete('/Rechazo/DeleteCausa', 'App\Http\Controllers\RechazoCausaController@DeleteCausa')->name('DeleteCausa'); //dy
    Route::put('/Rechazo/UpdateCausa', 'App\Http\Controllers\RechazoCausaController@UpdateCausa')->name('UpdateCausa'); //dy
    Route::post('/Rechazo/CreateCausa', 'App\Http\Controllers\RechazoCausaController@CreateCausa')->name('CreateCausa'); //dy
    

    //Route::resource('/Neumaticos/Medidas', 'App\Http\Controllers\NeumaticosMedidaController');
    //Neumaticos
    //Marca
    Route::resource('/Neumaticos/Anchos', 'App\Http\Controllers\RechazoController');
    Route::resource('/Neumaticos/Marcas', 'App\Http\Controllers\NeumaticosMarcaController');
    Route::delete('/Neumaticos/DeleteMarca', 'App\Http\Controllers\NeumaticosMarcaController@DeleteMarca')->name('DeleteMarca'); //dy
    Route::put('/Neumaticos/UpdateMarca', 'App\Http\Controllers\NeumaticosMarcaController@UpdateMarca')->name('UpdateMarca'); //dy
    Route::post('/Neumaticos/CreateMarca', 'App\Http\Controllers\NeumaticosMarcaController@CreateMarca')->name('CreateMarca'); //dy
    ///Ancho
    Route::resource('/Neumaticos/Anchos', 'App\Http\Controllers\NeumaticosAnchoController');
    Route::delete('/Neumaticos/DeleteAncho', 'App\Http\Controllers\NeumaticosAnchoController@DeleteAncho')->name('NeumaticoDeleteAncho');  //dy
    Route::put('/Neumaticos/UpdateAncho', 'App\Http\Controllers\NeumaticosAnchoController@UpdateAncho')->name('NeumaticoUpdateAncho');     //dy
    Route::post('/Neumaticos/CreateAncho', 'App\Http\Controllers\NeumaticosAnchoController@CreateAncho')->name('NeumaticoCreateAncho');     //dy
    ///Profundidad
    Route::resource('/Neumatico/Profundidades', 'App\Http\Controllers\NeumaticosProfundidadController');
    Route::delete('/Neumaticos/DeleteProfundidad', 'App\Http\Controllers\NeumaticosProfundidadController@DeleteProfundidad')->name('NeumaticoDeleteProfundidad');  //dy
    Route::put('/Neumaticos/UpdateProfundidad', 'App\Http\Controllers\NeumaticosProfundidadController@UpdateProfundidad')->name('NeumaticoUpdateProfundidad');     //dy
    Route::post('/Neumaticos/CreateProfundidad', 'App\Http\Controllers\NeumaticosProfundidadController@CreateProfundidad')->name('NeumaticoCreateProfundidad');     //dy
    /// Diseno
    // Modelo
    Route::resource('/Neumaticos/Disenos', 'App\Http\Controllers\NeumaticosDisenoController');
    Route::post('/Neumaticos/CreateDiseno', 'App\Http\Controllers\NeumaticosDisenoController@CreateDiseno')->name('CreateDiseno'); //dy
    Route::delete('/Neumaticos/DeleteDiseno', 'App\Http\Controllers\NeumaticosDisenoController@DeleteDiseno')->name('DeleteDiseno'); //dy
    Route::put('/Neumaticos/UpdateDiseno', 'App\Http\Controllers\NeumaticosDisenoController@UpdateDiseno')->name('UpdateDiseno'); //dy
    //Ancho
    Route::resource('/Neumaticos/DisenoAnchos', 'App\Http\Controllers\NeumaticosDisenoAnchoController');
    Route::delete('/Neumaticos/DeleteDisenoAncho', 'App\Http\Controllers\NeumaticosDisenoAnchoController@DeleteDisenoAncho')->name('DeleteDisenoAncho');  //dy
    Route::put('/Neumaticos/UpdateDisenoAncho', 'App\Http\Controllers\NeumaticosDisenoAnchoController@UpdateDisenoAncho')->name('UpdateDisenoAncho');     //dy
    Route::post('/Neumaticos/CreateDisenoAncho', 'App\Http\Controllers\NeumaticosDisenoAnchoController@CreateDisenoAncho')->name('CreateDisenoAncho');     //dy

    
    //neumatico Modelo
    Route::resource('/Neumaticos/Modelos', 'App\Http\Controllers\NeumaticosModeloController');
    Route::post('/Neumaticos/CreateModelo', 'App\Http\Controllers\NeumaticosModeloController@CreateModelo')->name('CreateModelo'); //dy
    Route::delete('/Neumaticos/DeleteModelo', 'App\Http\Controllers\NeumaticosModeloController@DeleteModelo')->name('DeleteModelo'); //dy
    Route::put('/Neumaticos/UpdateModelo', 'App\Http\Controllers\NeumaticosModeloController@UpdateModelo')->name('UpdateModelo'); //dy
    //neumatico Medida 
    
    Route::resource('/Neumaticos/Medida', 'App\Http\Controllers\NeumaticosMedidaController');
    Route::delete('/Neumaticos/DeleteMedida', 'App\Http\Controllers\NeumaticosMedidaController@DeleteMedida')->name('DeleteMedida'); //dy
    Route::put('/Neumaticos/UpdateMedida', 'App\Http\Controllers\NeumaticosMedidaController@UpdateMedida')->name('UpdateMedida'); //dy
    Route::post('/Neumaticos/CreateMedida', 'App\Http\Controllers\NeumaticosMedidaController@CreateMedida')->name('CreateMedida'); //dy
   
    ///Lesion
    Route::resource('/Neumaticos/Lesiones', 'App\Http\Controllers\NeumaticosLesionController');
    Route::delete('/Neumaticos/DeleteLesion', 'App\Http\Controllers\NeumaticosLesionController@DeleteLesion')->name('NeumaticoDeleteLesion');  //dy
    Route::put('/Neumaticos/UpdateLesion', 'App\Http\Controllers\NeumaticosLesionController@UpdateLesion')->name('NeumaticoUpdateLesion');     //dy
    Route::post('/Neumaticos/CreateLesion', 'App\Http\Controllers\NeumaticosLesionController@CreateLesion')->name('NeumaticoCreateLesion');     //dy
    
    ///Lesion
    Route::resource('/Neumaticos/Aplicaciones', 'App\Http\Controllers\NeumaticosAplicacionController');
    Route::delete('/Neumaticos/DeleteAplicacion', 'App\Http\Controllers\NeumaticosAplicacionController@DeleteAplicacion')->name('NeumaticoDeleteAplicacion');  //dy
    Route::put('/Neumaticos/UpdateAplicacion', 'App\Http\Controllers\NeumaticosAplicacionController@UpdateAplicacion')->name('NeumaticoUpdateAplicacion');     //dy
    Route::post('/Neumaticos/CreateAplicacion', 'App\Http\Controllers\NeumaticosAplicacionController@CreateAplicacion')->name('NeumaticoCreateAplicacion');     //dy
     

    Route::resource('/Neumaticos/Disenios', 'App\Http\Controllers\NeumaticosDisenioController');
    
    Route::resource('/EjeVehiculo', 'App\Http\Controllers\EjeVehiculoController');
    
    Route::get('/auxiliar', 'App\Http\Controllers\RenewController@create'); //Luego se elimina, es para hacer pruebas
    Route::post('/UpdateData', 'App\Http\Controllers\Auth\RegisteredUserController@UpdateData')
    ->name('UpdateData');
    /* Gestion */
    Route::resource('/gestion/defecto', 'App\Http\Controllers\DefectosController');
    Route::resource('clientes', 'App\Http\Controllers\Auth\RegisteredUserController');
    //Route::get('/clientes', 'App\Http\Controllers\Auth\RegisteredUserController@index');
    Route::get('/user/{id}','App\Http\Controllers\Auth\RegisteredUserController@UserDataView')->name('userData');

    //usuarios
    Route::resource('users', 'App\Http\Controllers\UserController');
    //Caucho Industrial
    ///Marca
    Route::resource('/CauchoIndustrial/Marcas', 'App\Http\Controllers\CauchoIndustrialMarcaController');
    Route::delete('/CauchoIndustrial/DeleteMarca', 'App\Http\Controllers\CauchoIndustrialMarcaController@DeleteMarca')->name('CauchoIndustrialDeleteMarca');  //dy
    Route::put('/CauchoIndustrial/UpdateMarca', 'App\Http\Controllers\CauchoIndustrialMarcaController@UpdateMarca')->name('CauchoIndustrialUpdateMarca');     //dy
    Route::post('/CauchoIndustrial/CreateMarca', 'App\Http\Controllers\CauchoIndustrialMarcaController@CreateMarca')->name('CauchoIndustrialCreateMarca');     //dy
    //Medida
    Route::resource('/CauchoIndustrial/Medida', 'App\Http\Controllers\CauchoIndustrialMedidaController');
    Route::delete('/CauchoIndustrial/DeleteMedida', 'App\Http\Controllers\CauchoIndustrialMedidaController@DeleteMedida')->name('CauchoIndustrialDeleteMedida'); //dy
    Route::put('/CauchoIndustrial/UpdateMedida', 'App\Http\Controllers\CauchoIndustrialMedidaController@UpdateMedida')->name('CauchoIndustrialUpdateMedida'); //dy
    Route::post('/CauchoIndustrial/CreateMedida', 'App\Http\Controllers\CauchoIndustrialMedidaController@CreateMedida')->name('CauchoIndustrialCreateMedida'); //dy
   
    //Camara Marca
    Route::resource('/Camara/Marcas', 'App\Http\Controllers\CamaraMarcaController');
    Route::delete('/Camara/DeleteMarca', 'App\Http\Controllers\CamaraMarcaController@DeleteMarca')->name('CamaraDeleteMarca');  //dy
    Route::put('/Camara/UpdateMarca', 'App\Http\Controllers\CamaraMarcaController@UpdateMarca')->name('CamaraUpdateMarca');     //dy
    Route::post('/Camara/CreateMarca', 'App\Http\Controllers\CamaraMarcaController@CreateMarca')->name('CamaraCreateMarca');     //dy
    //Medida
    Route::resource('/Camara/Medida', 'App\Http\Controllers\CamaraMedidaController');
    Route::delete('/Camara/DeleteMedida', 'App\Http\Controllers\CamaraMedidaController@DeleteMedida')->name('CamaraDeleteMedida'); //dy
    Route::put('/Camara/UpdateMedida', 'App\Http\Controllers\CamaraMedidaController@UpdateMedida')->name('CamaraUpdateMedida'); //dy
    Route::post('/Camara/CreateMedida', 'App\Http\Controllers\CamaraMedidaController@CreateMedida')->name('CamaraCreateMedida'); //dy
    //Valvula
    Route::resource('/Camara/Valvula', 'App\Http\Controllers\CamaraValvulaController');
    Route::delete('/Camara/DeleteValvula', 'App\Http\Controllers\CamaraValvulaController@DeleteValvula')->name('CamaraDeleteValvula');  //dy
    Route::put('/Camara/UpdateValvula', 'App\Http\Controllers\CamaraValvulaController@UpdateValvula')->name('CamaraUpdateValvula');     //dy
    Route::post('/Camara/CreateValvula', 'App\Http\Controllers\CamaraValvulaController@CreateValvula')->name('CamaraCreateValvula');     //dy
    
     //Protector
     Route::resource('/Protector/Marcas', 'App\Http\Controllers\ProtectorMarcaController');
     Route::delete('/Protector/DeleteMarca', 'App\Http\Controllers\ProtectorMarcaController@DeleteMarca')->name('protectorDeleteMarca');  //dy
     Route::put('/Protector/UpdateMarca', 'App\Http\Controllers\ProtectorMarcaController@UpdateMarca')->name('protectorUpdateMarca');     //dy
     Route::post('/Protector/CreateMarca', 'App\Http\Controllers\ProtectorMarcaController@CreateMarca')->name('protectorCreateMarca');     //dy
    //Vehiculo
    //Tipo de Vehiculo
    Route::resource('/Vehiculos/TipoVehiculo', 'App\Http\Controllers\VehiculosTipoController');
    Route::post('/Vehiculos/CreateTipoVehiculo', 'App\Http\Controllers\VehiculosTipoController@CreateTipoVehiculo')->name('CreateTipoVehiculo'); //dy
    Route::delete('/Vehiculos/DeleteTipoVehiculo', 'App\Http\Controllers\VehiculosTipoController@DeleteTipoVehiculo')->name('DeleteTipoVehiculo'); //dy
    Route::put('/Vehiculos/UpdateTipoVehiculo', 'App\Http\Controllers\VehiculosTipoController@UpdateTipoVehiculo')->name('UpdateTipoVehiculo'); //dy
    //Marca
    Route::resource('/Vehiculos/Marcas', 'App\Http\Controllers\VehiculosMarcaController');
    Route::delete('/Vehiculos/DeleteMarca', 'App\Http\Controllers\VehiculosMarcaController@DeleteMarca')->name('VehiculoDeleteMarca');  //dy
    Route::put('/Vehiculos/UpdateMarca', 'App\Http\Controllers\VehiculosMarcaController@UpdateMarca')->name('VehiculoUpdateMarca');     //dy
    Route::post('/Vehiculos/CreateMarca', 'App\Http\Controllers\VehiculosMarcaController@CreateMarca')->name('VehiculoCreateMarca');     //dy
    // Modelo
    Route::resource('/Vehiculos/Modelos', 'App\Http\Controllers\VehiculosModeloController');
    Route::delete('/Vehiculos/DeleteModelo', 'App\Http\Controllers\VehiculosModeloController@DeleteModelo')->name('DeleteModeloVehiculo'); //dy
    Route::post('/Vehiculos/GetModelo', 'App\Http\Controllers\VehiculosModeloController@GetModelo')->name('GetModeloVehiculo'); //dy
    Route::put('/Vehiculos/UpdateModelo', 'App\Http\Controllers\VehiculosModeloController@UpdateModelo')->name('UpdateModeloVehiculo'); //dy
      //Carga
    Route::resource('/Vehiculos/Carga', 'App\Http\Controllers\VehiculosCargaController');
    Route::delete('/Vehiculos/DeleteCarga', 'App\Http\Controllers\VehiculosCargaController@DeleteCarga')->name('VehiculoDeleteCarga');  //dy
    Route::put('/Vehiculos/UpdateCarga', 'App\Http\Controllers\VehiculosCargaController@UpdateCarga')->name('VehiculoUpdateCarga');     //dy
    Route::post('/Vehiculos/CreateCarga', 'App\Http\Controllers\VehiculosCargaController@CreateCarga')->name('VehiculoCreateCarga');     //dy
    //TipoCarga
    Route::resource('/Vehiculos/TipoCarga', 'App\Http\Controllers\VehiculosTipoCargaController');
    Route::delete('/Vehiculos/DeleteTipoCarga', 'App\Http\Controllers\VehiculosTipoCargaController@DeleteTipoCarga')->name('VehiculoDeleteTipoCarga');  //dy
    Route::put('/Vehiculos/UpdateTipoCarga', 'App\Http\Controllers\VehiculosTipoCargaController@UpdateTipoCarga')->name('VehiculoUpdateTipoCarga');     //dy
    Route::post('/Vehiculos/CreateTipoCarga', 'App\Http\Controllers\VehiculosTipoCargaController@CreateTipoCarga')->name('VehiculoCreateTipoCarga');     //dy
    //Tipo Terreno
    Route::resource('/Vehiculos/TipoTerreno', 'App\Http\Controllers\VehiculosTipoTerrenoController');
    Route::delete('/Vehiculos/DeleteTipoTerreno', 'App\Http\Controllers\VehiculosTipoTerrenoController@DeleteTipoTerreno')->name('VehiculoDeleteTipoTerreno');  //dy
    Route::put('/Vehiculos/UpdateTipoTerreno', 'App\Http\Controllers\VehiculosTipoTerrenoController@UpdateTipoTerreno')->name('VehiculoUpdateTipoTerreno');     //dy
    Route::post('/Vehiculos/CreateTipoTerreno', 'App\Http\Controllers\VehiculosTipoTerrenoController@CreateTipoTerreno')->name('VehiculoCreateTipoTerreno');     //dy
    
    //Eje
    Route::post('/Ejes/ListadoEje', 'App\Http\Controllers\EjeVehiculoController@ListadoEje')->name('ListadoEje'); //dy
});


    /// Get Condiciones
    Route::resource('/warranty', 'App\Http\Controllers\WarrantyController');

    Route::get('/facturaById/{id}', [WarrantyController::class, 'factura-by-id']);

    Route::get('/factura-by-id/{id}', [WarrantyController::class, 'facturaById'])->name('factura-by-id');

    Route::get('/factura-by-client/{id}', [WarrantyController::class, 'facturaByClient'])->name('factura-by-client');

    Route::post('/Garantia/BuscarFactura', 'App\Http\Controllers\WarrantyController@buscarFactura')->name('buscarFactura'); 
Route::post('/Garantia/BuscarFactura', 'App\Http\Controllers\WarrantyController@buscarFactura')->name('buscarFactura'); //dy
    
    Route::post('/Garantia/BuscarRIF', 'App\Http\Controllers\WarrantyController@buscarRIF')->name('buscarRIF'); //dy
    Route::post('/Garantia/BuscarSerial', 'App\Http\Controllers\WarrantyController@buscarSerial')->name('buscarSerial'); //dy
    Route::post('/Garantia/BuscarDatosCompra', 'App\Http\Controllers\WarrantyController@buscarDatosCompra')->name('buscarDatosCompra'); //dy

    
    Route::post('/Garantia/DiagramaCamara', 'App\Http\Controllers\WarrantyController@DiagramaCamara')->name('DiagramaCamara'); //dy

    Route::post('/Garantia/DiagramaCaucho', 'App\Http\Controllers\WarrantyController@DiagramaCaucho')->name('DiagramaCaucho'); //dy
    
    Route::post('/Garantia/buscarDatosCampos', 'App\Http\Controllers\WarrantyController@buscarDatosCampos')->name('buscarDatosCampos'); //dy

    Route::post('/Garantia/crear', 'App\Http\Controllers\WarrantyController@store')->name('Warrantystore'); //dy
    Route::post('/Garantia/crearDatos', 'App\Http\Controllers\WarrantyController@storeData')->name('WarrantystoreData'); //dy
    Route::post('/Garantia/buscarProductos', 'App\Http\Controllers\WarrantyController@buscarProductos')->name('buscarProductos'); //dy
    Route::post('/Garantia/ListadoTipoProducto', 'App\Http\Controllers\WarrantyController@ListadoTipoProducto')->name('ListadoTipoProducto'); //dy
    Route::post('/Garantia/GetTipoProductoById', 'App\Http\Controllers\WarrantyController@GetTipoProductoById')->name('GetTipoProductoById'); //dy


Route::group(['middleware' => ['auth', 'grupoCreacionGuias']], function(){
    /// Get Condiciones
    
    Route::get('/facturaById/{id}', [WarrantyController::class, 'factura-by-id']);
    
    Route::get('/factura-by-id/{id}', [WarrantyController::class, 'facturaById'])->name('factura-by-id');
    
    Route::get('/factura-by-client/{id}', [WarrantyController::class, 'facturaByClient'])->name('factura-by-client');
    
    
    
    Route::resource('/Garantia/Guia', 'App\Http\Controllers\GuiaController')
        ->middleware(['auth']);   
    
    Route::resource('/Garantia/Guia', 'App\Http\Controllers\GuiaController');
    
    Route::post('/Guia/crear', 'App\Http\Controllers\GuiaController@store' )->name('crearGuia');

    Route::post('/Garantia/buscarProfundidad', 'App\Http\Controllers\WarrantyController@buscarProfundidad')->name('buscarProfundidad');
    
    Route::post('/Garantia/buscarProfundidad/{id}', 'App\Http\Controllers\WarrantyController@buscarProfundidad');
    
    Route::post('/Garantia/buscarAnchoDiseno', 'App\Http\Controllers\WarrantyController@buscarAnchoDiseno')->name('buscarAnchoDiseno');
    
    Route::post('/Garantia/buscarAnchoDiseno/{id}', 'App\Http\Controllers\WarrantyController@buscarAnchoDiseno');
  
    

    Route::get('users/{id}/editUser', 'App\Http\Controllers\UserController@editUser')->name('users.editUser');

    Route::patch('users/{id}/updateUser', 'App\Http\Controllers\UserController@updateUser')->name('users.updateUser');


    
    Route::get('/Reportes/Clientes', 'App\Http\Controllers\ReportesController@index');
    Route::get('/Reportes/DataCliente', 'App\Http\Controllers\ReportesController@datacliente');
    Route::get('/Reportes/Usuarios', 'App\Http\Controllers\ReportesController@usuarios');

    Route::post('/Reportes/getFiltroReporteCliente', 'App\Http\Controllers\ReportesController@getFiltroReporteCliente')->name('getFiltroReporteCliente');

});

Route::group(['middleware' => ['auth', 'grupoGestionGarantias']], function(){

    Route::resource('/Garantia/Recepcion', 'App\Http\Controllers\RecepcionController')
        ->middleware(['auth']);
    
    Route::resource('/Garantia/Recepcion', 'App\Http\Controllers\RecepcionController');        

});

Route::group(['middleware' => ['auth', 'grupoCasosAnalisis']], function(){

    Route::resource('/Garantia/Analisis', 'App\Http\Controllers\AnalisisController');

    Route::resource('/Garantia/Especial', 'App\Http\Controllers\EspecialController');

    Route::post('/Garantia/buscarFallas', 'App\Http\Controllers\AnalisisController@buscarFalla')->name('buscarFallas');
    
    Route::post('/Garantia/buscarFallas/{id}', 'App\Http\Controllers\AnalisisController@buscarFalla');


});

Route::group(['middleware' => ['auth', 'grupoCredito']], function(){

    Route::resource('/Garantia/Credito', 'App\Http\Controllers\CreditoController');
    Route::resource('/Garantia/Credito/Show', 'App\Http\Controllers\CreditoController');

    

});

//Rutas fueras del middleware Auth
Route::get('/barcode', [BarcodeController::class, 'index']);


Route::get('/PDFGuia/{id}', 'App\Http\Controllers\PDFController@PDFGuia' )
->name('PDFGuia');
Route::get('/PDFgarantia/{id}', 'App\Http\Controllers\PDFController@PDFreclamo' )->name('PDFreclamo');
Route::get('/PDFAnalisis/{id}', 'App\Http\Controllers\PDFController@PDFanalisis' )->name('analisisPDF');


require __DIR__.'/auth.php';

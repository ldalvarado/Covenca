<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Auth;

use App\Models\Sucursal;
use App\Models\Reclamo;

class MailController extends Controller
{
    public function sendEmail() {
        $details=[
            'title'=>'Correo de Prueba',
            'body'=>'Prueba Prueba Prueba Prueba'
        ];
        Mail::to("dyma1008@gmail.com")->send(new TestMail($details));
        return "Correo Enviado";
    }
    public function sendGarantiaEmail($Estado,$Numero,$to_email){
        try{
            try{
                $reclamo= Reclamo::all()->where('id',$Numero);
                $infoProducto = $reclamo->first()->InfoProductoAnalisis()->get()->first();
            $infoProducto = $infoProducto->getProducto()->pluck('descripcion')->first();

            $user = Auth::user();
            $data = array(
                'Estado'=>$Estado,
                "Numero"=> $reclamo -> pluck('codigoSucursal')->first(),
                'Nombre'=> $reclamo -> pluck('nombre')->first(),
                'Fecha' => $reclamo -> pluck('fechaFactura')->first(),
                'Producto'=> $infoProducto,
                'Distribuidor'=> 'COVENCAUCHO INDUSTRIAS, S.A.',

            );
            Mail::send('Email.email', $data, function($message) use($to_email) {
            $message->to($to_email, 'Covenca')->subject
                ('Orden Realizada');
            $message->from(env('MAIL_USERNAME'),'Covenca');
            });

            $user -> sucursal();
            $Correo = $user ->sucursal -> correo;

            Mail::send('Email.email', $data, function($message) use($Correo) {
                $message->to($Correo, 'Covenca')->subject
                    ('Orden Realizada');
                $message->from(env('MAIL_USERNAME'),'Covenca');

    });
    if($user ->sucursal ->principal == 0){
        $Correo = Sucursal::all()->where('principal',1)->pluck('correo')->first();

        Mail::send('Email.email', $data, function($message) use($Correo) {
            $message->to($Correo, 'Covenca')->subject
                ('Orden Realizada');
            $message->from(env('MAIL_USERNAME'),'Covenca');
        });      
    }
       }catch(\Throwable $t ){
                        
    }}
    catch(\Exception $e ){}
    
 
        
    }
   
    
     


}

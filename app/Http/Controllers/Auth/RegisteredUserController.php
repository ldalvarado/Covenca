<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Sucursal;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Models\Cliente;
use App\Models\ClienteMarca;
use App\Models\ClienteTipoCarga;
use App\Models\ClienteMarcaLista;
use App\Models\ClienteVehiculo;
use App\Models\ClienteFecha;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user = Auth::user();
        $usuario = Auth::user();
        $principal = $usuario -> sucursal -> principal;
        if($principal != 1){
            $principal = 0;
        }
        $sucursales = Sucursal::all();
        $marcas = ClienteMarcaLista::all();
        foreach($marcas as $marca){
            $marca -> descripcion = $marca ->Marca();
        }
        return view('auth.register')->with(['sucursales'=>$sucursales,'marcas'=>$marcas,'sucursal'=>$user->idSucursal,'principal'=>$principal]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function destroy(Request $request,$id)
    {
        $user = User::find($id);
        $user->estado = $request->enable;
        $user->save();

        return redirect()->route('clientes.index');
    }
    public function store(Request $request)
    {
        //dd($request->idSucursal);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'idSucursal' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'idSucursal' => $request->idSucursal,
            'idRole' => 7,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function UserDataView($id){

   
        $cliente = Cliente::where('idUser',$id)->first();
        $sucursales = Sucursal::all();
        $marcas = ClienteMarcaLista::all();
        foreach($marcas as $marca){
            $marca -> descripcion = $marca ->Marca();
        }
        return view('userData.User')->with(['sucursales'=>$sucursales,'marcas'=>$marcas,'cliente'=>$cliente,'marcas_cliente'=>$cliente ->Marcas(),
        'vehiculos'=>$cliente->Vehiculos(),'fecha'=>$cliente->Fecha(),'carga'=>$cliente->TipoCarga()]);
        
    }
    public function UpdateData(Request $request){
        DB::transaction(function () use($request){
        $user = User::where('id',$request->id)->first();
        
        $cliente  = Cliente::where('idUser',$user->id)->first();


        $cliente->update([
            'idUser' =>$user->id, 
            'subtipo'=>$request -> subtipo, 
            'nombre' =>$request->nombre,
            'doc' =>$request -> doc,
            'telefono'=>$request->telefono,
            'direccion'=>$request->direccion,
            'contacto'=> $request -> contacto,
            'estado' =>$request -> estado,
            'ciudad' =>$request->ciudad,
            'idSucursal' =>$request->idSucursal,
            'renovado' =>$request -> renovado,
            'carga' =>$request -> carga,
            'kmFlota'=>$request->kmFlota,
            'perFlota'=>$request->perFlota,
            'carcasa'=> $request -> carcasa
        ]);
        $marcas = $request->marcas;

       

        try{try{
            $clinte_marcas = $cliente ->Marcas();

            foreach($clinte_marcas as $marca){
                $marca -> delete();
            }
        foreach($marcas as $marca){
            ClienteMarca::create([
                'idCliente'=>$cliente->id,
                'idMarca'=>$marca
            ]);
        }
        } catch (\Throwable $th) {
    
        }
        } catch (\Exception $e) {
        

        }
        $cliente_vehiculo  = $cliente ->Vehiculos();
        $cliente_vehiculo->update([
            'idCliente'=>$cliente->id,
            '4x2'=>$request->v4x2,
            '6x2'=>$request->v6x2,
            '6x4'=>$request->v6x4,
            '2x0'=>$request->v2x0,
            '4x0'=>$request->v4x0,
            '6x0'=>$request->v6x0,
            '8x0'=>$request ->v8x0
        ]);
        $cliente_tipoCarga = $cliente ->TipoCarga();
        $cliente_tipoCarga->update([
            'idCliente'=>$cliente->id,
            'liquidos'       =>$request['liquido'],
            'alimentos'     =>$request->alimentos,
            'farmacos'      =>$request->farmacos,
            'pasajeros'     =>$request->pasajeros,
            'construccion'  =>$request->construccion,
            'textiles'      =>$request->textiles,
            'agricolas'     =>$request->agricolas,
            'electronicos'  =>$request->electronicos,
            'otro'          =>$request->otrosCarga,
     
        ]);
        $cliente_fecha = $cliente->Fecha();
        $cliente_fecha->update([
            'idCliente'=>$cliente->id,
            'enero' =>          $this->boolToInt($request ->enero),
            'febrero'=>         $this->boolToInt($request ->febrero),
            'marzo'=>           $this->boolToInt($request ->marzo),
            'abril'=>           $this->boolToInt($request ->abril),
            'mayo'=>            $this->boolToInt($request ->mayo),
            'junio'=>           $this->boolToInt($request ->junio),
            'julio'=>           $this->boolToInt($request ->julio),
            'agosto'=>          $this->boolToInt($request ->agosto),
            'septiembre'=>      $this->boolToInt($request ->septiembre),
            'octubre'=>         $this->boolToInt($request ->octubre),
            'noviembre'=>       $this->boolToInt($request ->noviembre),
            'diciembre'=>       $this->boolToInt($request ->diciembre)
        ]);
        });

        
    }
    public function RegisterData(Request $request){
        DB::transaction(function () use($request){
        $user = User::create([
            'idSucursal' => $request->idSucursal,
            'idRole' => 7,
            'name' => $request->nombre,
            'email' => $request->email,
            'password' =>  Hash::make(
                "123456"),
            'estado'=>1
        ]);
        //event(new Registered($user));

        //Auth::login($user);
        $cliente = Cliente::create([
            'idUser' =>$user->id, 
            'subtipo'=>$request -> subtipo, 
            'nombre' =>$request->nombre,
            'doc' =>$request -> doc,
            'telefono'=>$request->telefono,
            'direccion'=>$request->direccion,
            'contacto'=> $request -> contacto,
            'estado' =>$request -> estado,
            'ciudad' =>$request->ciudad,
            'idSucursal' =>$request->idSucursal,
            'renovado' =>$request -> renovado,
            'carga' =>$request -> carga,
            'kmFlota'=>$request->kmFlota,
            'perFlota'=>$request->perFlota,
            'carcasa'=> $request -> carcasa
        ]);
        $marcas = $request->marcas;
        try{try{
        foreach($marcas as $marca){
            ClienteMarca::create([
                'idCliente'=>$cliente->id,
                'idMarca'=>$marca
            ]);
        }
        } catch (\Throwable $th) {
    
        }
        } catch (\Exception $e) {
        

        }
        ClienteVehiculo::create([
            'idCliente'=>$cliente->id,
            '4x2'=>$request->v4x2,
            '6x2'=>$request->v6x2,
            '6x4'=>$request->v6x4,
            '2x0'=>$request->v2x0,
            '4x0'=>$request->v4x0,
            '6x0'=>$request->v6x0,
            '8x0'=>$request ->v8x0
        ]);

        ClienteTipoCarga::create([
            'idCliente'=>$cliente->id,
            'liquidos'       =>$request->liquido,
            'alimentos'     =>$request->alimentos,
            'farmacos'      =>$request->farmacos,
            'pasajeros'     =>$request->pasajeros,
            'construccion'  =>$request->construccion,
            'textiles'      =>$request->textiles,
            'agricolas'     =>$request->agricolas,
            'electronicos'  =>$request->electronicos,
            'otro'          =>$request->otrosCarga,
           
        ]);
        ClienteFecha::create([
            'idCliente'=>   $cliente->id,
            'enero' =>      $this->boolToInt ($request ->enero),
            'febrero'=>     $this->boolToInt ($request ->febrero),
            'marzo'=>       $this->boolToInt ($request ->marzo),
            'abril'=>       $this->boolToInt ($request ->abril),
            'mayo'=>        $this->boolToInt ($request ->mayo),
            'junio'=>       $this->boolToInt ($request ->junio),
            'julio'=>       $this->boolToInt ($request ->julio),
            'agosto'=>      $this->boolToInt ($request ->agosto),
            'septiembre'=>  $this->boolToInt ($request ->septiembre),
            'octubre'=>     $this->boolToInt ($request ->octubre),
            'noviembre'=>   $this->boolToInt ($request ->noviembre),
            'diciembre'=>   $this->boolToInt ($request ->diciembre)
        ]);
        });
        $data = array(
            'Nombre'=>$request->nombre,
            "password"=> '123456'

        );
        $to_email = $request->email;
        try {try{
            Mail::send('Email.emailuser', $data, function($message) use($to_email) {
                $message->to($to_email, 'Covenca')->subject
                    ('Cliente Registrado');
                $message->from(env('MAIL_USERNAME'),'Covenca');
                });
        }  catch (Throwable $th) {
    
        
        }} catch (Exception $e) {
        

        }
       
        
    }
    public function index()
    {   
        $idSucursalUser = Auth::User()->idSucursal; 
        $sucursal = Sucursal::find($idSucursalUser); 

        if($sucursal->principal==0){
            $users = User::where('idSucursal',$idSucursalUser)->where('idRole',7)->get();
        }

        if($sucursal->principal==1){
            $users = User::where('idRole',7)->get();
        }

        return view('Cliente.index', compact('users'));
    }
    public function boolToInt($bool){
        if($bool==true){
            return 1;
        }else{
            return 0;
        }
    }
    public function CheckEmail(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => ['required',  'email', ],         
        ]);
         if($validator->fails()){
            return response()->json(['status'=>false,'msg'=>'Introduzca un email valido']);

         }
       
  
        $user = User::where('email',$request->email)->get();
        
        if(count($user)>0){
            return response()->json(['status'=>false,'msg'=>'el email seleccionado ya existe']);
        }else{
            return response()->json(['status'=>true,'msg'=>'el email seleccionado ya existe']);
        }

    }
}

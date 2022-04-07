<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Models\User;
use App\Models\Sucursal;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Mail\ChangePassword;
use App\Models\Rol;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $idSucursalUser = Auth::User()->idSucursal; 
        $sucursal = Sucursal::find($idSucursalUser); 

        if($sucursal->principal==0){
            $users = User::where('idSucursal',$idSucursalUser)->get();
        }

        if($sucursal->principal==1){
            $users = User::all();
        }

        return view('users.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursales = Sucursal::where('activo','1')->pluck('descripcion','id');
        $roles = Rol::all();

        $idSucursalUser = Auth::User()->idSucursal; 
        $sucursal = Sucursal::find($idSucursalUser);
        
        if($sucursal->principal==0){ $principal=0; }
        if($sucursal->principal==1){ $principal=1; }

        return view('users.create', compact('sucursales', 'roles', 'principal', 'sucursal'))->with(['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'idSucursal' => 'required|exists:sucursal,id',
            'idRole' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|same:password_confirmation',
            'password_confirmation' => 'nullable',
        ]);
        
        if($validator->fails()){
            return back()->withInput()
                         ->with('error', 'Error en los campos')
                         ->withErrors($validator);
        }

        $user = new User();
        $user->idSucursal = $request->idSucursal;
        $user->name= $request->name;
        $user->idRole = $request->idRole;
        $user->email = mb_strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->save();
        
        $user_id=User::latest('created_at')->first();

        $details = [
            'name' => $request->name,
            'title' => 'Cambio de Contraseña',
            'body' => $request->password,
            'link' => url('users/'.$user_id->id.'/changePassword'),
        ];
     
        Mail::to($request->email)->send(new ChangePassword($details));

        return redirect()->route("users.index")->with('success','Información del Usuario actualizada con éxito');
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
        $user = User::where('estado','>=','0')->find($id);
        $sucursales = Sucursal::where('activo','1')->pluck('descripcion','id');
        $roles = array(
            "1" => "Administrador",
            "2" => "Gestion de Garantías",
            "3" => "Analista de Crédito",
            "4" => "Analista Técnico",
            "5" => "Distribuidor Comercial",
        );

        $idSucursalUser = Auth::User()->idSucursal; 
        $sucursal = Sucursal::find($idSucursalUser);
        
        if($sucursal->principal==0){ $principal=0; }
        if($sucursal->principal==1){ $principal=1; }
        
        return view('users.edit', compact('user','sucursales', 'roles', 'principal', 'sucursal'));
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
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'idSucursal' => 'required|exists:sucursal,id',
            'idRole' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,'. $id,
        ]);
        
        if($validator->fails()){
            return back()->withInput()
                         ->with('error', 'Error en los campos')
                         ->withErrors($validator);
        }

        $user = User::find($id);
        $user->idSucursal = $request->idSucursal;
        $user->name= $request->name;
        $user->idRole = $request->idRole;
        $user->email = mb_strtolower($request->email);
        $user->save();

        return redirect()->route("users.index")->with('success','Usuario actualizada con éxito');   
    }

    public function editUser($id)
    {
        $user = User::where('estado','>=','0')->find($id);
        $sucursales = Sucursal::where('activo','1')->pluck('descripcion','id');
        $roles = array(
            "1" => "Administrador",
            "2" => "Gestion de Garantías",
            "3" => "Analista de Crédito",
            "4" => "Analista Técnico",
            "5" => "Distribuidor Comercial",
        );

        $idSucursalUser = Auth::User()->idSucursal; 
        $sucursal = Sucursal::find($idSucursalUser);
        
        if($sucursal->principal==0){ $principal=0; }
        if($sucursal->principal==1){ $principal=1; }

        return view('users.editUser', compact('user','sucursales', 'roles', 'principal', 'sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'idSucursal' => 'required|exists:sucursal,id',
            'idRole' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,'. $id,
            'passwordOld' => 'nullable',
            'password' => 'nullable|string|min:6|same:password_confirmation',
            'password_confirmation' => 'nullable',
        ]);
        
        if($validator->fails()){
            return back()->withInput()
                ->with('error', 'Error en los campos')
                ->withErrors($validator);
        }

        $user = User::find($id);
        
        if($request->passwordOld !== '' && $request->password !== '' && $request->password_confirmation !== ''){

            if(Hash::check($request->passwordOld,$user->password)){
                $user->idSucursal = $request->idSucursal;
                $user->name= $request->name;
                $user->idRole = $request->idRole;
                $user->email = mb_strtolower($request->email);
                $user->password = Hash::make($request->password);   
                $user->save();

                return redirect()->route("dashboard");   
            }
            else{ 
                return back()->withInput()
                    ->with('error', 'Error en los campos')
                    ->withErrors('La contraseña actual no coincide con la del sistema');
            }
        }
        else{
            $user->idSucursal = $request->idSucursal;
            $user->name= $request->name;
            $user->idRole = $request->idRole;
            $user->email = mb_strtolower($request->email);
            $user->save();

            return redirect()->route("dashboard"); 
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $user = User::find($id);
        $user->estado = $request->enable;
        $user->save();

        return redirect()->route('users.index')->with('success', "Usuario deshabilitada con éxito");
    }

}

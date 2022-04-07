<?php 
 
 namespace App\Http;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Storage;
 use Illuminate\Support\Facades\Config;
  
 class Conexiones
 {
    public function conectar($id)
    {
        $sitio = DB::table('sucursal')->where('id','=',$id)->first();
        $driv='mysql';
        $puerto_conex=$sitio->puerto;
        $database_name=$sitio->bd;
        $user_name=$sitio->usuario;
        $contra=$sitio->clave;
        $host_con=$sitio->servidor;
        
        Config::set([
            'database.connections.server_variable.driver'=>$driv,
            'database.connections.server_variable.host'=>$host_con,//'127.0.0.1',
            'database.connections.server_variable.database'=>$database_name,//'saint',
            'database.connections.server_variable.username'=>$user_name,//'root',
            'database.connections.server_variable.password'=>$contra,//"4321",
            'database.connections.server_variable.port'=>$puerto_conex//'33066'
        ]);

        $driver = ( Config::get('database.connections.server_variable.driver'));
        $host = ( Config::get('database.connections.server_variable.host'));
        $username = ( Config::get('database.connections.server_variable.username'));
        $password = ( Config::get('database.connections.server_variable.password'));
        $port = ( Config::get('database.connections.server_variable.port'));
        $database = ( Config::get('database.connections.server_variable.database'));
        
        $con = mysqli_connect($host,$username,$password,$database,$port);
        return $con;
    }
 }
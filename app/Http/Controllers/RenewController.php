<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\MedidaCaucho;
use App\Models\Reclamo;
use App\Http\Conexiones;

class RenewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'http://3.14.204.63/backend/public/api/';
        return view ('neumaticos.Renovados.ListaRenovados')->with('url', $url);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        dd($newCode);
        //CONEXION DINAMICA/ESTATICA
        $rs = Conexiones::conectar(1);
        if ($rs->connect_error) {
            dd("Connection failed: " . $rs->connect_error);
        }
        //a modo de prueba de una consulta
        $renovados = $rs->query("SELECT * FROM cd_safact");
        $data = $renovados->fetch_all(MYSQLI_ASSOC);
        return view ('auxiliar')->with('medidas', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

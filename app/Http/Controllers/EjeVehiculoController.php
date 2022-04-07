<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EjeVehiculo;

class EjeVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $ejes = EjeVehiculo::all();
        return view('EjeVehiculo.index')->with('ejes', $ejes);
    }
    public function ListadoEje(){
        $ejes = EjeVehiculo::all();
        return  response()->json(["data"=>$ejes]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('EjeVehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            $nuevo = EjeVehiculo::create([
                'descripcion' => $request->descripcion,
                'activo' => $request->activo,
                'idUsuario'=> 1
            ]);
            $respuesta = array(
                'status' => 'success',
                'message' => 'Eje guardado exitosamente');
                return back()->with('success', $respuesta);
            //return redirect('EjeVehiculo.index')->with('success', $respuesta);

        } catch (\Throwable $th) {
            return back()->with('error', $th);
            //return redirect('EjeVehiculo.create')->with('error', $th);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EjeVehiculo $EjeVehiculo) {
        return view('EjeVehiculo.create')->with('eje', $EjeVehiculo);
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
        try {
            $eje = EjeVehiculo::find($id);
            $eje->descripcion = $request->descripcion;
            $eje->activo = $request->activo;
            //$eje->idUsuario = $request->idUsuario;
            $eje->save();
            $respuesta = array(
                'status' => 'success',
                'message' => 'Eje Actualizado exitosamente');
            return back()->with('success', $respuesta);
        } catch (\Throwable $th) {
            return back()->with('error', $th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $eje = EjeVehiculo::find($id);
        $eje->delete();
        $respuesta = array(
            'status' => 'success',
            'message' => 'Eje guardado exitosamente');            
        return back()->with('success', $respuesta);
    }
}

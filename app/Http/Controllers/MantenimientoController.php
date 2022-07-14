<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mantenimientos = Mantenimiento::all();
        
        return view('mantenimientos.index', compact('mantenimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mantenimiento = new Mantenimiento;
        return view('mantenimientos.createupdate', compact('mantenimiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mantenimiento = new Mantenimiento;
        $mantenimiento->nombre_propietario = $request->nombre_propietario;
        $mantenimiento->marca_vehiculo = $request->marca_vehiculo;
        $mantenimiento->modelo_vehiculo = $request->modelo_vehiculo;
        $mantenimiento->fecha_entrada = $request->fecha_entrada;
        $mantenimiento->numero_chasis = $request->numero_chasis;
        $mantenimiento->trabajo = $request->trabajo;
        $mantenimiento->fecha_salida = $request->fecha_salida;
        $mantenimiento->mano_obra = $request->mano_obra;
        $mantenimiento->estado = $request->estado;

        try {
            $mantenimiento->save();
            return redirect(route('mantenimiento.index'))->with('success', "Mantenimiento {$mantenimiento->id} creado !");
        } catch (Exception $e) {
            return back()->withErrors([$e->getMessage()])->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Mantenimiento $mantenimiento, Request $request)
    {
        return view('mantenimientos.createupdate', compact('mantenimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        $mantenimiento->nombre_propietario = $request->nombre_propietario;
        $mantenimiento->marca_vehiculo = $request->marca_vehiculo;
        $mantenimiento->modelo_vehiculo = $request->modelo_vehiculo;
        $mantenimiento->fecha_entrada = $request->fecha_entrada;
        $mantenimiento->numero_chasis = $request->numero_chasis;
        $mantenimiento->trabajo = $request->trabajo;
        $mantenimiento->fecha_salida = $request->fecha_salida;
        $mantenimiento->mano_obra = $request->mano_obra;
        $mantenimiento->estado = $request->estado;

        try {
            $mantenimiento->save();
            return redirect(route('mantenimiento.index'))->with('success', "Mantenimiento {$mantenimiento->id} actualizado !");
        } catch (Exception $e) {
            return back()->withErrors([$e->getMessage()])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mantenimiento $mantenimiento)
    {
        $mantenimiento->delete();
        return redirect(route('mantenimiento.index'))->with('success', "Mantenimiento {$mantenimiento->id} eliminado !");
    }
}

<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Categoria;
use App\Servicio;
use App\Experto;

use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserva = Cita::all();

        $expertos = Experto::all();
        $servicios = Servicio::all();

        return view(
            'citas.index',
            [
                'rese' => $reserva,
                'serv' => $servicios,
                'expe' => $expertos
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $servicios = Servicio::all();
        $expertos = Experto::all();
        
        return view(
            'citas.create',
            [
                'cate' => $categorias,
                'serv' => $servicios,
                'expe' => $expertos
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cita::create($request->all());

        return redirect()->route('citas.index')
            ->with('success', 'Cita creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        return view('citas.show', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        return view('citas.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        $cita->update($request->all());

        return redirect()->route('citas.index')
            ->with('warning', 'Cita actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('citas.index')
            ->with('danger', 'Cita eliminada correctamente');
    }
}

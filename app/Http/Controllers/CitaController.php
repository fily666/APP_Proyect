<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Categoria;
use App\Servicio;
use App\Experto;

use Auth;

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
        $expertos = Experto::all();
        $servicios = Servicio::all();

        $user_autt = Auth::user()->id;

        if (Auth::user()->role_id == 2) {
            $reserva = Cita::where('user_id', $user_autt)->get();
        } else {
            $reserva = Cita::all();
        }

        return view('citas.index', [
            'rese' => $reserva,
            'serv' => $servicios,
            'expe' => $expertos,
        ]);
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

        return view('citas.create', [
            'cate' => $categorias,
            'serv' => $servicios,
            'expe' => $expertos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = new Cita();

        $cita->id = $request->id;
        $cita->user_id = $request->user()->id;
        $cita->categoria_id = $request->categoria_id;
        $cita->title = $request->title;
        $cita->resourceId = $request->resourceId;
        $cita->start = $request->start;
        $cita->end = $request->end;
        $cita->save();

        return redirect()
            ->route('citas.index')
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
        $categorias = Categoria::all();
        $servicios = Servicio::all();
        $expertos = Experto::all();

        return view('citas.show', [
            'cate' => $categorias,
            'serv' => $servicios,
            'expe' => $expertos,
            'cita' => $cita,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        $categorias = Categoria::all();
        $servicios = Servicio::all();
        $expertos = Experto::all();

        return view('citas.edit', [
            'cate' => $categorias,
            'serv' => $servicios,
            'expe' => $expertos,
            'cita' => $cita,
        ]);
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
        $cita->update();

        $cita->status = $request->status;
        $cita->save();

        return redirect()
            ->route('citas.index')
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

        return redirect()
            ->route('citas.index')
            ->with('danger', 'Cita eliminada correctamente');
    }
}

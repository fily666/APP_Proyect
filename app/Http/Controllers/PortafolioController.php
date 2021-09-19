<?php

namespace App\Http\Controllers;

use App\Portafolio;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class PortafolioController extends Controller
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
        $portafolio = Portafolio::latest()->paginate(5);

        return view('portafolios.index', compact('portafolio'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portafolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artuculo = new Portafolio();

        $img = $request->file('imagen')->store('public/img');
        $imagen = Storage::url($img);

        $artuculo->name = $request->name;
        $artuculo->imagen = $imagen;
        $artuculo->etiquetas = $request->etiquetas;
        $artuculo->detail = $request->detail;
        $artuculo->save();

        return redirect()->route('portafolios.index')
            ->with('success', 'Producto creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portafolio $portafolio)
    {
        return view('portafolios.show', compact('portafolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portafolio $portafolio)
    {
        return view('portafolios.edit', compact('portafolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portafolio $portafolio)
    {

        $portafolio->update();

        $img = $request->file('imagen')->store('public/img');
        $imagen = Storage::url($img);

        $portafolio->name = $request->name;
        $portafolio->imagen = $imagen;
        $portafolio->etiquetas = $request->etiquetas;
        $portafolio->detail = $request->detail;
        $portafolio->save();

        return redirect()->route('portafolios.index')
            ->with('warning', 'Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portafolio $portafolio)
    {
        $portafolio->delete();

        return redirect()->route('portafolios.index')
            ->with('danger', 'Articulo eliminado correctamente');
    }
}

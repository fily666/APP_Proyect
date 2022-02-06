<?php

namespace App\Http\Controllers;

use App\Experto;
use App\Categoria;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class ExpertoController extends Controller
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
        $experto = Experto::latest()->paginate(5);

        return view('expertos.index', compact('experto'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('expertos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new Experto();

        $img = $request->file('foto')->store('public/img');
        $foto = Storage::url($img);

        $person->title = $request->title;
        $person->cargo = $request->cargo;
        $person->categoria_id = $request->categoria_id;
        $person->foto = $foto;
        $person->detail = $request->detail;
        $person->save();

        return redirect()->route('expertos.index')
            ->with('success', 'Profesional creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experto  $experto
     * @return \Illuminate\Http\Response
     */
    public function show(Experto $experto)
    {
        return view('expertos.show', compact('experto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experto  $experto
     * @return \Illuminate\Http\Response
     */
    public function edit(Experto $experto)
    {
        $categorias = Categoria::all();

        return view('expertos.edit', compact('experto'), compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experto  $experto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experto $experto)
    {
        $experto->update();

        $img = $request->file('foto')->store('public/img');
        $foto = Storage::url($img);

        $experto->title = $request->title;
        $experto->cargo = $request->cargo;
        $experto->categoria_id = $request->categoria_id;
        $experto->foto = $foto;
        $experto->detail = $request->detail;
        $experto->save();

        return redirect()->route('expertos.index')
            ->with('warning', 'Profesional actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experto  $experto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experto $experto)
    {
        $experto->delete();

        return redirect()->route('expertos.index')
            ->with('danger', 'Profesional eliminado correctamente');
    }
}

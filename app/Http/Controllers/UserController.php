<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $usuario = User::latest()->paginate(5);

    return view('usuarios.index', compact('usuario'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('usuarios.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    User::create($request->all());

    return redirect()->route('usuarios.index')
      ->with('success', 'Usuario creado con éxito.');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\User  $usuario
   * @return \Illuminate\Http\Response
   */
  public function show(User $usuario)
  {
    return view('usuarios.show', compact('usuario'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\User  $usuario
   * @return \Illuminate\Http\Response
   */
  public function edit(User $usuario)
  {
    return view('usuarios.edit', compact('usuario'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\User  $usuario
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, User $usuario)
  {
    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($usuario->id)],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $usuario->update($request->all());

    return redirect()->route('usuarios.index')
      ->with('warning', 'Usuario actualizado con éxito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\User  $usuario
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $usuario)
  {
    $usuario->delete();

    return redirect()->route('usuarios.index')
      ->with('danger', 'Usurio eliminado correctamente');
  }
}

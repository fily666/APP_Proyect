<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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

    $userr = new User();

    $userr->name = $request->name;
    $userr->email = $request->email;
    $userr->password = Hash::make($request['password']);
    $userr->save();

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
    
    $usuario->update();

    $usuario->name = $request->name;
    $usuario->email = $request->email;
    $usuario->password = Hash::make($request['password']);
    $usuario->save();

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

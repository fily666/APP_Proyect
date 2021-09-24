<?php

namespace App\Http\Controllers;

use App\Portafolio;
use App\Experto;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function viewbarberia()
    {
        $portafolio = Portafolio::latest()->paginate(5);
        $experto = Experto::latest()->paginate(5);

        return view('home.barberia', compact('experto'), compact('portafolio'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function viewtattoo()
    {
        $portafolio = Portafolio::latest()->paginate(5);

        return view('home.tattoo', compact('portafolio'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

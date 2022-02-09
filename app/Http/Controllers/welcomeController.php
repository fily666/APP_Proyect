<?php

namespace App\Http\Controllers;

use App\Portafolio;
use App\Experto;
use App\Servicio;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $experto = Experto::all();
        $portafolio = Portafolio::all();

        return view('welcome', compact('experto'), compact('portafolio'));
    }

    public function viewbarberia()
    {
        $servicio = Servicio::all();
        $portafolio = Portafolio::all();
        $experto = Experto::all();

        return view(
            'home.barberia',
            [
                'serv' => $servicio,
                'port' => $portafolio,
                'expe' => $experto
            ]
        );
    }

    public function viewtattoo()
    {
        $servicio = Servicio::all();
        $portafolio = Portafolio::all();
        $experto = Experto::all();

        return view(
            'home.tattoo',
            [
                'serv' => $servicio,
                'port' => $portafolio,
                'expe' => $experto
            ]
        );
    }

    public function viewblog()
    {
        return view('home.blog');
    }

    public function viewcontact()
    {
        return view('home.contact');
    }
}

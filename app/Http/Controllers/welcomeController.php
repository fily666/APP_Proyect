<?php

namespace App\Http\Controllers;

use App\Portafolio;
use App\Experto;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function viewbarberia()
    {
        return view('home.barberia');
    }

    public function viewtattoo()
    {
        return view('home.tattoo');
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

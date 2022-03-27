<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Servicio;
use App\Experto;

use Auth;
use PDF;

use Illuminate\Http\Request;

class ReporteController extends Controller
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
            $count_bar = 0;
            $count_tatt = 0;

        } else {
            $reserva = Cita::all();
            $count_bar = Cita::where('categoria_id',1)->count();
            $count_tatt = Cita::where('categoria_id',2)->count();
        }



        return view(
            'reportes.index',
            [
                'rese' => $reserva,
                'serv' => $servicios,
                'expe' => $expertos,
                'bar' => $count_bar,
                'tatt' => $count_tatt
            ]
        );
    }

    public function PDF()
    {
        $expertos = Experto::all();
        $servicios = Servicio::all();

        $user_autt = Auth::user()->id;

        if (Auth::user()->role_id == 2) {
            $reserva = Cita::where('user_id', $user_autt)->get();
        } else {
            $reserva = Cita::all();
        }

        $pdf = PDF::loadview('reportes.prueba', [
            'rese' => $reserva,
            'serv' => $servicios,
            'expe' => $expertos,
        ]);
        return $pdf->download('prueba.pdf');
    }
}
<?php

namespace App\Http\Controllers;

use App\Calificacion;
use App\Candidata;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $candidatas =  Candidata::all();
        $candidatas = Calificacion::join('candidatas', 'calificacions.id_candidata', '=', 'candidatas.id')
            ->join('users', 'calificacions.id_jurado', '=', 'users.id')
            ->where('users.id','=',auth()->user()->id)
            ->select('candidatas.id', 'candidatas.nombre', 'candidatas.barrio', 'candidatas.foto', 'calificacions.inicial')
            ->orderBy('candidatas.id', 'asc')->get();

        return view('home', compact('candidatas'));
    }

    public function vistaResultado()
    {
        $candidatas = Calificacion::join('candidatas', 'calificacions.id_candidata', '=', 'candidatas.id')
            ->join('users', 'calificacions.id_jurado', '=', 'users.id')
            ->where('users.id', '=', auth()->user()->id)
            ->select('candidatas.id', 'candidatas.nombre', 'candidatas.barrio', 'candidatas.foto', 'calificacions.pregunta')
            ->orderBy('candidatas.id', 'asc')->get();

        return view('vistaResultado', compact('candidatas'));

    }
}

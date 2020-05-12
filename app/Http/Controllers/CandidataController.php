<?php

namespace App\Http\Controllers;

use App\Calificacion;
use App\Candidata;
use Illuminate\Http\Request;

class CandidataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatas = Calificacion::join('candidatas', 'calificacions.id_candidata', '=', 'candidatas.id')
            ->join('users', 'calificacions.id_jurado', '=', 'users.id')
            ->where('users.id', '=', auth()->user()->id)
            ->select('candidatas.id', 'candidatas.nombre', 'candidatas.barrio', 'candidatas.foto', 'calificacions.inicial')
            ->orderBy('candidatas.id', 'asc')->get();

        return view('home', compact('candidatas'));
    }

    public function gala()
    {
        $candidatas = Calificacion::join('candidatas', 'calificacions.id_candidata', '=', 'candidatas.id')
            ->join('users', 'calificacions.id_jurado', '=', 'users.id')
            ->where('users.id', '=', auth()->user()->id)
            ->select('candidatas.id', 'candidatas.nombre', 'candidatas.barrio', 'candidatas.foto', 'calificacions.gala')
            ->orderBy('candidatas.id', 'asc')->get();

        return view('galaCalificacion', compact('candidatas'));
    }


    public function pregunta()
    {
        $candidatas = Calificacion::join('candidatas', 'calificacions.id_candidata', '=', 'candidatas.id')
            ->join('users', 'calificacions.id_jurado', '=', 'users.id')
            ->where('users.id', '=', auth()->user()->id)
            ->select('candidatas.id', 'candidatas.nombre', 'candidatas.barrio', 'candidatas.foto', 'calificacions.pregunta')
            ->orderBy('candidatas.id', 'asc')->get();

        return view('preguntaCalificacion', compact('candidatas'));
    }


    public function calificarInicial($id)
    {
        $candidata = Candidata::find($id);

        return view('calificar', compact('candidata'));
    }

    public function calificarGala($id)
    {
        $candidata = Candidata::find($id);

        return view('calificarGala', compact('candidata'));
    }

    public function calificarPregunta($id)
    {
        $candidata = Candidata::find($id);

        return view('calificarPregunta', compact('candidata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

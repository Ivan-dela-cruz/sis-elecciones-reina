<?php

namespace App\Http\Controllers;

use App\Calificacion;
use App\Candidata;
use App\Resultado;
use App\User;
use Illuminate\Http\Request;
use PDF;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function calculoResultado()
    {
        $inicial = 0;
        $gala = 0;
        $pregunta = 0;

        $calificacion = Calificacion::join('candidatas', 'calificacions.id_candidata', '=', 'candidatas.id')
            ->join('users', 'calificacions.id_jurado', '=', 'users.id')
            ->select('candidatas.id as candidata', 'candidatas.apellido', 'candidatas.barrio', 'candidatas.nombre', 'users.name', 'calificacions.inicial', 'calificacions.gala', 'calificacions.pregunta')
            ->orderBy('candidatas.id', 'asc')
            ->orderBy('users.id', 'asc')->get();

        $contador = 0;
        $total = 0;

        foreach ($calificacion as $cal) {

            if ($cal->candidata == 1) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;

                    // $resultado = Resultado::findOrFail($cal->candidata);
                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    // $resultado = new Resultado();
                    // $resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 2) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;
                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    // $resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 3) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;
                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    //$resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 4) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;

                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    //$resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 5) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;

                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    // $resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 6) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;

                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    //  $resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 7) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;

                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    // $resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }


        }


        /* $resultado = new Resultado();
         $resultado->id_candidata = $calificacion->candidata;
         $resultado->inicial = $inicial;
         $resultado->gala = $gala;
         $resultado->pregunta = $pregunta;
         $resultado->calificacion = $total;
         $resultado->save();*/


        $pdf = \PDF::loadView('resultadopdf', ['calificacion' => $calificacion]);
        return $pdf->download('calificaciones.pdf');
        // return $resultados;
    }

    public function listarGanadora()
    {
        $inicial = 0;
        $gala = 0;
        $pregunta = 0;

        $calificacion = Calificacion::join('candidatas', 'calificacions.id_candidata', '=', 'candidatas.id')
            ->join('users', 'calificacions.id_jurado', '=', 'users.id')
            ->select('candidatas.id as candidata', 'candidatas.apellido', 'candidatas.barrio', 'candidatas.nombre', 'users.name', 'calificacions.inicial', 'calificacions.gala', 'calificacions.pregunta')
            ->orderBy('candidatas.id', 'asc')
            ->orderBy('users.id', 'asc')->get();

        $contador = 0;
        $total = 0;

        foreach ($calificacion as $cal) {

            if ($cal->candidata == 1) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;

                    // $resultado = Resultado::findOrFail($cal->candidata);
                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    // $resultado = new Resultado();
                    // $resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 2) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;
                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    // $resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 3) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;
                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    //$resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 4) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;

                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    //$resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 5) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;

                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    // $resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 6) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;

                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    //  $resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }

            if ($cal->candidata == 7) {
                $contador++;
                $inicial = $inicial + $cal->inicial;
                $gala = $gala + $cal->gala;
                $pregunta = $pregunta + $cal->pregunta;
                if ($contador == 4) {
                    $total = ($inicial + $gala + $pregunta) / 4;

                    $resultado = Resultado::where('id_candidata', $cal->candidata)->first();
                    // $resultado->id_candidata = $cal->candidata;
                    $resultado->inicial = $inicial;
                    $resultado->gala = $gala;
                    $resultado->pregunta = $pregunta;
                    $resultado->calificacion = $total;
                    $resultado->save();
                    $contador = 0;
                    $inicial = 0;
                    $gala = 0;
                    $pregunta = 0;
                    $total = 0;
                }

            }


        }

        $resultadosLista = Resultado::join('candidatas', 'resultados.id_candidata', '=', 'candidatas.id')
            ->select('candidatas.id as candidata', 'candidatas.apellido', 'candidatas.barrio', 'candidatas.nombre', 'resultados.inicial', 'resultados.gala', 'resultados.pregunta', 'resultados.calificacion')
            ->orderBy('resultados.calificacion', 'asc')->take(4)->get();

        $resultados = Resultado::join('candidatas', 'resultados.id_candidata', '=', 'candidatas.id')
            ->select('candidatas.id as candidata', 'candidatas.apellido', 'candidatas.barrio', 'candidatas.nombre', 'resultados.inicial', 'resultados.gala', 'resultados.pregunta', 'resultados.calificacion')
            ->orderBy('resultados.calificacion', 'desc')->take(3)->get();

        $reina = 0;
        $confra = 0;
        $simpa = 101;
        foreach ($resultados as $re) {
            if ($re->calificacion > $reina) {
                $reina = $re->calificacion;
            }
            if ($re->calificacion < $simpa) {
                $simpa = $re->calificacion;
            }
        }
        foreach ($resultados as $re) {
            if ($re->calificacion < $reina && $re->calificacion > $simpa) {
                $confra = $re->calificacion;
            }

        }



        $pdf = \PDF::loadView('resultadoGanadorpdf', ['resultados' => $resultados,'resultadosLista' => $resultadosLista,'reina'=>$reina,'confra'=>$confra,'simpa'=>$simpa]);
        return $pdf->download('listarGanadora.pdf');
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
        $inicial = $request->inicial;
        $gala = $request->gala;
        $final = $request->final;
        $id = $request->id;
        $id_ju = $request->id_jurado;

        $califica = new Calificacion();
        $califica->id_jurado = $id_ju;
        $califica->id_candidata = $id;
        $califica->inicial = $inicial;
        $califica->gala = $gala;
        $califica->pregunta = $final;
        $califica->save();

        return $califica;


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

    public function calificarInicial(Request $request)
    {

        $jurado = User::findOrFail($request->id_jurado);

        $candidata = Candidata::findOrFail($request->id);

        $calificacion = Calificacion::where('id_candidata', $candidata->id)->where('id_jurado', $jurado->id)->first();
        $calificacion->inicial = $request->inicial;
        $calificacion->save();

        return redirect(route('home'));


    }

    public function calificarGala(Request $request)
    {

        $jurado = User::findOrFail($request->id_jurado);

        $candidata = Candidata::findOrFail($request->id);

        $calificacion = Calificacion::where('id_candidata', $candidata->id)->where('id_jurado', $jurado->id)->first();
        $calificacion->gala = $request->gala;
        $calificacion->save();

        return redirect(route('gala'));


    }

    public function calificarPregunta(Request $request)
    {

        $jurado = User::findOrFail($request->id_jurado);

        $candidata = Candidata::findOrFail($request->id);

        $calificacion = Calificacion::where('id_candidata', $candidata->id)->where('id_jurado', $jurado->id)->first();
        $calificacion->pregunta = $request->pregunta;
        $calificacion->save();

        return redirect(route('pregunta'));


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

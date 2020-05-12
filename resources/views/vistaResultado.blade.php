@extends('layouts.app')

@section('content')

    <section class="about-banner">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Ver resultados
                    </h1>
                    <a class="primary-btn" href="{{route('posiciones')}}">Resultado ganadoras</a>
                    <a class="primary-btn" href="{{route('calcular')}}">Reporte general</a>
                </div>
            </div>
        </div>
    </section>




@endsection

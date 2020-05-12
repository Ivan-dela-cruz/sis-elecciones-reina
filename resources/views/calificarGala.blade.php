@extends('layouts.app')

@section('content')
    <section class="home-about-area section-gap py-1">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 home-about-left">
                    <img class="img-fluid" src="{{$candidata->foto}}" alt="">
                </div>
                <div class="col-lg-5 col-md-6 home-about-right">
                    <p>Candidata {{$candidata->id}}</p>
                    <h1 class="text-uppercase">{{$candidata->nombre}} {{$candidata->apellido}}</h1>
                    <p>
                        Barrio {{$candidata->barrio}}
                    </p>
                    <p>
                        {{$candidata->edad}} años de edad
                    </p>
                </div>

            </div>


        </div>


        <div class="align-content-xl-center">
            <div class="comment-form" style="background-color:#04091e">
                <h3 class="text-white" >Calificación traje de Gala</h3>
                <form  method="post" action="{{route('calificar-gala')}}">
                    {{ csrf_field() }}
                    <input hidden value="{{ auth()->user()->id }}" type="text" class="form-control" name="id_jurado"
                           id="id_jurado">
                    <input hidden value="{{$candidata->id}}" type="text" class="form-control" name="id" id="id">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-10 col-lg-4">
                            <div class="title text-center">
                                <h5 class="text-white" for=""></h5>
                                <br>
                                <input style="height: 60px; font-size: 50px; text-align: center;" min="1" max="25"
                                       type="number" class="form-control font-weight-bold"
                                       name="gala" id="gala" required>
                            </div>
                        </div>
                    </div>


                    <button class="primary-btn text-uppercase" type="submit">Enviar calificación</button>
                </form>
            </div>
        </div>

    </section>

@endsection

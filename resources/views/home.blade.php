@extends('layouts.app')

@section('content')
    <section class="about-banner">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Calificación traje Inicial
                    </h1>
                    <p style="font-size: 20px;" class="text-white link-nav">Canditas a Reina</p>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio-area section-gap py-0" id="portfolio">
        <div class="container">
            <div class="filters-content">
                <div class="row grid">

                    @foreach($candidatas as $candidata)
                        @if($candidata->inicial == 0)
                            <div class="single-portfolio col-sm-4 all vector mb-25">
                                <div class="relative">
                                    <div class="thumb">
                                        <div class="overlay overlay-bg"></div>
                                        @if($candidata->foto)
                                            <img class="image img-fluid" width="250px" height="150px"
                                                 src="{{$candidata->foto}}" alt="Raised image">
                                        @endif

                                    </div>
                                    <a href="{{$candidata->foto}}" class="img-pop-up">
                                        <div class="middle">
                                            <div class="text align-self-center d-flex"><img src="img/preview.png"
                                                                                            alt=""></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-inner">
                                    <h4>{{$candidata->nombre}}  {{$candidata->apellido}}</h4>
                                    <div class="cat">{{$candidata->barrio}}</div>
                                </div>
                                <div class="p-inner py-0">
                                    <a class="primary-btn text-uppercase"
                                       href="{{ route('candidata-inicial', $candidata->id) }}">Calificar traje
                                        inicial</a>

                                </div>

                            </div>

                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- End portfolio-area Area -->



@endsection

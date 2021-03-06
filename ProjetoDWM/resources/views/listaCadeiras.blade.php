@extends('layout_base')

@section('content')

    <section id="banner">
        <h1>Video Aulas</h1> {{-- Cadeira --}}
    </section>

    <section id="two" class="wrapper style1 special">
        <div class="inner">
            <header>
                <h2>Cadeiras</h2>
            </header>

            <div class="flex flex-4">

                @if (isset($c))
                    @foreach ($c as $cadeira)

                    <div onclick="window.location='/listaCadeiras/{{$cadeira->id}}';" class="box person custom-button">
                    <a><h3>{{ $cadeira->nome }}</h3></a>
                    </div>

                    @endforeach
                @endif

            </div>
        </div>
    </section>

@endsection

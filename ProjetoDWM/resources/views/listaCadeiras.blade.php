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

                @foreach ($cadeiras as $cadeira)

                    <div class="box person custom-button">
                        <h3>{{ $cadeira->nome }}</h3>
                    </div>

                @endforeach

            </div>
        </div>
    </section>

@endsection
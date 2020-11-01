@extends('layout_base')

@section('content')

    <section id="banner">
        <h1>Nome cadeira</h1> {{-- Cadeira --}}
    </section>

    <!-- One -->
    <section id="one" class="wrapper">
        <div class="inner">
            <div class="flex flex-3">

                @foreach ($v as $video)

                    <article>
                        <header>
                        <h3>{{$video->nome}}</h3> {{-- Title --}}

                        </header>
                        <p>{{$video->descricao}}</p> {{-- Description --}}

                        <footer>
                        <a href="/video_aula/{{$video->id}}" class="button special">Ver</a>
                        </footer>
                    </article>

                @endforeach

            </div>
        </div>
    </section>

@endsection

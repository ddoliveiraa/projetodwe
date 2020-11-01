@extends('layout_base')

@section('content')

    <section id="banner">
        <h1>{{$c[0]->nome}}</h1> {{-- Cadeira --}}
    </section>

    <!-- One -->
    <section id="one" class="wrapper">
        <div class="inner">
            <div class="flex flex-3">

                @foreach ($v as $video)

                    <article class="comment-box">
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

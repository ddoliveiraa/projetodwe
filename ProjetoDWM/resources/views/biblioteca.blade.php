@extends('layout_base')

@section('content')

    <section id="banner">
        <h1>{{ $c[0]->nome }}</h1> {{-- Cadeira --}}
    </section>

    <!-- One -->
    <section id="one" class="wrapper">
        <div class="inner">
            <div class="flex flex-3">

                @foreach ($v as $video)

                    <article class="comment-box">
                        <header>
                            <h3>{{ $video->nome }}</h3> {{-- Title
                            --}}

                        </header>
                        <p>{{ $video->descricao }}</p> {{-- Description
                        --}}

                        <footer>
                            <a href="/video_aula/{{ $video->id }}" class="button special">Ver</a>
                        </footer>
                    </article>

                @endforeach

                {{-- Botão upload --}}

                <article class="comment-box custom-button" id="myBtn">
                    <div id="add-button">+</div>
                </article>

            </div>
        </div>
    </section>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form action="">
                <input type="text" name="title" id="title" placeholder="Insira um título...">
                <textarea name="" id="" cols="10" rows="10" placeholder="Escreva uma descrição..."></textarea>
                <input type="text" name="url" id="url" placeholder="Insira o URL do vídeo">
                <input type="submit" value="Submeter" class="button special">
                <input type="reset" value="Apagar">
            </form>
            
        </div>

    </div>

@endsection

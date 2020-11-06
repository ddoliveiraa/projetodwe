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
                @if($a[0]->isAdmin)
                <article class="comment-box custom-button" id="myBtn">
                    <div id="add-button">+</div>
                </article>
                @endif
                

            </div>
        </div>
    </section>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form method="post" action="/video_aula" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" id="title" placeholder="Insira um título...">
                <textarea name="descricao" id="" cols="10" rows="10" placeholder="Escreva uma descrição..."></textarea>
<<<<<<< HEAD
                <input type="file" accept="video/*" name="file" id="file">
=======
                <input type="file" name="url" id="url" placeholder="Insira o URL do vídeo">
>>>>>>> 08944914bb3dbe86a68051807cf5b69c50fc3c2c
                <input style="display: none" type="text" name="id_v" id="id_v" value={{$c[0]->id}}>
                <input type="submit" value="Submeter" class="button special">
                <input type="reset" value="Apagar">
            </form>
            
        </div>

    </div>

@endsection

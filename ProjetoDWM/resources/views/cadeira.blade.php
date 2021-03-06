@extends('layout_base')

@section('content')

    <!-- Banner -->
    <section id="banner">
    <h1>{{$c[0]->nome}}</h1>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style1 special">
        <div class="inner">
            <header>
                <h2>{{$video->nome}}</h2>
            </header>
            <div class="wrapper">
                <video src="{{$video->url}}" width="960px" height="540px" controls autoplay>

                </video>
            </div>
        </div>
    </section>
    {{-- @if (1 == 0){
        <p>Estou aqui</p>   Isto está aqui apenas para saber como fazer o if nas páginas
    }
    @endif --}}

    <section id="three" class="wrapper special">
        <div class="inner">

            <h2 class="wrapper">Faça um comentário</h2>

            <form id="form" method="post" action="/comentario">
                @csrf
                <div class="row uniform">
                    <!-- Break -->
                    <div class="12u$">
                        <textarea name="message" id="message" placeholder="Escreva um comentário..." rows="6"></textarea>
                        <p style="color:red">{{ $errors->first('message')}}</p>
                    <input type="text" name="vid_id" id="vid_id" value="{{$video->id}}" style="display:none"/>
                    </div>
                    <!-- Break -->
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Comentar" /></li>
                            <li><input type="reset" value="Apagar" class="alt" /></li>
                        </ul>
                    </div>
                </div>
            </form>

            <header class="align-center">
                <h2 style="margin-top: 40px">Comentários</h2>
            </header>
            <div>
                @foreach($coms as $c)
                <article class="comment-box">
                    <header>
                        <h3>{{$c->nome}}</h3>
                    </header>
                    <p>{{$c->comentario}}</p>
                </article>
                @endforeach
            </div>

        </div>

    </section>

@endsection

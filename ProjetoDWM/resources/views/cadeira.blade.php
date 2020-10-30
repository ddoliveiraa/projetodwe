@extends('layout_base')

@section('content')

    <!-- Banner -->
    <section id="banner">
        <h1>Nome cadeira</h1>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style1 special">
        <div class="inner">
            <header>
                <h2>{{$video->nome}}</h2>
            </header>
            <div class="wrapper">
                <video src="{{$video->url}}" width="960px" height="540px" controls>

                </video>
            </div>
        </div>
    </section>

    <section id="three" class="wrapper special">
        <div class="inner">

            <h2 class="wrapper">Faça um comentário</h2>

            <form id="form" method="post" action="/comentario">
                @csrf
                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="name" id="name" value="" placeholder="Nome"/>
                        <p style="color:red">{{ $errors->first('name')}}</p>
                    </div>
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
                <h2>Comentários</h2>
            </header>
            <div>
                @foreach($coms as $c)
                <article style="background: rgb(144, 144, 144, 0.075)">
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

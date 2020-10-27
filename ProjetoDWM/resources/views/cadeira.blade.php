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
                <h2>Nome da Aula</h2>
            </header>
            <div class="wrapper">
                <video src="" width="960px" height="540px" controls>

                </video>
            </div>
        </div>
    </section>

    <section id="three" class="wrapper special">
        <div class="inner">

            <h2 class="wrapper">Faça um comentário</h2>

            <form method="post" action="#">
                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="name" id="name" value="" placeholder="Nome"/>
                    </div>
                    <!-- Break -->
                    <div class="12u$">
                        <textarea name="message" id="message" placeholder="Escreva um comentário..." rows="6"></textarea>
                    </div>
                    <!-- Break -->
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Publicar" /></li>
                            <li><input type="reset" value="Apagar" class="alt" /></li>
                        </ul>
                    </div>
                </div>
            </form>

            <header class="align-center">
                <h2>Comentários</h2>
            </header>
            <div>
                <article>
                    <header>
                        <h3>Nome pessoa</h3>
                    </header>
                    <p>Comentários</p>
                </article>
                <article>
                    <header>
                        <h3>Nome pessoa</h3>
                    </header>
                    <p>Comentários</p>
                </article>
                <article>
                    <header>
                        <h3>Nome pessoa</h3>
                    </header>
                    <p>Comentários</p>
                </article>
            </div>





        </div>

    </section>

@endsection

@extends('layout_base')

@section('content')

    <!-- Banner -->
    <section id="banner">
    </section>

    <!-- Two -->
    <section id="two" class="wrapper">

        <div class="inner">
            <h3>Login</h3>
            <form method="post" action="#">
                <div class="row uniform" >
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="email" id="email" value="" placeholder="Endereço email"/>
                    </div>
                </div>

                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="password" id="password" value="" placeholder="Password"/>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="6u 12u$(xsmall)">
                   <a href="#" class="button special">Login</a>
                    <a href="#" class="button special">Registar</a>
                </div>
            </div>
        </div>
    </section>

@endsection

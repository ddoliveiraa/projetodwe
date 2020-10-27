<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function getLibrary() {

        $library = DB::statement('SELECT * FROM videoaulas');

        return view('biblioteca', ['videoaulas' => $library]);
    }
}

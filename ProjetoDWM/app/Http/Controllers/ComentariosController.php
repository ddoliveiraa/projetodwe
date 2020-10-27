<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentarios;

class ComentariosController extends Controller
{
    public function index() {
        
        $users = comentarios::all();

        return view('participants', ['users'=>$users]);
     }

     public function store(Request $request) {


        $request->validate([
            'nome' => 'required',
            'comentario' => 'required'
        ]);
        
        $user = new Participants();

        $user->nome = $request->name;
        $user->nick = $request->nick;
        $user->save();

        return redirect('/');

     }

     public function show($id) {
        echo 'show';
     }

     public function destroy($id) {
        echo 'destroy';
     }
}

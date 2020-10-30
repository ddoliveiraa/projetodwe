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
            'name' => 'required',
            'message' => 'required'
        ]);
        
        $user = new comentarios();

        $user->nome = $request->name;
        $user->comentario = $request->message;
        $user->id_video = $request->vid_id;
        $user->save();

        return redirect('/cadeira/'.$request->vid_id);

     }

     public function show($id) {
        echo 'show';
     }

     public function destroy($id) {
        echo 'destroy';
     }
}

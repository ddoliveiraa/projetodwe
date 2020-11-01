<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentarios;

class ComentariosController extends Controller
{
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

        //return redirect('/video_aula/'.$request->vid_id);
        return back();

     }
}

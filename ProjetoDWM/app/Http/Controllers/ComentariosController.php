<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentarios;
use App\Http\Controllers\Auth;

class ComentariosController extends Controller
{
     public function store(Request $request) {

        $request->validate([
            'message' => 'required'
        ]);
        
        $user = new comentarios();

        $user->nome = auth()->name();
        $user->comentario = $request->message;
        $user->id_video = $request->vid_id;
        $user->save();

        //return redirect('/video_aula/'.$request->vid_id);
        return back();

     }
}

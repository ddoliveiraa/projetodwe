<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\videoaula;
use App\Models\comentarios;


class VideoaulaController extends Controller
{
    public function index() {
        
        $users = comentarios::all();

        return view('participants', ['users'=>$users]);
     }

     public function create() {
        return view('register');
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
        $video = videoaula::find($id);
        $comentarios = comentarios::where('id_video', $id)->get();

        return view('cadeira', ['video'=>$video , 'coms'=>$comentarios]);
     }

     public function edit($id) {

        $user = Participants::find($id);

        return view('edit', compact('user'));
     }

     public function update(Request $request, $id_video) {
        
        $user = comentarios::all()->where("id_video" , $id_video); //SELECT * From tabel where 

        $user->nome = $request->name;
        $user->nick = $request->nick;
        $user->save();

        return redirect('/');

     }

     public function destroy($id) {
        echo 'destroy';
     }

}

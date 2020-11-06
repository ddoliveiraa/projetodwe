<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\videoaula;
use App\Models\comentarios;
use App\Models\Cadeiras;

class VideoaulaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $videos = videoaula::all();

        return view('biblioteca', ['videos'=>$videos]);
     }

     public function create() {
        return view('register');
     }

     public function show($id) {
        $video = videoaula::find($id);
        $comentarios = comentarios::where('id_video', $id)->get();
        $cadeira = Cadeiras::where('id', $video->id_cadeira)->get();

        return view('cadeira', ['video'=>$video , 'coms'=>$comentarios, 'c'=>$cadeira]);
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

     public function store(Request $request) {

         $request->validate([
               'title' => 'required',
               'descricao' => 'required',
               'file' => 'required'
         ]);
         
         $video = new videoaula();

         $video->nome = $request->title;
         $video->descricao = $request->descricao;
         $video->id_cadeira = $request->id_v;

         $fileName = time().'_'.$request->file->getClientOriginalName();
         error_log("File\n".$request->file('file'));
         $filePath = '/storage/'.$request->file('file')->storeAs('videos', $fileName, 'public');
         
         

         $video->url = $filePath;

         $video->save();

         //return redirect('/video_aula/'.$request->vid_id);
         return back();

     }
}

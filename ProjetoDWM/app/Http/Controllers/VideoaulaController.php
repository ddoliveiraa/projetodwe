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

     public function show($id) {
        $video = videoaula::find($id);
        $comentarios = comentarios::where('id_video', $id)->get();
        $cadeira = Cadeiras::where('id', $video->id_cadeira)->get();

        return view('cadeira', ['video'=>$video , 'coms'=>$comentarios, 'c'=>$cadeira]);
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

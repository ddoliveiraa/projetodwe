<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadeiras;
use App\Models\videoaula;

class CadeirasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $cadeiras = Cadeiras::all();
        $user = auth()-> name();
        return view('listaCadeiras', ['c'=>$cadeiras, 'u'=>$user]);
    }

    public function show($id){

        $videos = videoaula::where('id_cadeira', $id)->get();
        $cadeira = Cadeiras::where('id', $id)->get();

        return view('biblioteca', ['v'=>$videos, 'c'=>$cadeira]);
    }
}

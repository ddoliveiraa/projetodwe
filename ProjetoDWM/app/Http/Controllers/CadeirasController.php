<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadeiras;
use App\Models\videoaula;

class CadeirasController extends Controller
{
    public function index() {

        $cadeiras = Cadeiras::all();

        return view('listaCadeiras', ['c'=>$cadeiras]);
    }

    public function show($id){

        $videos = videoaula::where('id_cadeira', $id)->get();

        return view('biblioteca', ['v'=>$videos]);
    }
}

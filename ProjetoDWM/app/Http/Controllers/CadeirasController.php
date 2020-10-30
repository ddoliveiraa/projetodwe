<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadeiras;

class CadeirasController extends Controller
{
    public function index() {

        $cadeiras = Cadeiras::all();

        return view('listaCadeiras', ['cadeiras'=>$cadeiras]);
    }
}

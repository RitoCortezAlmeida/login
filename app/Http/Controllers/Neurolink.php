<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Neurolink extends Controller
{
     public function log (){
        return view('area');
    }

    public function inicioS (Request $request){
        $correo = $request->input('correo');
        $contra = $request->input('contra');

        if ($correo==0) {
            return view('sincorreo');
        } else if ($contra==0) {
            return view('sincontra');
        } else {
            return view('inicioS');
        }
    }
}
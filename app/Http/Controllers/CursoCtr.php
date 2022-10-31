<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoCtr extends Controller{
    public function index(){
        return view('cursos.index');
    
    }

    public function create(){
        return view('cursos.create');

    }
    public function show($curso){
        ;// ['curso' => $curso]
        return view('cursos.show', compact('curso'));
    }

}

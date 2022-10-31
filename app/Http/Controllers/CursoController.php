<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
use function GuzzleHttp\Promise\all;
class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();
        return view('curso\index',compact('cursos'));
    }
    public function create(){
        return view('curso\create');

    }
    public function store(StoreCurso $request){
     
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso);

    }
    public function show(Curso $curso){
        return view('curso\show', compact('curso'));
    }
    public function edit(Curso $curso){

        return view('curso.edit', compact('curso'));
    }
    public function update(Request $request, Curso $curso){
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

         $curso->update($request->all());

         return redirect()->route('cursos.show',$curso);
    }
    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}


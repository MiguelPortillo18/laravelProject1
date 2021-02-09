<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeCourse;
use App\Models\Course;
use Illuminate\Http\Request;


class courseController extends Controller
{
    public function index() {

        $cursos = Course::orderBy('id', 'desc')->paginate();

        return view('courses.index', compact('cursos'));
    }

    public function create() {
        return view('courses.create');
    }

    public function store(storeCourse $request) {

    /*  $curso = new Course();

        $curso->name = $request->name;
        $curso->desc = $request->desc;
        $curso->category = $request->category;

        $curso->save(); */ 


        //Forma sencilla de crear el objeto curso utilizando una unica linea de codigo
        $curso = Course::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Course $curso) { 

        return view('courses.show', ['curso' => $curso]);
    }

    public function edit(Course $curso) {
        return view('courses.edit', compact('curso'));
    }

    public function update(Request $request, Course $curso) {

        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'category' => 'required'
        ]);

        /* $curso->name = $request->name;
        $curso->desc = $request->desc;
        $curso->category = $request->category;

        $curso->save(); */

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Course $curso) {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}

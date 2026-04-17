<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index() {
        $classes = ClassRoom::paginate(5);
        return view('classes.index', compact('classes'));
    }

    public function create() {
        return view('classes.create');
    }

    public function store(Request $request) {
        ClassRoom::create($request->all());
        return redirect('/classes');
    }

    public function edit($id) {
        $class = ClassRoom::findOrFail($id);
        return view('classes.edit', compact('class'));
    }

    public function update(Request $request, $id) {
        $class = ClassRoom::findOrFail($id);
        $class->update($request->all());
        return redirect('/classes');
    }

    public function destroy($id) {
        ClassRoom::destroy($id);
        return redirect('/classes');
    }
}

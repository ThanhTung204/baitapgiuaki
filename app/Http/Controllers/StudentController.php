<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::with('classroom');
        if ($request->search) {
            $query->where('student_name', 'like', '%' . $request->search . '%');
        }
        $students = $query->latest()->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $classrooms = Classroom::all();
        return view('students.create', compact('classrooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required',
            'classroom_id' => 'required'
        ]);

        Student::create($request->only('student_name','classroom_id'));
        return redirect()->route('students.index')->with('success', 'Thêm sinh viên thành công');
    }

    public function edit(Student $student)
    {
        $classrooms = Classroom::all();
        return view('students.edit', compact('student','classrooms'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'student_name' => 'required',
            'classroom_id' => 'required'
        ]);

        $student->update($request->only('student_name','classroom_id'));
        return redirect()->route('students.index')->with('success', 'Cập nhật thành công');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(['success' => true]);
    }
}

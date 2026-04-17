<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller{
    public function index(){
        $students = Student::paginate(5);
        return view('students.index', compact('students'));
    }

    public function create(){ return view('students.create'); }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'class_name'=>'required'
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success','Thêm thành công');
    }

    public function edit($id){
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id){
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success','Cập nhật thành công');
    }

    public function destroy($id){
        Student::destroy($id);
        return back()->with('success','Đã xoá');
    }
}

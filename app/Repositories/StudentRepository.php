<?php
namespace App\Repositories;

use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    public function all()
    {
        return Student::all();
    }

    public function find($id)
    {
        return Student::findOrFail($id);
    }

    public function studentsByClass($classId)
    {
        return Student::where('class_id', $classId)->get();
    }

    public function registerSubject($studentId, $subjectId)
    {
        $student = Student::findOrFail($studentId);
        $student->subjects()->attach($subjectId, [
            'registered_at' => now()
        ]);
    }
}

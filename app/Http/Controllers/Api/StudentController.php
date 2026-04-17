<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\StudentRepositoryInterface;
use App\Models\Student;

class StudentController extends Controller
{
    protected $repo;

    public function __construct(StudentRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        return response()->json($this->repo->all());
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student);
    }

    public function subjects($id)
    {
        $student = $this->repo->find($id);
        return response()->json($student->subjects);
    }

    public function register($id, $subjectId)
    {
        $this->repo->registerSubject($id, $subjectId);
        return response()->json(['message' => 'Registered']);
    }
}

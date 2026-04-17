<!DOCTYPE html>
<html>
<head>
    <title>Sửa sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Sửa sinh viên</h2>
    <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="student_name" value="{{ $student->student_name }}" class="form-control mb-2">
        <select name="classroom_id" class="form-control mb-2">
            @foreach($classrooms as $class)
            <option value="{{ $class->id }}" {{ $student->classroom_id == $class->id ? 'selected' : '' }}>
                {{ $class->class_name }}
            </option>
            @endforeach
        </select>
        <button class="btn btn-primary">Cập nhật</button>
    </form>
</div>
</body>
</html>

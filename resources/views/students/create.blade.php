<!DOCTYPE html>
<html>
<head>
    <title>Thêm sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Thêm sinh viên</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <input type="text" name="student_name" class="form-control mb-2" placeholder="Tên sinh viên">
        <select name="classroom_id" class="form-control mb-2">
            @foreach($classrooms as $class)
            <option value="{{ $class->id }}">{{ $class->class_name }}</option>
            @endforeach
        </select>
        <button class="btn btn-success">Lưu</button>
    </form>
</div>
</body>
</html>

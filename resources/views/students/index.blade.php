<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Quản lý sinh viên</h2>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">+ Thêm sinh viên</a>

    <form method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Tìm sinh viên..." value="{{ request('search') }}">
    </form>

    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Lớp</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $sv)
            <tr id="row-{{ $sv->id }}">
                <td>{{ $sv->id }}</td>
                <td>{{ $sv->student_name }}</td>
                <td>{{ $sv->classroom->class_name ?? '' }}</td>
                <td>
                    <a href="{{ route('students.edit',$sv->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <button onclick="deleteStudent({{ $sv->id }})" class="btn btn-danger btn-sm">Xóa</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
function deleteStudent(id){
    if(confirm('Xóa sinh viên này?')){
        fetch('/students/' + id, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        }).then(res => res.json()).then(data => {
            if(data.success){
                document.getElementById('row-' + id).remove();
            }
        });
    }
}
</script>
</body>
</html>

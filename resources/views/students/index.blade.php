@extends('layouts.app')

@section('content')

<h3 class="mb-4 fw-bold">📚 Quản lý sinh viên</h3>

<div class="card mb-3 p-3">
<div class="d-flex justify-content-between">

<input id="search" class="form-control w-50" placeholder="🔍 Tìm kiếm...">

<a href="{{ route('students.create') }}" class="btn btn-success">
+ Thêm
</a>

</div>
</div>

<div class="card">
<div class="card-body p-0">

<table class="table table-hover mb-0">
<thead class="table-dark">
<tr> 
<th>Địa chỉ </th>
<th>Tên</th>
<th>Email</th>
<th>Lớp</th>
<th width="180">Hành động</th>
</tr>
</thead>

<tbody>
@foreach($students as $s)
<tr>
<td class="fw-semibold">{{ $s->name }}</td>
<td>{{ $s->email }}</td>

<td>
<span class="badge bg-primary">
{{ $s->class_name }}
</span>
</td>

<td>
<a href="{{ route('students.edit',$s->id) }}" class="btn btn-warning btn-sm">
✏️ Sửa
</a>

<form method="POST" action="{{ route('students.destroy',$s->id) }}" style="display:inline">
@csrf
@method('DELETE')
<button class="btn btn-danger btn-sm">🗑 Xoá</button>
</form>
</td>
</tr>
@endforeach
</tbody>

</table>

</div>
</div>

<div class="mt-3">
{{ $students->links() }}
</div>

<script>
document.getElementById('search').addEventListener('keyup', function(){
let val = this.value.toLowerCase();
document.querySelectorAll('tbody tr').forEach(row=>{
row.style.display = row.innerText.toLowerCase().includes(val) ? '' : 'none';
});
});
</script>

@endsection
@extends('layouts.app')

@section('content')

<h3>➕ Thêm sinh viên</h3>

<div class="card p-3">
<form method="POST" action="{{ route('students.store') }}">
@csrf

<input name="name" class="form-control mb-2" placeholder="Tên">
<input name="email" class="form-control mb-2" placeholder="Email">
<input name="class_name" class="form-control mb-2" placeholder="Lớp">
<input name="diachi" class="form-control mb-2" placeholder="địa chỉ ">
<button class="btn btn-success">Lưu</button>
</form>
</div>

@endsection 
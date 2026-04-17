@extends('layouts.app')

@section('content')

<h3>✏️ Sửa sinh viên</h3>

<div class="card p-3">
<form method="POST" action="{{ route('students.update',$student->id) }}">
@csrf
@method('PUT')

<input name="name" value="{{ $student->name }}" class="form-control mb-2">
<input name="email" value="{{ $student->email }}" class="form-control mb-2">
<input name="class_name" value="{{ $student->class_name }}" class="form-control mb-2">

<button class="btn btn-primary">Cập nhật</button>
</form>
</div>

@endsection
@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card shadow">
<div class="card-header text-center"><h4>Đăng ký</h4></div>
<div class="card-body">
<form method="POST" action="/register">
@csrf
<div class="mb-3">
<label>Name</label>
<input name="name" class="form-control" required>
</div>
<div class="mb-3">
<label>Email</label>
<input name="email" class="form-control" required>
</div>
<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<button class="btn btn-success w-100">Đăng ký</button>
</form>
</div>
</div>
</div>
</div>
@endsection

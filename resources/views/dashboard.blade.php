@extends('layouts.app')

@section('content')

<h3 class="mb-4 fw-bold">📊 Dashboard</h3>

<div class="row">

<div class="col-md-4">
<div class="card p-3 text-center">
<h5>Sinh viên</h5>
<h2>{{ $totalStudents ?? 120 }}</h2>
</div>
</div>

<div class="col-md-4">
<div class="card p-3 text-center">
<h5>Lớp học </h5>
<h2>12</h2>
</div>
</div>

<div class="col-md-4">
<div class="card p-3 text-center">
<h5>Giảng viên</h5>
<h2>8</h2>
</div>
</div>

</div>

@endsection
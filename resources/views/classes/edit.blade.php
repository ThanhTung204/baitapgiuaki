<form method="POST" action="/classes/{{ $class->id }}">
@csrf
@method('PUT')
<input name="name" value="{{ $class->name }}">
<button>Cập nhật</button>
</form>

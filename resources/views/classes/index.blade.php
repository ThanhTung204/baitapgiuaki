<h2>Danh sách lớp</h2>
<a href="/classes/create">+ Thêm</a>
@foreach($classes as $c)
<p>{{ $c->name }}</p>
@endforeach
{{ $classes->links() }}

<?php $__env->startSection('content'); ?>

<h3 class="mb-4 fw-bold">📚 Quản lý sinh viên</h3>

<div class="card mb-3 p-3">
<div class="d-flex justify-content-between">

<input id="search" class="form-control w-50" placeholder="🔍 Tìm kiếm...">

<a href="<?php echo e(route('students.create')); ?>" class="btn btn-success">
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
<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td class="fw-semibold"><?php echo e($s->name); ?></td>
<td><?php echo e($s->email); ?></td>

<td>
<span class="badge bg-primary">
<?php echo e($s->class_name); ?>

</span>
</td>

<td>
<a href="<?php echo e(route('students.edit',$s->id)); ?>" class="btn btn-warning btn-sm">
✏️ Sửa
</a>

<form method="POST" action="<?php echo e(route('students.destroy',$s->id)); ?>" style="display:inline">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button class="btn btn-danger btn-sm">🗑 Xoá</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>

</table>

</div>
</div>

<div class="mt-3">
<?php echo e($students->links()); ?>

</div>

<script>
document.getElementById('search').addEventListener('keyup', function(){
let val = this.value.toLowerCase();
document.querySelectorAll('tbody tr').forEach(row=>{
row.style.display = row.innerText.toLowerCase().includes(val) ? '' : 'none';
});
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\qlsv\resources\views/students/index.blade.php ENDPATH**/ ?>
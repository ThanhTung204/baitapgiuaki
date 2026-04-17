<?php $__env->startSection('content'); ?>

<h3>➕ Thêm sinh viên</h3>

<div class="card p-3">
<form method="POST" action="<?php echo e(route('students.store')); ?>">
<?php echo csrf_field(); ?>

<input name="name" class="form-control mb-2" placeholder="Tên">
<input name="email" class="form-control mb-2" placeholder="Email">
<input name="class_name" class="form-control mb-2" placeholder="Lớp">

<button class="btn btn-success">Lưu</button>
</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\qlsv\resources\views/students/create.blade.php ENDPATH**/ ?>
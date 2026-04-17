<?php $__env->startSection('content'); ?>

<h3>✏️ Sửa sinh viên</h3>

<div class="card p-3">
<form method="POST" action="<?php echo e(route('students.update',$student->id)); ?>">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>

<input name="name" value="<?php echo e($student->name); ?>" class="form-control mb-2">
<input name="email" value="<?php echo e($student->email); ?>" class="form-control mb-2">
<input name="class_name" value="<?php echo e($student->class_name); ?>" class="form-control mb-2">

<button class="btn btn-primary">Cập nhật</button>
</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\qlsv\resources\views/students/edit.blade.php ENDPATH**/ ?>
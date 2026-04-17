<!DOCTYPE html>
<html>
<head>
    <title>Thêm sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Thêm sinh viên</h2>
    <form action="<?php echo e(route('students.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="student_name" class="form-control mb-2" placeholder="Tên sinh viên">
        <select name="classroom_id" class="form-control mb-2">
            <?php $__currentLoopData = $classrooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($class->id); ?>"><?php echo e($class->class_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <button class="btn btn-success">Lưu</button>
    </form>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\qlsv_api\resources\views/students/create.blade.php ENDPATH**/ ?>
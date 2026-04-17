<!DOCTYPE html>
<html>
<head>
    <title>Sửa sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Sửa sinh viên</h2>
    <form action="<?php echo e(route('students.update',$student->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input type="text" name="student_name" value="<?php echo e($student->student_name); ?>" class="form-control mb-2">
        <select name="classroom_id" class="form-control mb-2">
            <?php $__currentLoopData = $classrooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($class->id); ?>" <?php echo e($student->classroom_id == $class->id ? 'selected' : ''); ?>>
                <?php echo e($class->class_name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <button class="btn btn-primary">Cập nhật</button>
    </form>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\qlsv_api\resources\views/students/edit.blade.php ENDPATH**/ ?>
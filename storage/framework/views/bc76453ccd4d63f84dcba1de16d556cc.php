<h2>Danh sách lớp</h2>
<a href="/classes/create">+ Thêm</a>
<?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($c->name); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($classes->links()); ?>

<?php /**PATH C:\xampp\htdocs\qlsv\resources\views/classes/index.blade.php ENDPATH**/ ?>
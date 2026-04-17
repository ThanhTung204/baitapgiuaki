<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card shadow">
<div class="card-header text-center"><h4>Đăng nhập</h4></div>
<div class="card-body">
<form method="POST" action="/login">
<?php echo csrf_field(); ?>
<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>
<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<button class="btn btn-primary w-100">Đăng nhập</button>
</form>
<div class="text-center mt-3">
<a href="/register">Chưa có tài khoản?</a>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\qlsv\resources\views/auth/login.blade.php ENDPATH**/ ?>
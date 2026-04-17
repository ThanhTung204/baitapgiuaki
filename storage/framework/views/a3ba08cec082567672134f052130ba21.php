<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Quản lý sinh viên</h2>
    <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary mb-3">+ Thêm sinh viên</a>

    <form method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Tìm sinh viên..." value="<?php echo e(request('search')); ?>">
    </form>

    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Lớp</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr id="row-<?php echo e($sv->id); ?>">
                <td><?php echo e($sv->id); ?></td>
                <td><?php echo e($sv->student_name); ?></td>
                <td><?php echo e($sv->classroom->class_name ?? ''); ?></td>
                <td>
                    <a href="<?php echo e(route('students.edit',$sv->id)); ?>" class="btn btn-warning btn-sm">Sửa</a>
                    <button onclick="deleteStudent(<?php echo e($sv->id); ?>)" class="btn btn-danger btn-sm">Xóa</button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<script>
function deleteStudent(id){
    if(confirm('Xóa sinh viên này?')){
        fetch('/students/' + id, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                'Accept': 'application/json'
            }
        }).then(res => res.json()).then(data => {
            if(data.success){
                document.getElementById('row-' + id).remove();
            }
        });
    }
}
</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\qlsv_api\resources\views/students/index.blade.php ENDPATH**/ ?>
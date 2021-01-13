

<?php $__env->startSection('title', 'Mahasiswa'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Students</h1>
            <a href="/students/create" class="btn btn-primary my-3">Add Data</a>
            <?php if(session('status')): ?>
            <div class="alert alert-success">
            <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
                <ul class="list-group">
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo e($siswa->nama); ?>

                <a href="students/<?php echo e($siswa->id); ?>" class="btn btn-info">detail</a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\app_laravel\resources\views/students/index.blade.php ENDPATH**/ ?>
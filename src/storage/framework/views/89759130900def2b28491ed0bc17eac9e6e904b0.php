

<?php $__env->startSection('title', 'Detail Pegawai'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="mt-3">Detail Employee</h4>
            <div class="card">
            <div class="card-body">
            <h5 class="card-title"><?php echo e($employee->nama); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo e($employee->nik); ?></h6>
            <p class="card-text"><?php echo e($employee->email); ?></p>
            <p class="card-text"><?php echo e($employee->divisi); ?></p>
            <p class="card-text"><?php echo e($employee->alamat); ?></p>
            <form method="post" action="<?php echo e($employee->id); ?>" class="d-inline">
            <?php echo method_field('delete'); ?>
            <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="<?php echo e($employee->id); ?>/edit" class="btn btn-primary">Edit</a>
            <a href="#" class="card-link">kembali</a>
            </div>
            </div>    
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\app_laravel\resources\views/employees/show.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', 'Pegawai'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h4 class="mt-3">Full Time Employee List</h4>
            <a href="/employees/create" class="btn btn-primary my-3">Add Data</a>
            <?php if(session('status')): ?>
            <div class="alert alert-success">
            <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
            <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                <th scope="col">No</th>
                <th scope="col">NAME</th>
                <th scope="col">NIP</th>
                <th scope="col">EMAIL</th>
                <th scope="col">DIVISI</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">ACTION</th>
                </tr>
                </thead>
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><?php echo e($pegawai->nama); ?></td>
                <td><?php echo e($pegawai->nik); ?></td>
                <td><?php echo e($pegawai->email); ?></td>
                <td><?php echo e($pegawai->divisi); ?></td>
                <td><?php echo e($pegawai->alamat); ?></td>
                <td>
                    <a href="employees/<?php echo e($pegawai->id); ?>" class="btn btn-success">show</a>               
                </td>
                </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php echo e($employees->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\app_laravel\resources\views/employees/index.blade.php ENDPATH**/ ?>
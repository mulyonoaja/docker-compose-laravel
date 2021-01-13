

<?php $__env->startSection('title', 'Mahasiswa'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">NAMA</th>
                <th scope="col">NRP</th>
                <th scope="col">EMAIL</th>
                <th scope="col">JURUSAN</th>
                <th scope="col">ACTION</th>
                </tr>
                </thead>
                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td><?php echo e($mhs->nama); ?></td>
                <td><?php echo e($mhs->nrp); ?></td>
                <td><?php echo e($mhs->email); ?></td>
                <td><?php echo e($mhs->jurusan); ?></td>
                <td>
                    <a href="" class="btn btn-success">edit</a> 
                    <a href="" class="btn btn-danger">delete</a>               
                </td>
                </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\app_laravel\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>
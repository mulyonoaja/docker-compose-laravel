

<?php $__env->startSection('title', 'Student'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Edit Data Students</h1>
            <form method="post" action="/students/<?php echo e($student->id); ?>">
            <?php echo method_field('patch'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama" placeholder="Masukan Nama" name="nama" value="<?php echo e($student->nama); ?>">
            <label class="invalid-feedback">Nama masih kosong</label>
            </div>
            <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control <?php $__errorArgs = ['nrp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nrp" placeholder="Masukan NRP" name="nrp" value="<?php echo e($student->nrp); ?>">
            <label class="invalid-feedback">NRP masih kosong</label>
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" placeholder="Masukan email" name="email" value="<?php echo e($student->email); ?>">
            <label class="invalid-feedback">Email masih kosong</label>
            </div>
            <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jurusan" placeholder="Masukan jurusan" name="jurusan" value="<?php echo e($student->jurusan); ?>">
            <label class="invalid-feedback">Jurusan masih kosong</label>
            </div>
            <button type="submit" class="btn btn-primary my-3">Update</button>
            <button type="reset" class="btn btn-danger my-3">Reset</button>
            </form>
               
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\app_laravel\resources\views/students/edit.blade.php ENDPATH**/ ?>
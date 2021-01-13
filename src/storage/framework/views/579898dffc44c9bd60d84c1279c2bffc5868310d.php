

<?php $__env->startSection('title', 'Edit Data Pegawai'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Edit Data Pegawai</h1>
            <form method="post" action="/employees/<?php echo e($employee->id); ?>">
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
unset($__errorArgs, $__bag); ?>" id="nama" placeholder="Masukan Nama" name="nama" value="<?php echo e($employee->nama); ?>">
            <label class="invalid-feedback">Nama masih kosong</label>
            </div>
            <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nik" placeholder="Masukan nik" name="nik" value="<?php echo e($employee->nik); ?>">
            <label class="invalid-feedback">nik masih kosong</label>
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
unset($__errorArgs, $__bag); ?>" id="email" placeholder="Masukan email" name="email" value="<?php echo e($employee->email); ?>">
            <label class="invalid-feedback">Email masih kosong</label>
            </div>
            <div class="form-group">
            <label for="divisi">Divisi</label>
            <input type="text" class="form-control <?php $__errorArgs = ['divisi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="divisi" placeholder="Masukan divisi" name="divisi" value="<?php echo e($employee->divisi); ?>">
            <label class="invalid-feedback">divisi masih kosong</label>
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="alamat" placeholder="Masukan alamat" name="alamat" value="<?php echo e($employee->alamat); ?>">
            <label class="invalid-feedback">alamat masih kosong</label>
            </div>
            <button type="submit" class="btn btn-primary my-3">Update</button>
            <button type="reset" class="btn btn-danger my-3">Reset</button>
            </form>
               
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\app_laravel\resources\views/employees/edit.blade.php ENDPATH**/ ?>
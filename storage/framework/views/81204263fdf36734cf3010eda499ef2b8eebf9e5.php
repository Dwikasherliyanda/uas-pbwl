

<?php $__env->startSection('content'); ?>
<div class="container w-50">
    <div class="card p-5" style="background-color:#ff3385;">
        <form method="post" action="<?php echo e(url('decorations/update/')); ?>/<?php echo e($data->id_decor); ?>">
            <?php echo csrf_field(); ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Paket</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Paket" name="nama_decor" value="<?php echo e($data->nama_decor); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Keterangan" name="ket_decor" value="<?php echo e($data->ket_decor); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Rp." name="harga_decor" value="<?php echo e($data->harga_decor); ?>" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Simpan Perubahan</button>
        </form>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_dwika\resources\views/decorations/edit.blade.php ENDPATH**/ ?>
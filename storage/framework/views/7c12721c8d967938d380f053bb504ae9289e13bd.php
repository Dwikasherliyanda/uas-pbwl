

<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(url('/decorations/create')); ?>" class="btn btn-success float-end mb-3">Tambah Paket</a>
    <table class="table">
        <thead class="table table-danger">
            <tr class="text-center">
                <th>ID</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $decoration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-center">
                <td><?php echo e($decoration->id_decor); ?></td>
                <td><?php echo e($decoration->nama_decor); ?></td>
                <td>Rp. <?php echo e($decoration->harga_decor); ?></td>
                <td><?php echo e($decoration->ket_decor); ?></td>
                <td width="100px"><a href="<?php echo e(url('decorations/edit')); ?>/<?php echo e($decoration->id_decor); ?>" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="<?php echo e(url('decorations/destroy')); ?>/<?php echo e($decoration->id_decor); ?>" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Paket Ini ?');">Hapus</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_dwika\resources\views/decorations/index.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
<div class="card mt-5">
  <h2 class="card-header">Daftar Kontak</h2>
  <div class="card-body">
          
        <?php if(session('success')): ?>
            <div class="alert alert-success" role="alert"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="<?php echo e(route('datakontak.create')); ?>"> <i class="fa fa-plus"></i> Buat Kontak Baru</a>
        </div>
  
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th width="30px">No</th>
                    <th width="200px">Nama</th>
                    <th>Nomor</th>
                    <th>Email</th>
                    <th width="100px">Asal Kota</th>
                    <th>Instansi</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            <?php if($kontaks->isEmpty()): ?>
                <tr>
                    <td colspan="7">There are no data.</td>
                </tr>
            <?php else: ?>
                <?php $__currentLoopData = $kontaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($kontak->name); ?></td>
                        <td><?php echo e($kontak->phone); ?></td>
                        <td><?php echo e($kontak->email); ?></td>
                        <td><?php echo e($kontak->city); ?></td>
                        <td><?php echo e($kontak->work_info); ?></td>
                        <td>
                            <form action="<?php echo e(route('datakontak.destroy', $kontak->id)); ?>" method="POST" style="display:inline;">
                                <a class="btn btn-info btn-sm" href="<?php echo e(route('datakontak.show', $kontak->id)); ?>"><i class="fa-solid fa-list"></i> Show</a>
                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('datakontak.edit', $kontak->id)); ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?');"><i class="fa-solid fa-trash"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </tbody>
        </table>
        <?php echo $kontaks->links(); ?>

  </div>
</div>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('datakontak.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kevir\Desktop\coba laravel\m4basdat\resources\views/datakontak/index.blade.php ENDPATH**/ ?>
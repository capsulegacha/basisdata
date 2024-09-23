
<?php $__env->startSection('content'); ?>
<div class="card mt-5">
  <h2 class="card-header">Daftar Kontak</h2>
  <div class="card-body">
          
        <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
            <div class="alert alert-success" role="alert"> <?php echo e($value); ?> </div>
        <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
  
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="<?php echo e(route('kontak.create')); ?>"> <i class="fa fa-plus"></i> Buat Kontak Baru</a>
        </div>
  
        <table class="table table-borderedS mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Email</th>
                    <th>Asal Kota</th>
                    <th>Pekerjaan</th>
                    <th width="200px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td><?php echo e($kontak->name); ?></td>
                    <td><?php echo e($kontak->phone); ?></td>
                    <td><?php echo e($kontak->email); ?></td>
                    <td><?php echo e($kontak->city); ?></td>
                    <td><?php echo e($kontak->work_info); ?></td>
                    <td>
                        <form action="<?php echo e(route('kontak.destroy',$kontak->id)); ?>" method="POST">
                            <a class="btn btn-info btn-sm" href="<?php echo e(route('kontak.show',$kontak->id)); ?>"><i class="fa-solid fa-list"></i> Show</a>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('kontak.edit',$kontak->id)); ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
        <?php echo $kontak->links(); ?>

  </div>
</div>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('kontak.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kevir\Desktop\coba laravel\m4basdat\resources\views/kontak/index.blade.php ENDPATH**/ ?>
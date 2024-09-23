

<?php $__env->startSection('content'); ?>

<div class="card mt-5">
    <h2 class="card-header">Daftar Kontak</h2>
    <div class="card-body">
    
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="<?php echo e(route('datakontak.index')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong> <br/>
                    <?php echo e($kontak->name); ?>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nomor Telepon:</strong> <br/>
                    <?php echo e($kontak->phone); ?>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Email:</strong> <br/> 
                    <?php echo e($kontak->email); ?>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Asal Kota:</strong> <br/> 
                    <?php echo e($kontak->city); ?>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Instansi:</strong> <br/>
                    <?php echo e($kontak->work_info); ?>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Details:</strong> <br/>
                    <?php echo e($kontak->detail); ?>

                </div>
            </div>
        </div>
  
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('datakontak.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kevir\Desktop\coba laravel\m4basdat\resources\views/datakontak/show.blade.php ENDPATH**/ ?>
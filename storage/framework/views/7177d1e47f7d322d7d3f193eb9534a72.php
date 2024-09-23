

<?php $__env->startSection('content'); ?>

<div class="card mt-5">
    <h2 class="card-header">Tambahkan Kontak</h2>
    <div class="card-body">
    
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="<?php echo e(route('datakontak.index')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    
        <form action="<?php echo e(route('datakontak.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
    
            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    id="inputName" 
                    placeholder="Name">
                
            </div>

            <div class="mb-3">
                <label for="inputPhone" class="form-label"><strong>Phone:</strong></label>
                <input 
                    type="text" 
                    name="phone" 
                    class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    id="inputPhone" 
                    placeholder="Phone">
                
            </div>

            <div class="mb-3">
                <label for="inputEmail" class="form-label"><strong>Email:</strong></label>
                <input 
                    type="email" 
                    name="email" 
                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    id="inputEmail" 
                    placeholder="Email">
                
            </div>

            <div class="mb-3">
                <label for="inputCity" class="form-label"><strong>City:</strong></label>
                <input 
                    type="text" 
                    name="city" 
                    class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    id="inputCity" 
                    placeholder="City">
                
            </div>

            <div class="mb-3">
                <label for="inputWorkInfo" class="form-label"><strong>Work Info:</strong></label>
                <textarea 
                    class="form-control <?php $__errorArgs = ['work_info'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    style="height:150px" 
                    name="work_info" 
                    id="inputWorkInfo" 
                    placeholder="Work Info"></textarea>
                
            </div>

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>
  
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('datakontak.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kevir\Desktop\coba laravel\m4basdat\resources\views/datakontak/create.blade.php ENDPATH**/ ?>
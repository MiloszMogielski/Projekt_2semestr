<?php $__env->startSection('content'); ?>
<div class="container" >
<div class="createForm">
<form action="/podcast" enctype="multipart/form-data" method="post" >
    <?php echo csrf_field(); ?>

    <div class=row >
        <div class="col-8 offset-2" >
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Podcast Name</label>

                <div class="col-md-6">
                    <input id="name"
                    type="text"
                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="name"
                    value="<?php echo e(old('name')); ?>"
                    required
                    autocomplete="name"
                    autofocus>

                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
    </div>

    <div class=row>
        <div class="col-8 offset-2">
            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                <div class="col-md-6">
                    <input id="description"
                    type="text"
                    class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="description"
                    value="<?php echo e(old('description')); ?>"
                    required
                    autocomplete="description"
                    autofocus>

                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
    </div>

    <div class=row>
        <div class="col-8 offset-2">
            <div class="row mb-3">
                <label for="yearOfRelease" class="col-md-4 col-form-label text-md-end">Year of release</label>

                <div class="col-md-6">
                    <input id="yearOfRelease"
                    type="text"
                    class="form-control <?php $__errorArgs = ['yearOfRelease'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="yearOfRelease"
                    value="<?php echo e(old('yearOfRelease')); ?>"
                    required
                    autocomplete="yearOfRelease"
                    autofocus>
    
                    <?php $__errorArgs = ['yearOfRelease'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-8 offset-2">
            <div class="row mb-3">
        <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
        <div class="col-md-6">
        <input type="file" class="form-controll-file" id="image" name="image">
        </div>
        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <strong><?php echo e($message); ?></strong>    
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        </div>
    </div>

    <div class="row pt-4 col-4" style="margin: auto;">
        <button class="btn btn-primary" style="background-color: black; color: #02996c; border: none">Add new podcast</button>
    </div>
</form>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\podcastHub\resources\views/podcast/create.blade.php ENDPATH**/ ?>
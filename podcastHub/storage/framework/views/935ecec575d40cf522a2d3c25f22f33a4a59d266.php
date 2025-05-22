<?php $__env->startSection('content'); ?>
<div class="container" style="width: 50%">
<h1 class="mypodcastUser"><?php echo e($user->username); ?> 's podcast</h1>

<?php $__currentLoopData = $user->podcast; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $podcast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row m-5" style="border-radius: 10px; background-color: #02996c; color: black;">
            <div class="col-md-6 image-container">
                <img src="/storage/<?php echo e($podcast->image); ?>" alt="<?php echo e($podcast->name); ?>" class="w-100">
               
            </div>
            <div class="col-md-8 row bottomContent">
                <div class="col-md-7 description">
                    <p class="mt-3 fs-1 fw-bold"><?php echo e($podcast->name); ?></p>
                    <p class="mt-5 fs-5 ">Opis: <?php echo e($podcast->description); ?></p>
                </div>
                <div class="col-md-5">
                    <div class="bootomRating">
                        <p class="mt-3 fs-5">Rok wydania: <?php echo e($podcast->yearOfRelease); ?></p>
                    
                    
                    <div class="editContent">
                    <a href="/my-podcast/<?php echo e($podcast->id); ?>/edit" class="delButton">Edit</a>

                    <form action="/my-podcast/<?php echo e($podcast->id); ?>/delete" method="post" class="delButton">
                        <?php echo csrf_field(); ?>
                        <button type="submit">Delete</button>
                    </form>
                    </div>
                    </div>  
                   
                </div>
            </div>
        </div>

   

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\podcastHub\resources\views/podcast/my-podcasts.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="container" style="width: 50%">

    <!-- Search bar -->
    <div class="search-container" style="display: flex; justify-content: center; align-items: center;  border-radius: 8px;">
        <form action="/" method="get" style="display: flex; align-items: center; width: 100%; max-width: 500px; border-radius: 30px; padding: 5px 15px;">
            <input type="text" class="search-input" name="search" placeholder="Search for podcasts..." style="border: none; outline: none; flex-grow: 1; padding: 10px; border-radius: 25px; font-size: 16px;"/>
            <button type="submit" class="search-button" style="background-color: #02996c; color: white; border: none; padding: 10px 15px; border-radius: 25px; margin-left: 10px; cursor: pointer; font-size: 16px;">Search</button>
        </form>
    </div>

    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Loop through podcasts -->
    <?php $__currentLoopData = $podcasts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $podcast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row m-5 podcast-item" data-podcast-id="<?php echo e($podcast->id); ?>" style="border-radius: 10px; background-color: #02996c; color: black;">
            
            <!-- Show Hide Button only if podcast is not by current user and user is logged in -->
            <?php if(auth()->check() && $podcast->user_id !== auth()->user()->id): ?>
                <div class="col-md-12" style="text-align: right;">
                    <button class="btn btn-danger hide-podcast-btn" style="margin-top: 10px; font-size: 14px; padding: 5px 15px; border-radius: 25px;">Ukryj Podcast</button>
                </div>
            <?php endif; ?>

            <div class="col-md-6 image-container">
                <img src="/storage/<?php echo e($podcast->image); ?>" alt="<?php echo e($podcast->name); ?>" class="w-100" style="border-radius: 10px;">
            </div>
            <div class="col-md-8 row bottomContent">
                <div class="col-md-7 description">
                    <p class="mt-3 fs-1 fw-bold"><?php echo e($podcast->name); ?></p>
                    <p class="mt-5 fs-5">Opis: <?php echo e($podcast->description); ?></p>
                </div>
                <div class="col-md-5">
                   <div class="bootomRating">
                       <p class="mt-3 fs-5">Rok wydania: <?php echo e($podcast->yearOfRelease); ?></p>
                       <p class="mt-3 fs-5">Średnia ocena: 
                           <?php
                               $rating = $ratings[$podcast->id] ?? null;
                               $roundedRating = round($rating); 
                           ?>
                           <?php if($rating): ?>
                               <?php for($i = 1; $i <= 5; $i++): ?>
                                   <?php if($i <= $roundedRating): ?>
                                       <i class="fas fa-star" style="color: #ffc107;"></i>
                                   <?php else: ?>
                                       <i class="fas fa-star"></i>
                                   <?php endif; ?>
                               <?php endfor; ?>
                           <?php else: ?>
                               Brak ocen
                           <?php endif; ?>
                       </p>
                   </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="paginator">
        <?php echo e($podcasts->links()); ?>

    </div>

</div>

<!-- jQuery for Ajax -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Ustawienie CSRF tokenu w nagłówkach AJAX dla wszystkich żądań
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $('.hide-podcast-btn').on('click', function() {
        var podcastId = $(this).closest('.podcast-item').data('podcast-id');
        
        console.log('Podcast ID:', podcastId);
        
        $.ajax({
            url: '/hide-podcast', 
            type: 'POST',
            data: {
                podcast_id: podcastId
            },
            success: function(response) {
                if (response.success) {
                    $('.podcast-item[data-podcast-id="' + podcastId + '"]').fadeOut();
                } else {
                    alert('Failed to hide podcast!');
                }
            },
            error: function(xhr, status, error) {
                console.error("Ajax Error:", error);
                alert('Something went wrong. Please try again.');
            }
        });
    });
});

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\podcastHub\resources\views/home.blade.php ENDPATH**/ ?>
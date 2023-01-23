
<?php $__env->startSection('title'); ?> 404 NOT FOUND
<?php $__env->stopSection(); ?>
    <section class="home-section home-parallax home-fade home-full-height bg-dark bg-dark-30" id="home" data-background="<?php echo e(assets('images/404notfoundimage.jpg')); ?>">
        <div class="titan-caption">
            <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-4">Error 404</div>
                <div class="font-alt">The requested URL was not found on this server.<br/>That is all we know.
                </div>
                <div class="font-alt mt-30"><a class="btn btn-border-w btn-round" href="<?php echo e(url('home')); ?>">Back to home page</a></div>
            </div>
        </div>
    </section>
<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('foot'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MVC\resources\views/_404Page.blade.php ENDPATH**/ ?>
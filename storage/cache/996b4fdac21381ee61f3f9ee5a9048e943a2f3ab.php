<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AY MEDYA | <?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->make('adminView.static.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
   <?php echo $__env->make('adminView.static.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('adminView.static.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!--content-->
   <div class="content">


   <?php echo $__env->yieldContent('content'); ?>







   </div>

<?php echo $__env->yieldContent('foot'); ?>
<?php echo $__env->make('adminView.static.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\MVC\resources\views/adminView/default.blade.php ENDPATH**/ ?>
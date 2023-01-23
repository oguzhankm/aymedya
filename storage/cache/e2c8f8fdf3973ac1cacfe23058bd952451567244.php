<!DOCTYPE html>
<html lang="tr-TR" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
    -->
    <title>AY MEDYA | <?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->make('static.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">

<main>
    <div class="page-loader">
        <div class="loader">Yükleniyor...</div>
    </div>
    <?php echo $__env->yieldContent('navbar'); ?>
    <?php echo $__env->make('static.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('homesection'); ?>


    <div class="main">
        <?php echo $__env->yieldContent('content'); ?>







        <?php echo $__env->yieldContent('footer'); ?>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>
<!--
JavaScripts
=============================================
-->
<?php echo $__env->yieldContent('foot'); ?>
<?php echo $__env->make('static.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\MVC\resources\views/layouts/default.blade.php ENDPATH**/ ?>
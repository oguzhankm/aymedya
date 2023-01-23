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
    <?php echo $__env->yieldContent('content'); ?>
    <div class="main">







        <!-- FOOTER  -->
        <div class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">About Titan</h5>
                            <p>The languages only differ in their grammar, their pronunciation and their most common
                                words.</p>
                            <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                            <p>Email:<a href="#">somecompany@example.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Recent Comments</h5>
                            <ul class="icon-list">
                                <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                                <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                                <li>Andy on <a href="#">Eco bag Mockup</a></li>
                                <li>Jack on <a href="#">Bottle Mockup</a></li>
                                <li>Mark on <a href="#">Our trip to the Alps</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Blog Categories</h5>
                            <ul class="icon-list">
                                <li><a href="#">Photography - 7</a></li>
                                <li><a href="#">Web Design - 3</a></li>
                                <li><a href="#">Illustration - 12</a></li>
                                <li><a href="#">Marketing - 1</a></li>
                                <li><a href="#">Wordpress - 16</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Popular Posts</h5>
                            <ul class="widget-posts">
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="<?php echo e(assets('images/rp-1.jpg')); ?>"
                                                                                     alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                                        <div class="widget-posts-meta">23 january</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="<?php echo e(assets('images/rp-2.jpg')); ?>"
                                                                                     alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a>
                                        </div>
                                        <div class="widget-posts-meta">15 February</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider-d">
        <?php echo $__env->yieldContent('footer'); ?>
        <?php echo $__env->make('static.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
</html><?php /**PATH C:\xampp\htdocs\MVC\resources\views/default.blade.php ENDPATH**/ ?>
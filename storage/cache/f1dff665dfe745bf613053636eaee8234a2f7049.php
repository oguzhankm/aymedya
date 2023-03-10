
<?php $__env->startSection('title'); ?>
    Soru-Cevap
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('static.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="module bg-dark-60 faq-page-header" data-background="<?php echo e(assets('images/faq-bg2.jpg')); ?>">
        <div class="container">.
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">SORU & CEVAP</h2>
                    <div class="module-subtitle font-serif">Çekim Mekanları, Çekim aşamaları & Çekim sonrası, Ödeme ve Rezervasyon ve tüm merak ettikleriniz.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="module">
        <div class="container">
            <div class="row mb-60">
                <div class="col-sm-8 col-sm-offset-2">
                    <form role="form">
                        <div class="search-box">
                            <input class="form-control" type="text" placeholder="Search..."/>
                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs font-alt" role="tablist">
                            <li class="active"><a href="#support" data-toggle="tab"><span class="icon-tools-2"></span>support</a>
                            </li>
                            <li><a href="#sales" data-toggle="tab"><span class="icon-tools-2"></span>sales</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="support">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title font-alt"><a data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#support1">Support Question 1</a>
                                            </h4>
                                        </div>
                                        <div class="panel-collapse collapse in" id="support1">
                                            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod
                                                high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                squid single-origin coffee nulla assumenda shoreditch et.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse"
                                                                                data-parent="#accordion"
                                                                                href="#support2">Support Question 2</a>
                                            </h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="support2">
                                            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod
                                                high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                squid single-origin coffee nulla assumenda shoreditch et.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="sales">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title font-alt"><a data-toggle="collapse"
                                                                                data-parent="#accordion" href="#sales1">Sales
                                                    Question 1</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse in" id="sales1">
                                            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod
                                                high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                squid single-origin coffee nulla assumenda shoreditch et.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse"
                                                                                data-parent="#accordion" href="#sales2">Sales
                                                    Question 2</a></h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="sales2">
                                            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod
                                                high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                                                laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                                squid single-origin coffee nulla assumenda shoreditch et.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('foot'); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MVC\resources\views/SSS.blade.php ENDPATH**/ ?>
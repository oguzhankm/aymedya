
<?php $__env->startSection('title'); ?>
    ANASAYFA
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="box-">
        <h1>
            Settings
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">

        <div class="col-sm-8">
            <form id="settingsForm" role="form" method="post" action="">
                <div class="form-group">
                    <label for="websitename">Name</label>
                    <input class="form-control" type="text" id="websitename" name="websitename" placeholder="Site Adı"/>
                </div>
                <div class="form-group">
                    <label for="title">Site Title</label>
                    <input class="form-control" type="text" id="title" name="title"
                           placeholder="Site Title"/>
                </div>
                <div class="form-group">
                    <label for="description">Site Description</label>
                    <input class="form-control" type="text" id="description" name="description"
                           placeholder="Site Description"/>
                </div>
                <div class="form-group">
                    <label for="keywords">Site Keywords</label>
                    <input class="form-control" type="text" id="keywords" name="keywords"
                           placeholder="Site Keywords"/>
                </div>
                <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">GÖNDER
                    </button>
                </div>
            </form>
            <div class="ajax-response" id="settingsFormResponse"></div>
        </div>
    </div>




    
    
    
    
    
    
    
    


    
    
    
    
    
    

    
    
    
    
    
    

    
    
    
    
    
    
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminView.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MVC\resources\views/adminView/static/settings.blade.php ENDPATH**/ ?>
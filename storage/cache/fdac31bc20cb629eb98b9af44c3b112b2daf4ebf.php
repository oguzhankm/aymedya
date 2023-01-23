<!--Navbar -->
<?php if(\Kodlazim\Core\Route::get('/', function (){
    return view('home');
}) == false): ?>
    <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <?php else: ?>
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <?php endif; ?>
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse"
                                data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span
                                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo e(url('index')); ?>">AY MEDYA | PHOTOGRAPHY</a>
                    </div>
                    <div class="collapse navbar-collapse" id="custom-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown"><a href="<?php echo e(url('home')); ?>">ANASAYFA</a></li>
                            <li class="dropdown"><a href="<?php echo e(url('shooting')); ?>">ÇEKİM MEKANLARI</a></li>
                            <li class="dropdown"><a href="<?php echo e(url('reservation')); ?>">REZERVASYON</a></li>
                            <li class="dropdown"><a href="<?php echo e(url('about')); ?>">HAKKIMIZDA</a></li>
                            <li class="dropdown"><a href="<?php echo e(url('contact')); ?>">İLETİŞİM</a>
                            </li>
                            <!--li.dropdown.navbar-cart-->
                            <!--    a.dropdown-toggle(href='#', data-toggle='dropdown')-->
                            <!--        span.icon-basket-->
                            <!--        |-->
                            <!--        span.cart-item-number 2-->
                            <!--    ul.dropdown-menu.cart-list(role='menu')-->
                            <!--        li-->
                            <!--            .navbar-cart-item.clearfix-->
                            <!--                .navbar-cart-img-->
                            <!--                    a(href='#')-->
                            <!--                        img(src='assets/images/shop/product-9.jpg', alt='')-->
                            <!--                .navbar-cart-title-->
                            <!--                    a(href='#') Short striped sweater-->
                            <!--                    |-->
                            <!--                    span.cart-amount 2 &times; $119.00-->
                            <!--                    br-->
                            <!--                    |-->
                            <!--                    strong.cart-amount $238.00-->
                            <!--        li-->
                            <!--            .navbar-cart-item.clearfix-->
                            <!--                .navbar-cart-img-->
                            <!--                    a(href='#')-->
                            <!--                        img(src='assets/images/shop/product-10.jpg', alt='')-->
                            <!--                .navbar-cart-title-->
                            <!--                    a(href='#') Colored jewel rings-->
                            <!--                    |-->
                            <!--                    span.cart-amount 2 &times; $119.00-->
                            <!--                    br-->
                            <!--                    |-->
                            <!--                    strong.cart-amount $238.00-->
                            <!--        li-->
                            <!--            .clearfix-->
                            <!--                .cart-sub-totle-->
                            <!--                    strong Total: $476.00-->
                            <!--        li-->
                            <!--            .clearfix-->
                            <!--                a.btn.btn-block.btn-round.btn-font-w(type='submit') Checkout-->
                            <!--li.dropdown-->
                            <!--    a.dropdown-toggle(href='#', data-toggle='dropdown') Search-->
                            <!--    ul.dropdown-menu(role='menu')-->
                            <!--        li-->
                            <!--            .dropdown-search-->
                            <!--                form(role='form')-->
                            <!--                    input.form-control(type='text', placeholder='Search...')-->
                            <!--                    |-->
                            <!--                    button.search-btn(type='submit')-->
                            <!--                        i.fa.fa-search-->
                        </ul>
                    </div>
                </div>
            </nav><?php /**PATH C:\xampp\htdocs\MVC\resources\views/static/navbar.blade.php ENDPATH**/ ?>
<!-- Slider -->
@yield('homesection')
<section class="home-section home-full-height photography-page" id="home">
    <div class="hero-slider">
        <ul class="slides">
            <li class="bg-dark" style="background-image: url({{assets('images/photography/image8.jpg')}})">
                <div class="container">
                    <div class="image-caption">
                        <div class="font-alt caption-text">Life in lake</div>
                    </div>
                </div>
            </li>
            <li class="bg-dark" style="background-image:url({{assets('images/photography/image9.jpg')}});">
                <div class="container">
                    <div class="image-caption">
                        <div class="font-alt caption-text">Image 1 caption</div>
                    </div>
                </div>
            </li>
            <li class="bg-dark" style="background-image:url({{assets('images/photography/image10.jpg')}});">
                <div class="container">
                    <div class="image-caption">
                        <div class="font-alt caption-text">Image 2 caption</div>
                    </div>
                </div>
            </li>
            <li class="bg-dark" style="background-image:url({{assets('images/photography/image3.jpg')}});">
                <div class="container">
                    <div class="image-caption">
                        <div class="font-alt caption-text">Image 3 caption</div>
                    </div>
                </div>
            </li>
            <li class="bg-dark" style="background-image:{{assets('images/photography/image4.jpg')}};">
                <div class="container">
                    <div class="image-caption">
                        <div class="font-alt caption-text">Image 4 caption</div>
                    </div>
                </div>
            </li>
            <li class="bg-dark" style="background-image:url(&quot;assets/images/photography/image5.jpg&quot;);">
                <div class="container">
                    <div class="image-caption">
                        <div class="font-alt caption-text">Image 5 caption</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
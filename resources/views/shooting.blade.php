@extends('layouts.default')

@section('title')
    Çekim Mekanları
@endsection

@section('content')

    <section class="module bg-dark-60 about-page-header" data-background="{{assets('images/cekimmekanlari1.jpg')}}"
             style="background-image: url({{assets('images/cekimmekanlari1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">ÇEKİM MEKANLARI</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row list-page mb-15">
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/PLATO.jpg')}}"
                                     title="PLATO" alt="PLATO" height="400" width="100%">
                            <figcaption>PLATO</figcaption>
                        </figure>
                        <span class="title text-center p-3 font-serif"> Plato </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/Sahil.jpg')}}"
                                     title="Sahil" alt="Sahil" height="400" width="100%">
                            <figcaption>Sahil</figcaption>
                        </figure>
                        <span class="title text-center p-3 font-serif"> Sahil </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/TARLA.jpg')}}"
                                     title="Riva Tarla" alt="Riva Tarla" height="400" width="100%">
                            <figcaption>Riva Tarla</figcaption>
                        </figure>
                        <span class="title text-center p-3 font-serif"> Riva Tarla </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('/images/thumbs/AdileSultanKasri.jpg')}}"
                                     title="Adile Sultan Kasrı" alt="Adile Sultan Kasrı" height="400" width="100%">
                            <figcaption>Adile Sultan Kasrı</figcaption>
                        </figure>
                        <span class="title text-center p-3"> Adile Sultan Kasrı </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/KucuksuKasri.jpg')}}"
                                     title="Küçüksu Kasrı" alt="Küçüksu Kasrı" height="400" width="100%">
                            <figcaption>Küçüksu Kasrı</figcaption>
                        </figure>
                        <span class="title text-center p-3 font-serif"> Küçüksu Kasrı </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/SaitHalimPasaYalisi.jpg')}}"
                                     title="Sait Halim Paşa Yalısı" alt="Sait Halim Paşa Yalısı" height="400"
                                     width="100%">
                            <figcaption>Sait Halim Paşa Yalısı</figcaption>
                        </figure>
                        <span class="title text-center p-3 font-serif"> Sait Halim Paşa Yalısı </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/AtaturkArboretum.jpg')}}"
                                     title="Atatürk Arboretum" alt="Atatürk Arboretum" height="400" width="100%">
                            <figcaption>Atatürk Arboretum</figcaption>
                        </figure>
                        <span class="title text-center p-3 font-serif"> Atatürk Arboretum </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/Kapadokya.jpg')}}"
                                     title="Kapadokya" alt="Kapadokya" height="400" width="100%">
                            <figcaption>Kapadokya</figcaption>
                        </figure>
                        <span class="title text-center p-3 font-serif"> Kapadokya </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/SaldaGolu.jpg')}}"
                                     title="Salda Gölü" alt="Salda Gölü" height="400" width="100%">
                            <figcaption>Salda Gölü</figcaption>
                        </figure>
                        <span class="title text-center p-3"> Salda Gölü </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/CamlicaKorusu.jpg')}}"
                                     title="Çamlıca Korusu" alt="Çamlıca Korusu" height="400" width="100%">
                            <figcaption>Çamlıca Korusu</figcaption>
                        </figure>
                        <span class="title text-center p-3 font-serif"> Çamlıca Korusu </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/BelgradOrmani.jpg')}}"
                                     title="Belgrad Ormanı" alt="Belgrad Ormanı" height="400" width="100%">
                            <figcaption>Belgrad Ormanı</figcaption>
                        </figure>
                        <span class="title text-center p-3 font-serif"> Belgrad Ormanı </span> </a></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                <div class="item"><a href="#">
                        <figure><img loading="lazy"
                                     src="{{assets('images/thumbs/Sutunlar.jpg')}}"
                                     title="Diğer Mekanlar" alt="Diğer Mekanlar" height="400" width="100%">
                            <figcaption>Diğer Mekanlar</figcaption>
                        </figure>
                        <span class="title text-center p-3 font-serif"> Diğer Mekanlar </span> </a></div>
            </div>
        </div>
    </div>



    @section('footer')
        @include('static.footer')
    @endsection

@endsection




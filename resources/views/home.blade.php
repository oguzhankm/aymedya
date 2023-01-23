@extends('layouts.default')
@section('title')
    PHOTOGRAPHY
@endsection
@section('homesection')
    @include('componenents.slider')
@endsection
@section('content')

    <!-- EN GÜZEL ANLAR BAŞLANGIC -->
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">En Güzel Anlar</h2>
                    <div class="module-subtitle font-serif">Tümünü Gör</div>
                </div>
            </div>
            <div class="row multi-columns-row">

                <div class="col-sm-6 col-md-3 col-lg-3">

                    <div class="gallery-item">
                        <div class="gallery-image"><a class="gallery" href="{{assets('images/gallery/big/big_18.jpg')}}"
                                                      title="Title 1"><img
                                        src="{{assets('images/gallery/thumbnail/full_4/18.jpg')}}"
                                        alt="Gallery Image 1">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                                </div>

                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="gallery-item">
                        <div class="gallery-image"><a class="gallery" href="{{assets('images/gallery/big/big_34.jpg')}}"
                                                      title="Title 2"><img
                                        src="{{assets('images/gallery/thumbnail/full_4/34.jpg')}}"
                                        alt="Gallery Image 2">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="gallery-item">
                        <div class="gallery-image"><a class="gallery" href="{{assets('images/gallery/big/big_30.jpg')}}"
                                                      title="Title 3"><img
                                        src="{{assets('images/gallery/thumbnail/full_4/30.jpg')}}"
                                        alt="Gallery Image 3">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="gallery-item">
                        <div class="gallery-image"><a class="gallery" href="{{assets('images/gallery/big/big_2.jpg')}}"
                                                      title="Title 4"><img
                                        src="{{assets('images/gallery/thumbnail/full_4/2.jpg')}}" alt="Gallery Image 4">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="gallery-item">
                        <div class="gallery-image"><a class="gallery" href="{{assets('images/gallery/big/big_32.jpg')}}"
                                                      title="Title 5"><img
                                        src="{{assets('images/gallery/thumbnail/full_4/32.jpg')}}"
                                        alt="Gallery Image 5">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="gallery-item">
                        <div class="gallery-image"><a class="gallery" href="{{assets('images/gallery/big/big_20.jpg')}}"
                                                      title="Title 6"><img
                                        src="{{assets('images/gallery/thumbnail/full_4/20.jpg')}}"
                                        alt="Gallery Image 6">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="gallery-item">
                        <div class="gallery-image"><a class="gallery" href="{{assets('images/gallery/big/big_38.jpg')}}"
                                                      title="Title 7"><img
                                        src="{{assets('images/gallery/thumbnail/full_4/38.jpg')}}"
                                        alt="Gallery Image 7">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="gallery-item">
                        <div class="gallery-image"><a class="gallery" href="{{assets('images/gallery/big/big_39.jpg')}}"
                                                      title="Title 8"><img
                                        src="{{assets('images/gallery/thumbnail/full_4/39.jpg')}}"
                                        alt="Gallery Image 8">
                                <div class="gallery-caption">
                                    <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                                </div>
                            </a></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- EN GÜZEL ANLAR BİTİŞ -->
{{--   VİDEOLAR BAŞLANGIC--}}
    <section class="module">
        <div class="container">
            <div class="videos-wrap mt-15 mb-15">
                <div class="d-flex flex-column align-items-center block-header deneme">
                    <h2 class="module-title font-alt">Videolar</h2>
                    <div class="module-subtitle font-serif"><span class="text-center"><a href="https://www.dugun-fotografcisi.org/videolar">Tümünü Gör</a></span></div>
                </div>
                <div class="row list-video mb-15">
                    <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                        <div class="item"><a href="https://www.youtube.com/watch?v=vIBhD-reE_U" class="iframe-popup"
                                             title="GÖZDE&amp;METE (Uğur Beydemir - Ay tenli kadın)"
                                             data-mfp-href="https://www.youtube.com/watch?v=vIBhD-reE_U">
                                <figure><img loading="lazy"
                                             src="https://www.dugun-fotografcisi.org/uploads/images/thumbs/07022b25-7084-4dd5-b593-6376538950c8.jpg"
                                             title="GÖZDE&amp;METE (Uğur Beydemir - Ay tenli kadın)"
                                             alt="GÖZDE&amp;METE (Uğur Beydemir - Ay tenli kadın) - Düğün Videoları"
                                             height="300" width="100%">
                                    <figcaption>GÖZDE&amp;METE (Uğur Beydemir - Ay tenli kadın) - Bu aşk hikayesinin
                                        kahramanları Gözde&amp;Mete.. Çekim günü geldiğinde uzun zamandır birbirimizi
                                        tanıyormuş
                                        gibi rahat geçti, biz profesyonelliğimizi onlar da duygularını kattı. Sonucunda
                                        ise
                                        masal tadında yıllarca unutulmayacak bir çekim geçirdik..
                                    </figcaption>
                                </figure>
                            </a> <a href="https://www.dugun-fotografcisi.org/video/gozdemete-ugur-beydemir-ay-tenli-kadin"
                                    title="GÖZDE&amp;METE (Uğur Beydemir - Ay tenli kadın) - Düğün Videoları"><p
                                        class="title text-center p-auto">GÖZDE&amp;METE <br>(Uğur Beydemir - Ay tenli
                                    kadın)</p></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                        <div class="item"><a href="https://www.youtube.com/watch?v=d-b4Woyqf0U&amp;t=1s"
                                             class="iframe-popup"
                                             title="Şeyma-Oğuzhan Düğün Klibi (teaser)"
                                             data-mfp-href="https://www.youtube.com/watch?v=d-b4Woyqf0U&amp;t=1s">
                                <figure><img loading="lazy"
                                             src="https://www.dugun-fotografcisi.org/uploads/images/thumbs/12e8a34c-fe70-4c62-9270-5a649a62ca45.jpg"
                                             title="Şeyma-Oğuzhan Düğün Klibi (teaser)"
                                             alt="Şeyma-Oğuzhan Düğün Klibi (teaser) - Düğün Videoları" height="300"
                                             width="100%">
                                    <figcaption>Şeyma-Oğuzhan Düğün Klibi (teaser) - Bu hikayemizin kahramanları Şeyma&amp;Oğuzhan,
                                        çekim yapılan mekan riva sahil ve tarla alanı...
                                    </figcaption>
                                </figure>
                            </a> <a href="https://www.dugun-fotografcisi.org/video/seyma-oguzhan-dugun-klibi-teaser"
                                    title="Şeyma-Oğuzhan Düğün Klibi (teaser) - Düğün Videoları">
                                <p class="title text-center pb-auto">Şeyma-Oğuzhan Düğün Klibi <br> (teaser)</p></a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mt-15 mb-15">
                        <div class="item"><a href="https://www.youtube.com/watch?v=-7v0W6u2E68" class="iframe-popup"
                                             title="DİLAN-BARIŞ ( Aşk Engel Tanımaz!)"
                                             data-mfp-href="https://www.youtube.com/watch?v=-7v0W6u2E68">
                                <figure><img loading="lazy"
                                             src="https://www.dugun-fotografcisi.org/uploads/images/thumbs/9bad4a1c-7170-4014-83c6-9cf52949d5ab.jpg"
                                             title="DİLAN-BARIŞ ( Aşk Engel Tanımaz!)"
                                             alt="DİLAN-BARIŞ ( Aşk Engel Tanımaz!) - Düğün Videoları" height="300"
                                             width="100%">
                                    <figcaption>DİLAN-BARIŞ ( Aşk Engel Tanımaz!) - Aşk Engel Tanımaz diyen çiftimiz
                                        Dilan &amp;
                                        Barış ile harika bir çekim gerçekleştirdik ve ortaya bu sımsıcak video klip
                                        çıktı.#düğünfotoğrafçısı, #düğünklip #kısavideoklip #dışçekim
                                    </figcaption>
                                </figure>
                            </a> <a href="https://www.dugun-fotografcisi.org/video/dilan-baris-ask-engel-tanimaz"
                                    title="DİLAN-BARIŞ ( Aşk Engel Tanımaz!) - Düğün Videoları"><p
                                        class="title text-center p-auto">DİLAN-BARIŞ <br> ( Aşk Engel Tanımaz!)</p></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    VİDEOLAR BİTİŞ--}}

    @section('footer')
        @include('static.footer')
    @endsection

@endsection



@section('foot')

@endsection
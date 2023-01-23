@extends('layouts.default')

@section('title')
    Çekim Mekanları
@endsection

@section('content')

    <section class="module bg-dark-60 about-page-header" data-background="{{assets('images/about_bg.jpg')}}"
             style="background-image: url({{assets('images/about_bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">REZERVASYON</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="module" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">REZERVASYON</h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-8">
                    <form id="rezervasyonForm" role="form" method="post" action="">
                        <div class="form-group">
                            <label class="sr-only" for="ad">Adınız</label>
                            <input class="form-control" type="text" id="ad" name="ad"
                                   placeholder="Adınız Soyadınız*"
                                   required="required" data-validation-required-message="Please enter your name."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="soyad">Soyadınız</label>
                            <input class="form-control" type="text" id="soyad" name="soyad"
                                   placeholder="Adınız Soyadınız*"
                                   required="required" data-validation-required-message="Please enter your name."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="telefon">Telefon</label>
                            <input class="form-control" type="tel" id="telefon" name="telefon"
                                   placeholder="Telefon Numaranız*" required="required"
                                   data-validation-required-message="Lütfen teleffon numaranızı giriniz."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email"
                                   placeholder="Email adresiniz*" required="required"
                                   data-validation-required-message="Lütfen email adresinizi giriniz."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="tarih">Tarih</label>
                            <input class="form-control" type="datetime-local" id="tarih" name="tarih"
                                   placeholder="Rezervasyon Tarihi*" required="required"
                                   data-validation-required-message="Lütfen rezervasyon tarihi seçiniz."/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="saat">Tarih</label>
                            <input class="form-control" type="time" id="saat" name="saat"
                                   placeholder="Rezervasyon Saatiniz*" required="required"
                                   data-validation-required-message="Lütfen rezervasyon saatini seçiniz."/>
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">GÖNDER
                            </button>
                        </div>
                    </form>
                    <div class="ajax-response font-alt" id="rezervasyonFormResponse"></div>
                </div>

                <div class="col-sm-4">
                    <div class="alt-features-item mt-0">
                        <div class="alt-features-icon"><span class="icon-phone"></span></div>
                        <h3 class="alt-features-title font-alt">İletişim & Email</h3>Email: info@aymedya.com<br/>Phone:
                        +90 539 438 44 56
                    </div>
                    <div class="alt-features-item mt-xs-60">
                        <div class="alt-features-icon"><span class="icon-map"></span></div>
                        <h3 class="alt-features-title font-alt">OFİS</h3>Ay MEDYA<br/>İsmet Paşa Mah. Şehit Mücahit
                        Şimşek Sokak. Akmansoy Apartmanı No:16/B<br/>
                        <b>KAHRAMANMARAŞ</b>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('footer')
        @include('static.footer')
    @endsection

@endsection



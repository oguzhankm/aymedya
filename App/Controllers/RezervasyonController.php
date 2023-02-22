<?php

namespace Kodlazim\App\Controllers;

use Kodlazim\App\Models\Rezervasyon;

class RezervasyonController {

    public function form()
    {
        return view('reservation');
    }


    public function rezervasyonPost()
    {



        $errors = array();

        // Check if date has been entered
        if (!isset($_POST['ad'])) {
            $errors['ad'] = 'Lütfen adınızı giriniz';
        }
        // Check if date has been entered
        if (!isset($_POST['soyad'])) {
            $errors['soyad'] = 'Lütfen soyadınızı giriniz';
        }

        // Check if time has been entered
        if (!isset($_POST['telefon'])) {
            $errors['telefon'] = 'Lütfen telefon numaranızı giriniz';
        }

        // Check if email has been entered and is valid
        if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address';
        }

        // Check if time has been entered
        if (!isset($_POST['tarih'])) {
            $errors['tarih'] = 'Lütfen rezervasyon tarhini giriniz';
        }

        //Check if people has been entered
        if (!isset($_POST['saat'])) {
            $errors['saat'] = 'Lütfen Saati giriniz';
        }




        $errorOutput = '';

        if(!empty($errors)){

            $errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
            $errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

            $errorOutput  .= '<ul>';

            foreach ($errors as $key => $value) {
                $errorOutput .= '<li>'.$value.'</li>';
            }

            $errorOutput .= '</ul>';
            $errorOutput .= '</div>';

            echo $errorOutput;
            die();
        }
        $ad = $_POST['ad'];
        $soyad = $_POST['soyad'];
        $telefon = $_POST['telefon'];
        $email = $_POST['email'];
        $tarih = $_POST['tarih'];
        $saat = $_POST['saat'];

        //DB ye ekleme kısmı
        $rezervasyon = new Rezervasyon($ad, $soyad, $telefon, $email, $tarih, $saat);
        /** @var  \Kodlazim\App\Models\Rezervasyon $rezervasyon */
        $rezervasyon->setAd($ad);
        $rezervasyon->setSoyad($soyad);
        $rezervasyon->setTelefon($telefon);
        $rezervasyon->setEmail($email);
        $rezervasyon->setTarih($tarih);
        $rezervasyon->setSaat($saat);
        $rezervasyon->save();


        $result = '';
        if (true) {
            $result .= '<div class="alert alert-success alert-dismissible" role="alert">';
            $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $result .= 'Mesajınız Başarıyla Alındı';
            $result .= '</div>';
        } else {
            $result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
            $result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $result .= 'Mesajınız Alınırken Bir Problemle Karışılaşıldı';
            $result .= '</div>';
        }
        return $result;


    }

    public function kaydet() {





        // kayıt başarılı mesajı göster
    }
}

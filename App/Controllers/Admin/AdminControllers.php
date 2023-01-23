<?php

namespace Kodlazim\App\Controllers\Admin;

use Kodlazim\App\Models\Admin;

class AdminControllers
{
    public function index()
    {
        return view('adminView.home');
    }

    public function settings()
    {
        return view('adminView.static.settings');
    }

    public function settingPost()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $keywords = $_POST['keywords'];


    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $admin = new Admin($username, $password);
        if ($admin->login()) {
            // login başarılı, yönlendir
        } else {
            // login başarısız, hata mesajı göster
        }
    }

    public function kaydet()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $admin = new Admin($username, $password);
        $admin->kaydet();

        // kayıt başarılı mesajı göster
    }

    public function FotoEkle()
    {
        $imageCaption = $_POST['imageCaption'];
        $background_image = $_FILES['background_image'];

        if (isset($imageCaption)) {

        }


    }

    public function active()
    {
        
    }
}

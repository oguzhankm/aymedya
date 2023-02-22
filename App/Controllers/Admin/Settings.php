<?php

namespace Kodlazim\App\Controllers\Admin;
use Kodlazim\App\Models\AdminModels;


class Settings
{
    public function settings()
    {

        return view('adminView.static.settings');
    }

    public function settingsPost()
    {

//        return 'Form Data Burada';
        // Check if date has been entered
        if (!isset($_POST['websitename'])) {
            $websitename = $_POST['websitename'];
        }
        // Check if date has been entered
        if (!isset($_POST['title'])) {
            $title = $_POST['title'];
        }

        // Check if time has been entered
        if (!!isset($_POST['description'])) {
            $description = $_POST['description'];
        }

        // Check if time has been entered
        if (!isset($_POST['keywords'])) {
            $keywords = $_POST['keywords'];
        }




        $websitename = $_POST['websitename'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $keywords = $_POST['keywords'];



        //DB ye ekleme kısmı
        $AdminSettings = new AdminModels\Settings($websitename, $title, $description, $keywords);
        /**
         * @var AdminModels\Settings $AdminSettings;
         */
        $AdminSettings->setWebsitename($websitename);
        $AdminSettings->setTitle($title);
        $AdminSettings->setDescription($description);
        $AdminSettings->setKeywords($keywords);
        $AdminSettings->save();


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
}
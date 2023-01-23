<?php

namespace Kodlazim\App\Controllers;

use Kodlazim\App\Models\ContactForm;

class Contact
{
    public function index()
    {
        return view('contact');
    }

    public function contactPost()
    {
        $errors = array();

        // Check if name has been entered
        if (!isset($_POST['fullName'])) {
            $errors['fullName'] = 'Please enter your name';
        }

        // Check if email has been entered and is valid
        if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!isset($_POST['message'])) {
            $errors['message'] = 'Please enter your message';
        }

        $errorOutput = '';

        if (!empty($errors)) {
            $errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
            $errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $errorOutput .= '<ul>';
            foreach ($errors as $key => $value) {
                $errorOutput .= '<li>' . $value . '</li>';
            }
            $errorOutput .= '</ul>';
            $errorOutput .= '</div>';
            return $errorOutput;
        }



//        DB'ye Kaydetme İşlemi
        $contactform = new ContactForm();
        /** @var \Kodlazim\App\Models\ContactForm $contactform */
        $contactform->setFullName($_POST['fullName']);
        $contactform->setEmail($_POST['email']);
        $contactform->setMessage($_POST['message']);
        $contactform->save();

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


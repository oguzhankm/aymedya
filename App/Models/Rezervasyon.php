<?php

namespace Kodlazim\App\Models;

use Kodlazim\Core\Model;

class Rezervasyon extends Model{
    public $ad;
    public $soyad;
    public $telefon;
    public $email;
    public $tarih;
    public $saat;

    protected ?string $tableName = 'rezervasyon';


//    public function __construct($ad, $soyad, $telefon, $email, $tarih, $saat) {
//        $this->ad = $ad;
//        $this->soyad = $soyad;
//        $this->telefon = $telefon;
//        $this->email = $email;
//        $this->tarih = $tarih;
//        $this->saat = $saat;
//    }


//    public function kaydet(){
//        $rezervsayonform = new Rezervasyon();
//        $rezervsayonform = $this->setAd();
//        $rezervsayonform = $this->setSoyad();
//        $rezervsayonform = $this->setTelefon();
//        $rezervsayonform = $this->setEmail();
//        $rezervsayonform = $this->setTarih();
//        $rezervsayonform = $this->setSaat();
//        $rezervsayonform = $this->save();
//    }

    /**
     * @return string|null
     */
    public function getTableName(): ?string
    {
            return $this->tableName;
    }

    public function attributes(): array
    {
        return ['ad', 'soyad', 'telefon', 'email', 'tarih', 'saat'];
    }


    /**
     * @param mixed $ad
     */
    public function setAd($ad): void
    {
        $this->ad = $ad;
    }


    /**
     * @param mixed $soyad
     */
    public function setSoyad($soyad): void
    {
        $this->soyad = $soyad;
    }

    /**
     * @param mixed $telefon
     */
    public function setTelefon($telefon): void
    {
        $this->telefon = $telefon;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $tarih
     */
    public function setTarih($tarih): void
    {
        $this->tarih = $tarih;
    }

    /**
     * @param mixed $saat
     */
    public function setSaat($saat): void
    {
        $this->saat = $saat;
    }


    public function tableName(): string
    {
        return 'rezervasyon';
    }

    /**
     * @return mixed
     */
    public function getTarih()
    {
        return $this->tarih;
    }

    /**
     * @return mixed
     */
    public function getSaat()
    {
        return $this->saat;
    }
}

<?php

namespace Kodlazim\App\Models;

use Kodlazim\Core\Model;

class Admin extends Model
{
    public $imageCaption;
    public $background_image;

    protected ?string $tableName = 'slider';

    /**
     * @return string|null
     */
    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    public function attributes(): array
    {
        return ['imageCaption', 'bacground_image'];
    }

    public function tableName(): string
    {
        return 'rezervasyon';
    }

    /*** @return mixed
     */
    public function getImageCaption()
    {
        return $this->imageCaption;
    }

    /**
     * @param mixed $imageCaption
     * @return Admin
     */
    public function setImageCaption($imageCaption)
    {
        $this->imageCaption = $imageCaption;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getBackgroundImage()
    {
        return $this->background_image;
    }

    /**
     * @param mixed $background_image
     */
    public function setBackgroundImage($background_image): void
    {
        $this->background_image = $background_image;
    }


}

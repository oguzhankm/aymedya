<?php

namespace Kodlazim\App\Models\AdminModels;

use Kodlazim\Core\Model;

class Settings extends Model
{
    public $websitename;
    public $title;
    public $description;
    public $keywords;

    protected ?string $tableName = 'ayarlar';

    /**
     * @return string|null
     */
    public function getTableName(): ?string
    {
        return $this->tableName;
    }


    public function attributes(): array
    {
        return ['websitename', 'title', 'description', 'keywords'];
    }


    /**
     * @return mixed
     */
    public function getWebsitename()
    {
        return $this->websitename;
    }

    /**
     * @param mixed $websitename
     */
    public function setWebsitename($websitename): void
    {
        $this->websitename = $websitename;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param mixed $keywords
     */
    public function setKeywords($keywords): void
    {
        $this->keywords = $keywords;
    }


}

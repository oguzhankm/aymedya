<?php

namespace Kodlazim\App\Models;

use Kodlazim\Core\Model;

class ContactForm extends Model
{
    protected ?string $tableName = 'contactform';

    protected string $fullName;
    protected string $email;
    protected string $message;

    /**
     * @return string|null
     */
    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    /**
     * @param string|null $tableName
     */
    public function setTableName(?string $tableName): void
    {
        $this->tableName = $tableName;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }



    public function tableName(): string
    {
        return 'contactform';
    }





    private array $_selfValues = [];

    public function get()
    {
        $contactUsers = parent::get();
        foreach ($contactUsers as $contactItem) {
            $contactUsers = new self();
            foreach ($contactItem as $key => $value) {
                $contactUsers->{$key} = $value;
            }
            $this->_selfValues[] = $contactUsers;
        }

        return $this->_selfValues;
    }


    public function attributes(): array
    {
       return ['fullName', 'email', 'message'];
    }
}
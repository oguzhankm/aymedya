<?php

namespace Kodlazim\App\Models;

use Kodlazim\Core\Model;

class User extends Model
{
    protected ?string $tableName = 'users';

    protected string $fullName;
    protected string $email;
    protected string $password;
    protected string $token;

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
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    private array $_selfValues = [];

    public function get()
    {
        $users = parent::get();
        foreach ($users as $userItem) {
            $user = new self();
            foreach ($userItem as $key => $value) {
                $user->{$key} = $value;
            }
            $this->_selfValues[] = $user;
        }

        return $this->_selfValues;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }


    public function tableName(): string
    {
        // TODO: Implement tableName() method.
    }

    public function attributes(): array
    {
        // TODO: Implement attributes() method.
    }
}
<?php

namespace Kodlazim\Core;

use Kodlazim\App\Models\User;
use PDO;

abstract class Model

{
    protected ?string $tableName = null;

    protected ?PDO $_db = null;

    protected ?int $id = null;

    private string $sqlQuery;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    private array $_excludeVariables = [
        'tableName',
        '_db',
        '_excludeVariables'
    ];

    public function __construct()
    {
        if (is_null($this->_db)) {
            $this->connect();
        }
    }

    public function getTableName(): string
    {
        if (!is_null($this->tableName)) {
            return $this->tableName;
        }

        $parsedClass = explode('\\', get_called_class());
        $this->tableName = strtolower($parsedClass[array_key_last($parsedClass)]);

        return $this->tableName;
    }

    private function connect()
    {
        $this->_db = new PDO('mysql:host=' . getenv('DB_HOST', 'localhost') . ';dbname=' . getenv('DB_NAME') . ';port=' . getenv('DB_PORT', '3306'), getenv('DB_USER', 'root'), getenv('DB_PASSWORD', ''));
    }

    public function find(int $id, array $attr = [])
    {
        if (empty($attr)) {
            $conditions = 'SELECT * FROM ' . $this->getTableName() . ' WHERE id = "' . $id . '"';
        } else {
            $select = '';
            foreach ($attr as $item) {
                $select .= $item . ',';
            }
            $conditions = 'SELECT ' . rtrim($select, ',´´') . ' FROM ' . $this->getTableName() . ' WHERE id = "' . $id . '"';
        }

        try {
            foreach ($this->_db->query($conditions)->fetch(PDO::FETCH_ASSOC) as $key => $value) {
                $this->{$key} = $value;
            }

        } catch (\Throwable $exception) {
            return false;
        }

        return true;
    }

    public function where(string $column, string $operator, string $value)
    {
        $this->sqlQuery = "SELECT * FROM " . $this->tableName . ' WHERE ' . $column . ' ' . $operator . ' "' . $value . '"';
        return $this;
    }

    public function get()
    {
        return $this->_db->query($this->sqlQuery)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(array $attributes)
    {
        $sql = "UPDATE " . $this->getTableName() . ' SET ';

        foreach ($attributes as $key => $value) {
            $sql .= $key . ' = "' . $value . '", ';
        }

        return $this->_db->exec(rtrim(trim($sql), ','));
    }

    public function create(array $attributes)
    {
        $sql = "INSERT INTO " . $this->getTableName() . ' SET ';

        foreach ($attributes as $key => $value) {
            $sql .= $key . ' = "' . $value . '", ';
        }

        return $this->_db->exec(rtrim(trim($sql), ','));
    }

    public function save()
    {
        $attributes = get_object_vars($this);
        foreach ($this->_excludeVariables as $excludeVariable) unset($attributes[$excludeVariable]);

        if (isset($attributes['id'])) {
            return $this->update($attributes);
        } else {
            return $this->create($attributes);
        }
    }

}
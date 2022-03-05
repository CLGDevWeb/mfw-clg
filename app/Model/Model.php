<?php

namespace App\Model;

use PDO;
use PDOException;

class Model
{
    protected static PDO $pdo;
    protected string $table;
    
    public function __construct()
    {
        try {
            static::$pdo = new PDO('mysql:dbname=mfw;host=localhost', 'root', '', [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        }

        if (!isset($this->table)) {
            $this->table = $this->getTableName();
        }
    }

    protected function getPDO(): PDO
    {
        return static::$pdo;
    }

    public function all(): array
    {
        $statement = $this->getPDO()->query("SELECT * FROM {$this->table}");

        return $statement->fetchAll();
    }

    private function getTableName(): string
    {
        $path = explode('\\', get_class($this));

        $name = $path[count($path)-1];

        return substr($name, -1) === 's' ? strtolower($name) : strtolower($name . 's');
    }
}
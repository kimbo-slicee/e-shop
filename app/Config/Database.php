<?php

namespace core;

use config\Database;

class DataBase
{
    private static ?\core\DataBase $instance = null;
    private PDO $connection;

    private function __construct($db_host, $db_name, $db_user, $db_password)
    {
        try {
            $connection_string = "mysql:host=$db_host;dbname=$db_name;charset=utf8";

            $this->connection = new PDO(
                $connection_string,
                $db_user,
                $db_password
            );

            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public static function getInstance(): ?DataBase
    {
        if (!self::$instance) {
            self::$instance = new self(
                Database::get('DB_HOST'),
                Database::get('DB_NAME'),
                Database::get('DB_USER'),
                Database::get('DB_PASS')
            );
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}
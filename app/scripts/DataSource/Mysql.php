<?php

declare(strict_types=1);

namespace App\DataSource;

use PDO;
use PDOException;

class Mysql
{
    /** @var PDO */
    private PDO $connection;


    public function __construct()
    {
        $host = getenv('MYSQL_HOST');
        $db = getenv('MYSQL_DATABASE');
        $port = getenv('MYSQL_PORT');
        $username = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');

        $this->connection = new PDO("mysql:host=$host;port=$port;dbname=$db", $username, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @return PDO
     */
    public function getConnection(): PDO
    {
        return $this->connection;
    }
}

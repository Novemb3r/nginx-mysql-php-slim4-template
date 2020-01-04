<?php

declare(strict_types=1);

namespace App\Services;

use App\DataSource\Mysql;
use App\Entities\Cat;
use PDO;

class Cats
{

    /**
     * @var Mysql
     */
    private Mysql $db;

    /**
     * @param Mysql $db
     */
    public function __construct(Mysql $db)
    {
        $this->db = $db;
    }

    /**
     * @return array
     */
    public function getAll()
    {

        return $this->db->getConnection()
            ->query('SELECT id,name FROM cats')
            ->fetchAll(PDO::FETCH_CLASS, Cat::class);
    }
}


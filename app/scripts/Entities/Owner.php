<?php

declare(strict_types=1);

namespace App\Entities;

class Owner
{

    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Owner
     */
    public function setId(int $id): Owner
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Owner
     */
    public function setName(string $name): Owner
    {
        $this->name = $name;
        return $this;
    }
}

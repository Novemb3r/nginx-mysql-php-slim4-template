<?php

declare(strict_types=1);

namespace App\Entities;

class Cat implements \JsonSerializable
{
    /**
     * @var int
     */
    private int $id = 0;

    /**
     * @var string
     */
    private string $name = '';

    /**
     * @var int
     */
    private int $ownerId = 0;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Cat
     */
    public function setId(int $id): Cat
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
     * @return Cat
     */
    public function setName(string $name): Cat
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getOwnerId(): int
    {
        return $this->ownerId;
    }

    /**
     * @param int $ownerId
     * @return Cat
     */
    public function setOwnerId(int $ownerId): Cat
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'ownerId' => $this->getOwnerId()
        ];
    }
}

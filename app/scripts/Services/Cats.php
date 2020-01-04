<?php

declare(strict_types=1);

namespace App\Services;

use App\DataMappers\Cats as CatsDataMapper;

class Cats
{
    /** @var CatsDataMapper */
    private CatsDataMapper $cats;

    public function __construct(CatsDataMapper $cats)
    {
        $this->cats = $cats;
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->cats->getAll();
    }
}


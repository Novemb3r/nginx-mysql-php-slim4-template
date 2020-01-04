<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\Cats;
use Psr\Http\Message\{RequestInterface, ResponseInterface};

class GetCats implements ControllerInterface
{

    /** @var Cats */
    private Cats $catsService;

    /**
     * @param Cats $catsService
     */
    public function __construct(Cats $catsService)
    {
        $this->catsService = $catsService;
    }

    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $data = $this->catsService->getAll();

        $response = $response->withHeader('Content-Type', 'application/json')
            ->withStatus(200);

        $response->getBody()->write(json_encode($data));

        return $response;
    }
}

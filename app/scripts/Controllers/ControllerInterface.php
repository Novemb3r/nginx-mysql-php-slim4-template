<?php

declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\{RequestInterface, ResponseInterface};

interface ControllerInterface
{

    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface;
}

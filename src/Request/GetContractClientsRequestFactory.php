<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Request;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Laminas\Diactoros\RequestFactory;

/**
 * Class GetContractClientsRequestFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class GetContractClientsRequestFactory
{
    private RequestFactoryInterface $requestFactory;

    private const METHOD = 'POST';
    private const URI    = 'https://api.speedy.bg/v1/client/contract/';

    /**
     * @param RequestFactoryInterface|null $requestFactory
     */
    public function __construct(RequestFactoryInterface $requestFactory = null)
    {
        if (null !== $requestFactory) {
            $this->requestFactory = $requestFactory;
        }

        $this->requestFactory = new RequestFactory();
    }

    public function fromArray(array $array): RequestInterface
    {
        $request = $this->requestFactory->createRequest(self::METHOD, self::URI);
        $request->getBody()->write(\json_encode($array));

        return $request->withHeader('Content-type', 'application/json');
    }
}

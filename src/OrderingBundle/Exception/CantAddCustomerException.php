<?php

namespace OrderingBundle\Exception;

use Symfony\Component\HttpFoundation\Response;
use Throwable;

class CantAddCustomerException extends \Exception
{
    const DEFAULT_MESSAGE = 'Can\'t add a new customer to the database';

    public function __construct(
        $message = self::DEFAULT_MESSAGE,
        $code = Response::HTTP_BAD_REQUEST,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}

<?php

namespace FmTod\SmsCommunications\Exceptions;

class CouldNotPinnedMessage extends \Exception
{
    public function __construct(string $message, ?\Throwable $throwable = null)
    {
        parent::__construct($message, previous: $throwable);
    }
}

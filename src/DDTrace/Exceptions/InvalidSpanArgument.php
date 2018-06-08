<?php

namespace DDTrace\Exceptions;

use InvalidArgumentException;

final class InvalidSpanArgument extends InvalidArgumentException
{
    public static function forTagKey($key)
    {
        return new self(
            sprintf('Invalid key type in given span tags. Expected string, got %s.', gettype($key))
        );
    }
}

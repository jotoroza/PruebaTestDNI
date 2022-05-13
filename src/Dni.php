<?php

declare(strict_types=1);

namespace Dojo;

use LengthException;

class Dni
{
    public function __construct(string $dni)
    {
        if (strlen($dni) > 9) {
            throw new LengthException('Too long');
        }
        if (\strlen($dni) < 9) {
            throw new LengthException('Too short');
        }
        throw new \DomainException('Ends with number');
    }
}

<?php

declare(strict_types=1);

namespace Dojo;

use LengthException;

class Dni
{
    private const VALID_LENGTH = 9;

    public function __construct(string $dni)
    {
        $this->checkDniHasValidLength($dni);

        throw new \DomainException('Ends with number');
    }

    private function checkDniHasValidLength(string $dni): void
    {
        if (strlen($dni) !== self::VALID_LENGTH) {
            throw new LengthException('Too long or Too short');
        }
    }
}

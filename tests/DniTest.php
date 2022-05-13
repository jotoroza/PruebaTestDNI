<?php

declare(strict_types=1);

namespace Tests\Dojo;

use Dojo\Dni;
use LengthException;
use DomainException;
use PHPUnit\Framework\TestCase;

final class DniTest extends TestCase
{
    public function testShouldFailWhenDniLongerThanMaxLenght(): void
    {
        $this->expectException(LengthException::class);
        // $this->expectExceptionMessage('Too long');
        $dni = new Dni('0123456789');
    }

    public function testShouldFailWhenDniShorterThanMinLenght(): void
    {
        $this->expectException(LengthException::class);
        // $this->expectExceptionMessage('Too short');
        $dni = new Dni('01234567');
    }

    public function testShouldFailWhenDniEndsWithANumber(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Ends with number');
        $dni = new Dni('012345678');
    }
}

<?php
declare(strict_types=1);

namespace Tests\Dojo;

use Dojo\Dni;
use LengthException;
use PHPUnit\Framework\TestCase;

final class DniTest extends TestCase
{
    public function testShouldFailWhenDniLongerThanMaxLenght()
    {
        $this->expectException(LengthException::class);
        $this->expectExceptionMessage('Too long');
        $dni = new Dni('0123456789');
    }
}
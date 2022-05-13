<?php
declare(strict_types=1);

namespace Dojo;

use LengthException;

class Dni
{
    public function __construct() 
    {
        throw new LengthException('Too long');
    }
}
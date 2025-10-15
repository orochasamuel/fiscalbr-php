<?php

namespace Tests\Core;

use FiscalBr\Core\Constantes;
use PHPUnit\Framework\TestCase;

class ConstantesTest extends TestCase
{
    public function testVZeroEhZero()
    {
        $this->assertSame(0.00, Constantes::VALOR_ZERO);
    }
}

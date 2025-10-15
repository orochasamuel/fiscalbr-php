<?php

namespace FiscalBr\Core\Sped;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class SpedOrdemRegistro
{
    public function __construct(public int $posicao) {}
}
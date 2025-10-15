<?php

namespace FiscalBr\EFDFiscal\Bloco9;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro9990 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN_9", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLin9;

    public function __construct(string $currentQtdLin9)
    {
        parent::__construct("9990");
        $this->QtdLin9 = $currentQtdLin9;
    }
}

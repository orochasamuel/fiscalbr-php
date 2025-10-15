<?php

namespace FiscalBr\EFDFiscal\Bloco9;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro9999 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLin;

    public function __construct(string $currentQtdLin)
    {
        parent::__construct("9999");
        $this->QtdLin = $currentQtdLin;
    }
}

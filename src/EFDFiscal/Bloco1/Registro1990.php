<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1990 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN_1", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLin1;

    public function __construct()
    {
        parent::__construct("1990");
        $this->QtdLin1 = 0;
    }

        public function setQtdLin1(int $value): void
    {
        $this->QtdLin1 = $value;
    }
}

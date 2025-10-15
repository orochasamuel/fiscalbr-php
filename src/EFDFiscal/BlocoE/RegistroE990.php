<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE990 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN_E", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLinE;

    public function __construct()
    {
        parent::__construct("E990");
        $this->QtdLinE = 0;
    }

        public function setQtdLinE(int $value): void
    {
        $this->QtdLinE = $value;
    }
}

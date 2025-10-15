<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD990 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN_D", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLinD;

    public function __construct()
    {
        parent::__construct("D990");
        $this->QtdLinD = 0;
    }

        public function setQtdLinD(int $value): void
    {
        $this->QtdLinD = $value;
    }
}

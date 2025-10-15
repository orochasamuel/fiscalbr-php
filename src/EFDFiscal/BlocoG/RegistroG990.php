<?php

namespace FiscalBr\EFDFiscal\BlocoG;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroG990 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN_G", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLinG;

    public function __construct()
    {
        parent::__construct("G990");
        $this->QtdLinG = 0;
    }

        public function setQtdLinG(int $value): void
    {
        $this->QtdLinG = $value;
    }
}

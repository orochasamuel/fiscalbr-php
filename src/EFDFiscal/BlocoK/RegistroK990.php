<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK990 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN_K", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLinK;

    public function __construct()
    {
        parent::__construct("K990");
        $this->QtdLinK = 0;
    }

        public function setQtdLinK(int $value): void
    {
        $this->QtdLinK = $value;
    }
}

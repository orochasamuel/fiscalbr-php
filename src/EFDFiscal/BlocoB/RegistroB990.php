<?php

namespace FiscalBr\EFDFiscal\BlocoB;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroB990 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN_B", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLinB;

    public function __construct()
    {
        parent::__construct("B990");
        $this->QtdLinB = 0;
    }

        public function setQtdLinB(int $value): void
    {
        $this->QtdLinB = $value;
    }
}

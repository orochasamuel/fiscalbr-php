<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0990 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN_0", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLin0;

    public function __construct()
    {
        parent::__construct("0990");
        $this->QtdLin0 = 0;
    }

        public function setQtdLin0(int $value): void
    {
        $this->QtdLin0 = $value;
    }
}

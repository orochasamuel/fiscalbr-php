<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;
use FiscalBr\Core\Sped\SpedOrdemRegistro;

//#[SpedOrdemRegistro(990)]
class RegistroC990 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN_C", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLinC;

    public function __construct()
    {
        parent::__construct("C990");
        $this->QtdLinC = 0;
    }

    public function setQtdLinC(int $value): void
    {
        $this->QtdLinC = $value;
    }
}

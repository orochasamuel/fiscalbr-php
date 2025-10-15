<?php

namespace FiscalBr\EFDFiscal\BlocoH;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroH990 extends RegistroSped
{
    #[SpedCampos(2, "QTD_LIN_H", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdLinH;

    public function __construct()
    {
        parent::__construct("H990");
        $this->QtdLinH = 0;
    }

        public function setQtdLinH(int $value): void
    {
        $this->QtdLinH = $value;
    }
}

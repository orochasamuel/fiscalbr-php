<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0210 extends RegistroSped
{
    #[SpedCampos(2, "COD_ITEM_COMP", "C", 60, 0, true, 10)]
    public string $CodItemComp;

    #[SpedCampos(3, "QTD_COMP", "N", PHP_INT_MAX, 6, true, 10)]
    public Decimal $QtdComp;

    #[SpedCampos(4, "PERDA", "N", PHP_INT_MAX, 4, true, 10)]
    public Decimal $Perda;

    public function __construct()
    {
        parent::__construct("0210");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->CodItemComp ??= '';
        $this->QtdComp ??= new Decimal(0);
        $this->Perda ??= new Decimal(0);
    }
}

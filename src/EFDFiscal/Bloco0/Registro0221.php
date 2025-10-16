<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0221 extends RegistroSped
{
    #[SpedCampos(2, "COD_ITEM_ATOMICO", "C", 60, 0, true, 17)]
    public string $CodItemAtomico;

    #[SpedCampos(3, "QTD_CONTIDA", "N", PHP_INT_MAX, 6, true, 17)]
    public Decimal $QtdContida;

    public function __construct()
    {
        parent::__construct("0221");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->CodItemAtomico ??= '';
        $this->QtdContida ??= new Decimal(0);
    }
}

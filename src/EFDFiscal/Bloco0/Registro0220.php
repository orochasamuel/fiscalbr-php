<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0220 extends RegistroSped
{
    #[SpedCampos(2, "UNID_CONV", "C", 6, 0, true, 2)]
    public string $UnidConv;

    #[SpedCampos(3, "FAT_CONV", "N", 10, 6, true, 2)]
    public Decimal $FatConv;

    #[SpedCampos(4, "COD_BARRA", "C", PHP_INT_MAX, 0, false, 16)]
    public string $CodBarra;

    public function __construct()
    {
        parent::__construct("0220");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->UnidConv ??= '';
        $this->FatConv ??= new Decimal(0);
        $this->CodBarra ??= '';
    }
}

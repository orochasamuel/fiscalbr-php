<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD360 extends RegistroSped
{
    #[SpedCampos(2, "VL_PIS", "N", 0, 2, false, 2)]
    public string $VlPis;


    ///   Valor total da COFINS

    #[SpedCampos(3, "VL_COFINS", "N", 0, 2, false, 2)]
    public string $VlCofins;

    public function __construct()
    {
        parent::__construct("D360");
    }
}

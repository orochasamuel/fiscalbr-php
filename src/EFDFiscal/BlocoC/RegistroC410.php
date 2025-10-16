<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC410 extends RegistroSped
{
    #[SpedCampos(2, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor total da COFINS

    #[SpedCampos(3, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;

    public function __construct()
    {
        parent::__construct("C410");
    }
}

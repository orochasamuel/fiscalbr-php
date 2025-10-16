<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD190 extends RegistroSped
{
    #[SpedCampos(2, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;

    #[SpedCampos(3, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;

    #[SpedCampos(4, "ALIQ_ICMS", "N", 6, 2, true, 2)]
    public Decimal $AliqIcms;

    #[SpedCampos(5, "VL_OPR", "N", 0, 2, true, 2)]
    public Decimal $VlOpr;

    #[SpedCampos(6, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcms;

    #[SpedCampos(7, "VL_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlIcms;

    #[SpedCampos(8, "VL_RED_BC", "N", 0, 2, true, 2)]
    public Decimal $VlRedBc;

    #[SpedCampos(9, "COD_OBS", "C", 6, 0, false, 2)]
    public string $CodObs;

    public function __construct()
    {
        parent::__construct("D190");
    }
}

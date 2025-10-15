<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC597 extends RegistroSped
{
    #[SpedCampos(2, "COD_AJ", "C", 10, 0, true, 2)]
    public string $CodAj;

    #[SpedCampos(3, "DESCR_COMPL_AJ", "C", 100, 0, false, 2)]
    public string $DescrComplAj;

    #[SpedCampos(4, "COD_ITEM", "C", 60, 0, false, 2)]
    public string $CodItem;

    #[SpedCampos(5, "VL_BC_ICMS", "N", 12, 2, false, 2)]
    public Decimal $VlBcIcms;

    #[SpedCampos(6, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;

    #[SpedCampos(7, "VL_ICMS", "N", 12, 2, false, 2)]
    public Decimal $VlIcms;

    #[SpedCampos(8, "VL_OUTROS", "N", 12, 2, false, 2)]
    public Decimal $VlOutros;

    public function __construct()
    {
        parent::__construct("C597");
    }
}

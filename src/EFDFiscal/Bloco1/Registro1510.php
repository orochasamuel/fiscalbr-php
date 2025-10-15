<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1510 extends RegistroSped
{
    #[SpedCampos(2, "NUM_ITEM", "N", 3, 0, true, 2)]
    public int $NumItem;

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;

    #[SpedCampos(4, "COD_CLASS", "N", 4, 0, true, 2)]
    public int $CodClass;

    #[SpedCampos(5, "QTD", "N", 0, 3, false, 2)]
    public Decimal $Qtd;

    #[SpedCampos(6, "UNID", "C", 6, 0, false, 2)]
    public string $Unid;

    #[SpedCampos(7, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlItem;

    #[SpedCampos(8, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;

    #[SpedCampos(9, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;

    #[SpedCampos(10, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;

    #[SpedCampos(11, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;

    #[SpedCampos(12, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;

    #[SpedCampos(13, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;

    #[SpedCampos(14, "VL_BC_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcmsSt;

    #[SpedCampos(15, "ALIQ_ST", "N", 0, 2, false, 2)]
    public Decimal $AliqSt;

    #[SpedCampos(16, "VL_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlIcmsSt;

    #[SpedCampos(17, "IND_REC", "C", 1, 0, true, 2)]
    public int $IndRec;

    #[SpedCampos(18, "COD_PART", "C", 60, 0, false, 2)]
    public string $CodPart;

    #[SpedCampos(19, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;

    #[SpedCampos(20, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;

    #[SpedCampos(21, "COD_CTA", "C", 99, 0, false, 2)]
    public string $CodCta;

    public function __construct()
    {
        parent::__construct("1510");
    }
}

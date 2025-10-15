<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC180 extends RegistroSped
{
    #[SpedCampos(2, "COD_RESP_RET", "N", 1, 0, true, 2)]
    public int $CodRespRet;

    #[SpedCampos(3, "QUANT_CONV", "N", 9, 6, true, 2)]
    public Decimal $QuantConv;

    #[SpedCampos(4, "UNID", "C", 100, 0, true, 2)]
    public string $Unid;

    #[SpedCampos(5, "VL_UNIT_CONV", "N", 9, 6, true, 2)]
    public Decimal $VlUnitConv;

    #[SpedCampos(6, "VL_UNIT_ICMS_OP_CONV", "N", 9, 6, true, 2)]
    public Decimal $VlUnitIcmsOpConv;

    #[SpedCampos(7, "VL_UNIT_BC_ICMS_ST_CONV", "N", 9, 6, true, 2)]
    public Decimal $VlUnitBcIcmsStConv;

    #[SpedCampos(8, "VL_UNIT_ICMS_ST_CONV", "N", 9, 6, true, 2)]
    public Decimal $VlUnitIcmsStConv;

    #[SpedCampos(9, "VL_UNIT_FCP_ST_CONV", "N", 9, 6, false, 2)]
    public Decimal $VlUnitFcpStConv;

    #[SpedCampos(10, "COD_DA", "C", 100, 0, false, 2)]
    public int $CodDa;

    #[SpedCampos(11, "NUM_DA", "C", 100, 0, false, 2)]
    public string $NumDa;

    public function __construct()
    {
        parent::__construct("C180");
    }
}

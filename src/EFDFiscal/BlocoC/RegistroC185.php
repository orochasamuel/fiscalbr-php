<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC185 extends RegistroSped
{
    #[SpedCampos(2, "NUM_ITEM", "N", 3, 0, true, 2)]
    public int $NumItem;

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;

    #[SpedCampos(4, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;

    #[SpedCampos(5, "CFOP", "C", 4, 0, true, 2)]
    public string $Cfop;

    #[SpedCampos(6, "COD_MOT_REST_COMPL", "C", 5, 0, true, 2)]
    public string $CodMotRestCompl;

    #[SpedCampos(7, "QUANT_CONV", "N", 9, 6, true, 2)]
    public Decimal $QuantConv;

    #[SpedCampos(8, "UNID", "C", 100, 0, true, 2)]
    public string $Unid;

    #[SpedCampos(9, "VL_UNIT_CONV", "N", 9, 6, true, 2)]
    public Decimal $VlUnitConv;

    #[SpedCampos(10, "VL_UNIT_ICMS_NA_OPERACAO_CONV", "N", 9, 6, false, 2)]
    public Decimal $VlUnitIcmsNaOperacaoConv;

    #[SpedCampos(11, "VL_UNIT_ICMS_OP_CONV", "N", 9, 6, false, 2)]
    public Decimal $VlUnitIcmsOpConv;

    #[SpedCampos(12, "VL_UNIT_ICMS_OP_ESTOQUE_CONV", "N", 9, 6, false, 2)]
    public Decimal $VlUnitIcmsOpEstoqueConv;

    #[SpedCampos(13, "VL_UNIT_ICMS_ST_ESTOQUE_CONV", "N", 9, 6, false, 2)]
    public Decimal $VlUnitIcmsStEstoqueConv;

    #[SpedCampos(14, "VL_UNIT_FCP_ICMS_ST_ESTOQUE_CONV", "N", 9, 6, false, 2)]
    public Decimal $VlUnitFcpIcmsStEstoqueConv;

    #[SpedCampos(15, "VL_UNIT_ICMS_ST_CONV_REST", "N", 9, 6, false, 2)]
    public Decimal $VlUnitIcmsStConvRest;

    #[SpedCampos(16, "VL_UNIT_FCP_ST_CONV_REST", "N", 9, 6, false, 2)]
    public Decimal $VlUnitFcpStConvRest;

    #[SpedCampos(17, "VL_UNIT_ICMS_ST_CONV_COMPL", "N", 9, 6, false, 2)]
    public Decimal $VlUnitIcmsStConvCompl;

    #[SpedCampos(18, "VL_UNIT_FCP_ST_CONV_COMPL", "N", 9, 6, false, 2)]
    public Decimal $VlUnitFcpStConvCompl;

    public function __construct()
    {
        parent::__construct("C185");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC610 extends RegistroSped
{
    #[SpedCampos(2, "COD_CLASS", "N", 4, 0, false, 2)]
    public int $CodClass;


    ///     Código do item

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;


    ///     Quantidade acumulada do item

    #[SpedCampos(4, "QTD", "N", 0, 3, true, 2)]
    public Decimal $Qtd;


    ///     Unidade do item

    #[SpedCampos(5, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;


    ///     Valor acumulado do item

    #[SpedCampos(6, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlItem;


    ///     Valor acumulado dos descontos

    #[SpedCampos(7, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///     Código da situação tributária

    #[SpedCampos(8, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código fiscal de operação e prestação

    #[SpedCampos(9, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;


    ///     Alíquota do ICMS

    #[SpedCampos(10, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Valor acumulado da base de cálculo do ICMS

    #[SpedCampos(11, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;


    ///     Valor acumulado do ICMS debitado

    #[SpedCampos(12, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;


    ///     Valor da base de cálculo do ICMS substituição tributária

    #[SpedCampos(13, "VL_BC_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcmsSt;


    ///     Valor do ICMS retido por substituição tributária

    #[SpedCampos(14, "VL_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlIcmsSt;


    ///     Valor do PIS

    #[SpedCampos(15, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor da COFINS

    #[SpedCampos(16, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;


    ///     Código da conta analítica contábil debitada/creditada

    #[SpedCampos(17, "COD_CTA", "N", 99, 0, false, 2)]
    public string $CodCta;

    public function __construct()
    {
        parent::__construct("C610");
    }
}

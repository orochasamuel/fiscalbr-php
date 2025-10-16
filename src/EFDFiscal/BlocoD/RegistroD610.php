<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD610 extends RegistroSped
{
    #[SpedCampos(2, "COD_CLASS", "N", 4, 0, true, 2)]
    public int $CodClass;



    ///     Código do item (campo 02 do Registro 0200)

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;


    ///     Quantidade acumulada do item

    #[SpedCampos(4, "QTD", "N", 0, 3, true, 2)]
    public Decimal $Qtd;


    ///     Unidade do item (Campo 02 do registro 0190)

    #[SpedCampos(5, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;


    ///    Valor acumulado do item

    #[SpedCampos(6, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $Vl_Item;


    ///     Valor acumulado dos descontos

    #[SpedCampos(7, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $Vl_Desc;


    ///     Código da Situação Tributária, conforme a Tabela indicada no item 4.3.1

    #[SpedCampos(8, "CST_ICMS", "N", 3, 0, true, 2)]
    public Decimal $CstIcms;


    ///     Código Fiscal de Operação e Prestação conforme tabela indicada no item 4.2.2.

    #[SpedCampos(9, "CFOP", "N", 4, 0, true, 2)]
    public Decimal $Cfop;


    ///     Alíquota do ICMS

    #[SpedCampos(10, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Valor da base de cálculo do ICMS

    #[SpedCampos(11, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;


    ///     Valor do ICMS creditado/debitado

    #[SpedCampos(12, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;


    ///     Valor da base de cálculo do ICMS de outras UFs

    #[SpedCampos(13, "VL_BC_ICMS_UF", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcmsUf;


    ///     Valor do ICMS de outras UFs

    #[SpedCampos(14, "VL_ICMS_UF", "N", 0, 2, false, 2)]
    public Decimal $VlIcmsUf;


    ///     Valor não tributado em função da redução da base de cálculo do ICMS,referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(15, "VL_RED_BC", "N", 0, 2, false, 2)]
    public Decimal $VlRedBc;


    ///     Valor acumulado do PIS

    #[SpedCampos(16, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor acumulado da COFINS

    #[SpedCampos(17, "VL_COFINS", "N", 0, 2, false, 2)]
    public string $VlCofins;


    ///    Código da conta analítica contábil debitada/creditada 

    #[SpedCampos(18, "COD_CTA", "C", 0, 0, false, 2)]
    public Decimal $CodCta;

    public function __construct()
    {
        parent::__construct("D610");
    }
}

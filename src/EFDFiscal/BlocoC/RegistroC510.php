<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC510 extends RegistroSped
{
    #[SpedCampos(2, "NUM_ITEM", "N", 3, 0, true, 2)]
    public int $NumItem;


    ///     Código do item

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;


    ///     Código de classificação do item de energia elétrica

    #[SpedCampos(4, "COD_CLASS", "N", 4, 0, false, 2)]
    public int $CodClass;


    ///     Quantidade do item

    #[SpedCampos(5, "QTD", "N", 0, 3, false, 2)]
    public Decimal $Qtd;


    ///     Unidade do item

    #[SpedCampos(6, "UNID", "C", 6, 0, false, 2)]
    public string $Unid;


    ///     Valor do item

    #[SpedCampos(7, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlItem;


    ///     Valor total do desconto

    #[SpedCampos(8, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///     Código da situação tributária

    #[SpedCampos(9, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código fiscal de operação e prestação

    #[SpedCampos(10, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;


    ///     Valor da base de cálculo do ICMS

    #[SpedCampos(11, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;


    ///     Alíquota do ICMS

    #[SpedCampos(12, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Valor do ICMS creditado/debitado

    #[SpedCampos(13, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;


    ///     Valor da base de cálculo referente à substituição tributária

    #[SpedCampos(14, "VL_BC_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcmsSt;


    ///     Alíquota do ICMS da substituição tributária na unidade da federação de destino

    #[SpedCampos(15, "ALIQ_ST", "N", 6, 2, false, 2)]
    public Decimal $AliqSt;


    ///     Valor do ICMS referente à substituição tributária

    #[SpedCampos(16, "VL_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlIcmsSt;


    ///     Indicador do tipo de receita

    /// <remarks>
    ///     0 - Receita própria
    ///     <para />
    ///     1 - Receita de terceiros
    /// </remarks>
    #[SpedCampos(17, "IND_REC", "C", 1, 0, true, 2)]
    public int $IndRec;


    ///     Código do participante receptor da receita

    #[SpedCampos(18, "COD_PART", "C", 60, 0, false, 2)]
    public string $CodPart;


    ///     Valor do PIS

    #[SpedCampos(19, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor do COFINS

    #[SpedCampos(20, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;


    ///     Código da conta analíica contábil debitada/creditada

    #[SpedCampos(21, "COD_CTA", "C", 99, 0, false, 2)]
    public string $CodCta;

    public function __construct()
    {
        parent::__construct("C510");
    }
}

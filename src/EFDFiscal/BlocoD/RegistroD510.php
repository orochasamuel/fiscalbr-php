<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD510 extends RegistroSped
{
    #[SpedCampos(2, "NUM_ITEM", "N", 3, 0, true, 2)]
    public int $NumItem;


    ///     Código do item (campo 02 do Registro 0200)

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;


    ///     Código de classificação do item do serviço de comunicação ou de telecomunicação, conforme a Tabela 4.4.1

    #[SpedCampos(4, "COD_CLASS", "N", 4, 0, true, 2)]
    public int $CodClass;


    ///     Quantidade do item

    #[SpedCampos(5, "QTD", "N", 0, 3, true, 2)]
    public Decimal $Qtd;


    ///     Unidade do item (Campo 02 do registro 0190)

    #[SpedCampos(6, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;


    ///     Valor do item

    #[SpedCampos(7, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $Vl_Item;


    ///     Valor total do desconto

    #[SpedCampos(8, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $Vl_Desc;


    ///     Código da Situação Tributária, conforme a Tabela indicada no item 4.3.1

    #[SpedCampos(9, "CST_ICMS", "N", 3, 0, true, 2)]
    public Decimal $CstIcms;


    ///     Código Fiscal de Operação e Prestação

    #[SpedCampos(10, "CFOP", "N", 4, 0, true, 2)]
    public Decimal $Cfop;


    ///     Valor da base de cálculo do ICMS

    #[SpedCampos(11, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;


    ///     Alíquota do ICMS

    #[SpedCampos(12, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Valor do ICMS creditado/debitado

    #[SpedCampos(13, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;


    ///     Valor da base de cálculo do ICMS de outras UFs

    #[SpedCampos(14, "VL_BC_ICMS_UF", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcmsUf;


    ///     Valor do ICMS de outras UFs

    #[SpedCampos(15, "VL_ICMS_UF", "N", 0, 2, false, 2)]
    public Decimal $VlIcmsUf;


    ///     Indicador do tipo de receita:
    ///     <para />
    ///     0 - Receita própria - serviços prestados;
    ///     <para />
    ///     1 - Receita própria - cobrança de débitos;
    ///     <para />
    ///     2 - Receita própria - venda de mercadorias;
    ///     <para />
    ///     3 - Receita própria - venda de serviço pré-pago;
    ///     <para />
    ///     4 - Outras receitas próprias;
    ///     <para />
    ///     5 - Receitas de terceiros (co-faturamento);
    ///     <para />
    ///     9 - Outras receitas de terceiros;

    #[SpedCampos(16, "IND_REC", "C", 1, 0, true, 2)]
    public string $IndRec;


    ///     Código do participante (campo 02 do Registro 0150) receptor da receita, terceiro da operação, se houver.

    #[SpedCampos(17, "COD_PART", "C", 60, 0, false, 2)]
    public string $CodPart;


    ///     Valor do PIS

    #[SpedCampos(18, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor da COFINS

    #[SpedCampos(19, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;


    ///     Código da conta analítica contábil debitada/creditada

    #[SpedCampos(20, "COD_CTA", "C", 0, 0, false, 2)]
    public string $CodCta;

    public function __construct()
    {
        parent::__construct("D510");
    }
}

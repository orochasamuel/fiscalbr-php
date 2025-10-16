<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC186 extends RegistroSped
{
    #[SpedCampos(2, "NUM_ITEM", "N", 3, 0, true, 2)]
    public int $NumItem;


    ///     Código  do  item  (campo  02  do  Registro 0200)

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public int $CodItem;


    ///     Código da Situação Tributária referente ao ICMS no documento fiscal de saída

    #[SpedCampos(4, "CST_ICMS", "N", 3, 0, true, 2)]
    public string $CstIcms;


    ///    Código  Fiscal  de  Operação  e  Prestação  no documento fiscal de saída

    #[SpedCampos(5, "CFOP", "N", 4, 0, true, 2)]
    public string $Cfop;


    ///     Código do motivo da  restituição ou complementação conforme Tabela 5.7

    #[SpedCampos(6, "COD_MOT_REST_COMPL", "C", 5, 0, true, 2)]
    public string $CodMotRestCompl;


    ///    Quantidade do item no documento fiscal de saída de acordo com as instruções de preenchimento.

    #[SpedCampos(7, "QUANT_CONV", "N", 0, 6, true, 2)]
    public Decimal $QuantConv;


    ///     Unidade adotada para informar o campo QUANT_CONV.

    #[SpedCampos(8, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;


    ///     Código do modelo do documento fiscal de entrada, conforme a tabela indicada no item 4.1.1 

    #[SpedCampos(9, "COD_MOD_ENTRADA", "C", 2, 0, true, 2)]
    public string $CodModEntrada;


    ///    Número de série do documento de entrada em papel

    #[SpedCampos(10, "SERIE_ENTRADA", "C", 3, 0, false, 2)]
    public string $SerieEntrada;


    ///    Número do documento fiscal de entrada

    #[SpedCampos(11, "NUM_DOC_ENTRADA", "N", 9, 0, false, 2)]
    public string $NumDocEntrada;


    ///     Chave do documento fiscal eletrônico de entrada 

    #[SpedCampos(12, "CHV_DFE_ENTRADA", "N", 44, 0, false, 2)]
    public string $ChvDfeEntrada;


    ///   Data da emissão do documento fiscal de entrada

    #[SpedCampos(13, "DT_DOC_ENTRADA", "N", 8, 0, true, 2)]
    public string $DtDocEntrada;


    ///   Item do documento fiscal de entrada

    #[SpedCampos(14, "NUM_ITEM_ENTRADA", "N", 3, 0, true, 2)]
    public string $NumItemEntrada;


    ///    Valor unitário da mercadoria, considerando a unidade utilizada para informar o campo “QUANT_CONV”, correspondente ao valor do campo VL_UNIT_CONV, preenchido na ocasião da entrada

    #[SpedCampos(15, "VL_UNIT_CONV_ENTRADA", "N", 0, 6, false, 2)]
    public string $VlUnitConvEntrada;


    ///   Valor unitário do ICMS correspondente ao valor do campo VL_UNIT_ICMS_OP_CONV,  preenchido na ocasião da entrada

    #[SpedCampos(16, "VL_UNIT_ICMS_OP_CONV_ENTRADA", "N", 0, 6, false, 2)]
    public string $VlUnitIcmsOpConvEntrada;


    ///    Valor unitário da base de cálculo doimposto pago ou retido anteriormentepor substituição, correspondente ao valor do campo VL_UNIT_BC_ICMS_ST_CONV, preenchido na ocasião da entrada

    #[SpedCampos(17, "VL_UNIT_BC_ICMS_ST_CONV_ENTRADA", "N", 0, 6, false, 2)]
    public string $VlUnitBcIcmsStConvEntrada;


    ///    Valor unitário do imposto pago ou retido anteriormente por substituição, inclusive FCP se devido, correspondente ao valor do campo VL_UNIT_ICMS_ST_CONV, preenchido na ocasião da entrada

    #[SpedCampos(18, "VL_UNIT_ICMS_ST_CONV_ENTRADA", "N", 0, 6, false, 2)]
    public string $VlUnitIcmsStConvEntrada;


    ///   Valor unitário do FCP_ST, correspondente ao valor do campo VL_UNIT_FCP_ST_CONV, preenchido na ocasião da entrada

    #[SpedCampos(19, "VL_UNIT_FCP_ST_CONV_ENTRADA", "N", 0, 6, false, 2)]
    public string $VlUnitFcpStConvEntrada;

    public function __construct()
    {
        parent::__construct("C186");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC181 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOT_REST_COMPL", "C", 5, 0, true, 2)]
    public int $CodMotRestCompl;


    ///     Quantidade do item

    #[SpedCampos(3, "QUANT_CONV", "N", 0, 6, true, 2)]
    public int $QuantConv;


    ///    Unidade adotada para informar o campo QUANT_CONV.

    #[SpedCampos(4, "UNID", "C", 6, 0, true, 2)]
    public int $Unid;


    ///     Código do modelo do documento fiscal de saída, conforme a tabela indicada no item 4.1.1 

    #[SpedCampos(5, "COD_MOD_SAIDA", "C", 2, 0, true, 2)]
    public int $CodModSaida;


    ///     Número de série do documento de saída em papel 

    #[SpedCampos(6, "SERIE_SAIDA", "C", 3, 0, false, 2)]
    public int $SerieSaida;


    ///    Número de série de fabricação do equipamento ECF 

    #[SpedCampos(7, "ECF_FAB_SAIDA", "C", 21, 0, false, 2)]
    public string $EcfFabSaida;


    ///     Número do documento fiscal de saída

    #[SpedCampos(8, "NUM_DOC_SAIDA", "N", 9, 0, false, 2)]
    public string $NumDocSaida;


    ///    Chave do documento fiscal eletrônico de saída  

    #[SpedCampos(9, "CHV_DFE_SAIDA", "N", 44, 0, false, 2)]
    public string $ChvDfeSaida;


    ///     Data da emissão do documento fiscal de saída

    #[SpedCampos(10, "DT_DOC_SAIDA", "N", 8, 0, true, 2)]
    public DateTime $DtDocSaida;


    ///    Número do item em que foi escriturada a saída em um registro C185, C380, C480 ou C815 quando o contribuinte informar a saída em um arquivo de perfil A.

    #[SpedCampos(11, "NUM_ITEM_SAIDA", "N", 3, 0, false, 2)]
    public int $NumItemSaida;


    ///    Valor unitário da mercadoria, considerando a unidade utilizada para informar o campo “QUANT_CONV”, correspondente ao valor do campo VL_UNIT_CONV, preenchido na ocasião da saída

    #[SpedCampos(12, "VL_UNIT_CONV_SAIDA", "N", 0, 6, false, 2)]
    public int $VlUnitConvSaida;


    ///     Valor médio unitário do ICMS OP, das mercadorias em estoque, correspondente ao valor do campo VL_UNIT_ICMS_OP_ESTOQUE_CONV, preenchido na ocasião da saída

    #[SpedCampos(13, "VL_UNIT_ICMS_OP_ESTOQUE_CONV_SAIDA", "N", 0, 6, false, 2)]
    public int $VlUnitIcmsOpEstoqueConvSaida;


    ///    Valor médio unitário do ICMS ST, incluindo FCP ST, das mercadorias em estoque, correspondente ao valor do campo VL_UNIT_ICMS_ST_ESTOQUE_CONV, preenchido na ocasião da saída

    #[SpedCampos(14, "VL_UNIT_ICMS_ST_ESTOQUE_CONV_SAIDA", "N", 0, 6, false, 2)]
    public int $VlUnitIcmsStEstoqueConvSaida;


    ///     Valor médio unitário do FCP ST agregado ao ICMS das mercadorias em estoque, correspondente ao valor do campo VL_UNIT_FCP_ICMS_ST_ESTOQUE_CONV, preenchido na ocasião da saída

    #[SpedCampos(15, "VL_UNIT_FCP_ICMS_ST_ESTOQUE_CONV_SAIDA", "N", 0, 6, false, 2)]
    public int $VlUnitFcpIcmsStEstoqueConvSaida;


    ///     Valor unitário para o ICMS na operação, correspondente ao valor do campo VL_UNIT_ICMS_NA_OPERACAO_CONV, preenchido na ocasião da saída

    #[SpedCampos(16, "VL_UNIT_ICMS_NA_OPERACAO_CONV_SAIDA", "N", 0, 6, false, 2)]
    public int $VlUnitIcmsNaOperacaoConvSaida;


    ///     Valor unitário do ICMS correspondente ao valor do campo VL_UNIT_ICMS_OP_CONV, preenchido na ocasião da saída

    #[SpedCampos(17, "VL_UNIT_ICMS_OP_CONV_SAIDA", "N", 0, 6, false, 2)]
    public int $VlUnitIcmsOpConvSaida;


    ///    Valor unitário do total do ICMS ST, incluindo FCP ST, a ser restituído/ressarcido, correspondente ao estorno do complemento apurado na operação de saída.

    #[SpedCampos(18, "VL_UNIT_ICMS_ST_CONV_SAIDA", "N", 0, 6, false, 2)]
    public int $VlUnitIcmsStConvSaida;


    ///     Valor unitário correspondente à parcela de ICMS FCP ST que compõe o campo “VL_UNIT_ICMS_ST_CONV_REST”, considerando a unidade utilizada para informar o campo “QUANT_CONV”.

    #[SpedCampos(19, "VL_UNIT_FCP_ST_CONV_REST", "N", 0, 6, false, 2)]
    public int $VlUnitFcpStConvRest;


    ///    Valor unitário do estorno do ressarcimento/restituição, incluindo FCP ST, apurado na operação de saída.

    #[SpedCampos(20, "VL_UNIT_ICMS_ST_CONV_COMPL", "N", 0, 6, false, 2)]
    public int $VlUnitIcmsStConvCompl;


    ///   Valor unitário correspondente à parcela de ICMS FCP ST que compõe o campo “VL_UNIT_ICMS_ST_CONV_COMPL”, considerando unidade utilizada para informar o campo “QUANT_CONV”.

    #[SpedCampos(21, "VL_UNIT_FCP_ST_CONV_COMPL", "N", 0, 6, false, 2)]
    public int $VlUnitFcpStConvCompl;

    public function __construct()
    {
        parent::__construct("C181");
    }
}

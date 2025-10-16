<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC330 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOT_REST_COMPL", "C", 5, 0, true, 2)]
    public int $CodMotRestCompl;


    ///   Quantidade do item 

    #[SpedCampos(3, "QUANT_CONV", "N", 0, 6, true, 2)]
    public int $QuantConv;


    ///    Unidade adotada para informar o campo QUANT_CONV.

    #[SpedCampos(4, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;


    ///    Valor unitário da mercadoria, considerando a  unidade  utilizada  para  informar  o  campo “QUANT_CONV”.

    #[SpedCampos(5, "VL_UNIT_CONV", "N", 0, 6, true, 2)]
    public string $VlUnitConv;


    ///     Valor unitário para o ICMS na operação, caso não houvesse a ST, considerando unidade utilizada para informar o campo “QUANT_CONV”, aplicando-se a mesma redução da base de cálculo do ICMS ST na tributação, se houver.

    #[SpedCampos(6, "VL_UNIT_ICMS_NA_OPERACAO_CONV", "N", 0, 6, false, 2)]
    public string $VlUnitIcmsNaOperacaoConv;


    ///   Valor unitário do ICMS OP calculado conforme a legislação de cada UF,considerando a unidade utilizada para informar o campo “QUANT_CONV”, utilizado para cálculo de ressarcimento/restituição de ST, no desfazimento da substituição tributária, quando se utiliza a fórmula descrita nas instruções de preenchimento do campo 11, no item a1).

    #[SpedCampos(7, "VL_UNIT_ICMS_OP_CONV", "N", 0, 6, false, 2)]
    public Decimal $VlUnitIcmsOpConv;


    ///    Valor médio unitário do ICMS que o contribuinte teria se creditado referente à operação de entrada das mercadorias em estoque caso estivesse submetida ao regime comum de tributação, calculado conforme a legislação de cada UF,considerando a unidade utilizada para informar o campo “QUANT_CONV”

    #[SpedCampos(8, "VL_UNIT_ICMS_OP_ESTOQUE_CONV", "N", 0, 6, false, 2)]
    public string $VlUnitIcmsOpEstoqueConv;


    ///    Valor médio unitário do ICMS ST, incluindo FCP ST, das mercadorias em estoque, considerando unidade utilizada para informar o campo “QUANT_CONV”.

    #[SpedCampos(9, "VL_UNIT_ICMS_ST_ESTOQUE_CONV", "N", 0, 6, false, 2)]
    public string $VlUnitIcmsStEstoqueConv;


    ///    Valor médio unitário do FCP ST agregado ao ICMS das mercadorias em estoque, considerando unidade utilizada parainformar o campo “QUANT_CONV”

    #[SpedCampos(10, "VL_UNIT_FCP_ICMS_ST_ESTOQUE_CONV", "N", 0, 6, false, 2)]
    public string $VlUnitFcpIcmsStEstoqueConv;


    ///    Valor unitário do total do ICMS ST, incluindo FCP ST, a ser restituído/ressarcido, calculado conforme a legislação de cada  UF,  considerando  a unidade utilizada para informar o campo “QUANT_CONV”.

    #[SpedCampos(11, "VL_UNIT_ICMS_ST_CONV_REST", "N", 0, 6, false, 2)]
    public Decimal $VlUnitIcmsStConvRest;


    ///    Valor unitário correspondente à parcela de ICMS FCP ST que compõe o campo “VL_UNIT_ICMS_ST_CONV_REST”, considerando a unidade utilizada para informar o campo “QUANT_CONV”.

    #[SpedCampos(12, "VL_UNIT_FCP_ST_CONV_REST", "N", 0, 6, false, 2)]
    public string $VlUnitFcpStConvRest;


    ///   Valor unitário do complemento do ICMS, incluindo FCP ST, considerando a unidade utilizada para informar o campo “QUANT_CONV”.

    #[SpedCampos(13, "VL_UNIT_ICMS_ST_CONV_COMPL", "N", 0, 6, false, 2)]
    public string $VlUnitIcmsStConvCompl;


    ///   Valor unitário correspondente à parcela de ICMS FCP ST que compõe o campo “VL_UNIT_ICMS_ST_CONV_COMPL”, considerando unidade utilizada para informar o campo “QUANT_CONV”.

    #[SpedCampos(14, "VL_UNIT_FCP_ST_CONV_COMPL", "N", 0, 6, false, 2)]
    public string $VlUnitFcpStConvCompl;

    public function __construct()
    {
        parent::__construct("C330");
    }
}

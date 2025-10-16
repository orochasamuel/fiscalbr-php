<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC600 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Código do município dos pontos de consumo, conforme a tabela IBGE

    #[SpedCampos(3, "COD_MUN", "N", 7, 0, true, 2)]
    public int $CodMun;


    ///     Série do documento fiscal

    #[SpedCampos(4, "SER", "C", 4, 0, false, 2)]
    public string $Ser;


    ///     Subsérie do documento fiscal

    #[SpedCampos(5, "SUB", "N", 3, 0, false, 2)]
    public int $Sub;


    ///     Código de classe de consumo de energia elétrica ou gás

    /// <remarks>
    ///     01 - Comercial
    ///     02 - Consumo próprio
    ///     03 - Iluminação pública
    ///     04 - Industrial
    ///     05 - Poder público
    ///     06 - Residencial
    ///     07 - Rural
    ///     08 - Serviço público
    ///     - Código de classe de consumo de fornecimento d'água
    /// </remarks>
    #[SpedCampos(6, "COD_CONS", "C", 2, 0, true, 2)]
    public int $CodCons;


    ///     Quantidade de documentos consolidados neste registro

    #[SpedCampos(7, "QTD_CONS", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdCons;


    ///     Quantidade de documentos cancelados

    #[SpedCampos(8, "QTD_CANC", "N", PHP_INT_MAX, 0, false, 2)]
    public int $QtdCanc;


    ///     Data dos documentos consolidados

    #[SpedCampos(9, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;


    ///     Valor total dos documentos

    #[SpedCampos(10, "VL_DOC", "N", 0, 2, true, 2)]
    public Decimal $VlDoc;


    ///     Valor acumulado dos descontos

    #[SpedCampos(11, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///     Consumo total acumulado, em kWh (Código 06)

    #[SpedCampos(12, "CONS", "N", PHP_INT_MAX, 2, false, 2)]
    public int $Cons;


    ///     Valor acumulado do fornecimento

    #[SpedCampos(13, "VL_FORN", "N", 0, 2, false, 2)]
    public Decimal $VlForn;


    ///     Valor acumulado dos serviços não-tributados pelo ICMS

    #[SpedCampos(14, "VL_SERV_NT", "N", 0, 2, false, 2)]
    public Decimal $VlServNt;


    ///     Valores cobrados em nome de terceiros

    #[SpedCampos(15, "VL_TERC", "N", 0, 2, false, 2)]
    public Decimal $VlTerc;


    ///     Valor acumulado das despesas acessórias

    #[SpedCampos(16, "VL_DA", "N", 0, 2, false, 2)]
    public Decimal $VlDa;


    ///     Valor acumulados da base de cálculo do ICMS

    #[SpedCampos(17, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;


    ///     Valor acumulado do ICMS

    #[SpedCampos(18, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;


    ///     Valor acumulado da base de cálculo do ICMS substituição tributária

    #[SpedCampos(19, "VL_BC_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcmsSt;


    ///     Valor acumulado do ICMS retido por substituição tributária

    #[SpedCampos(20, "VL_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlIcmsSt;


    ///     Valor acumulado do PIS

    #[SpedCampos(21, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor acumulado do COFINS

    #[SpedCampos(22, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;

    /** 
     * @var RegistroC601[] 
     */
    private array $RegistrosC601 = [];

    /** 
     * @var RegistroC610[] 
     */
    private array $RegistrosC610 = [];

    /** 
     * @var RegistroC690[] 
     */
    private array $RegistrosC690 = [];

    public function __construct()
    {
        parent::__construct("C600");
    }
}

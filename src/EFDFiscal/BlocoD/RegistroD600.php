<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD600 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Código do município dos terminais faturados, conforme a tabela IBGE

    #[SpedCampos(3, "COD_MUN", "N", 7, 0, true, 2)]
    public string $CodMun;


    ///   Série do documento fiscal

    #[SpedCampos(4, "SER", "C", 4, 0, true, 2)]
    public string $Ser;


    ///   Subsérie do documento fiscal

    #[SpedCampos(5, "SUB", "N", 3, 0, false, 2)]
    public string $Sub;


    ///     Código de classe de consumo dos serviços de comunicação ou de telecomunicação, conforme a Tabela 4.4.4

    #[SpedCampos(6, "COD_CONS", "N", 2, 0, true, 2)]
    public string $CodCons;


    ///     Quantidade de documentos consolidados neste registro

    #[SpedCampos(7, "QTD_CONS", "N", 0, 0, true, 2)]
    public string $QtdCons;


    ///    Data dos documentos consolidados

    #[SpedCampos(8, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;


    ///     Valor total acumulado dos documentos fiscais

    #[SpedCampos(9, "VL_DOC", "N", 0, 2, true, 2)]
    public Decimal $VlDoc;


    ///     Valor acumulado dos descontos

    #[SpedCampos(10, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///     Valor acumulado das prestações de serviços tributados pelo ICMS

    #[SpedCampos(11, "VL_SERV", "N", 0, 2, true, 2)]
    public Decimal $VlServ;


    ///     Valor acumulado dos serviços não-tributados pelo ICMS

    #[SpedCampos(12, "VL_SERV_NT", "N", 0, 2, false, 2)]
    public Decimal $VlServNt;


    ///     Valores cobrados em nome de terceiros

    #[SpedCampos(13, "VL_TERC", "N", 0, 2, false, 2)]
    public Decimal $VlTerc;


    ///     Valor acumulado das despesas acessórias

    #[SpedCampos(14, "VL_DA", "N", 0, 2, false, 2)]
    public Decimal $VlDa;


    ///     Valor acumulado da base de cálculo do ICMS

    #[SpedCampos(15, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcms;


    ///     Valor acumulado do ICMS

    #[SpedCampos(16, "VL_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlIcms;


    ///     Valor do PIS

    #[SpedCampos(17, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor da COFINS

    #[SpedCampos(18, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;

    /** 
     * @var RegistroD610[] 
     */
    private array $RegistrosD610 = [];

    /** 
     * @var RegistroD690[] 
     */
    private array $RegistrosD690 = [];

    public function __construct()
    {
        parent::__construct("D600");
    }
}

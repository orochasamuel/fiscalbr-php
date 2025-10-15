<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC790 extends RegistroSped
{
    #[SpedCampos(2, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código fiscal de operaçaõ e prestação

    #[SpedCampos(3, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;


    ///     Alíquota do ICMS

    #[SpedCampos(4, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Valor da operação correspondente à combinação
    ///     de CST_ICMS, CFOP e alíquota do ICMS

    #[SpedCampos(5, "VL_OPR", "N", 0, 2, true, 2)]
    public Decimal $VlOpr;


    ///     Parcela correspondente ao "Valor da base de cálculo
    ///     do ICMS" referente à combinação CST_ICMS, CFOP e
    ///     alíquota do ICMS

    #[SpedCampos(6, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcms;


    ///     Parcela correspondente ao "Valor do ICMS" referente
    ///     à combinação CST_ICMS, CFOP e alíquota do ICMS

    #[SpedCampos(7, "VL_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlIcms;


    ///     Valor da base de cálculo do ICMS substituição tributária

    #[SpedCampos(8, "VL_BC_ICMS_ST", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcmsSt;


    ///     Valor do ICMS retido por substituição tributária

    #[SpedCampos(9, "VL_ICMS_ST", "N", 0, 2, true, 2)]
    public Decimal $VlIcmsSt;


    ///     Valor não tributado em função da redução da base de cálculo do ICMS,
    ///     referente à combinação de CST_ICMS, CFOP e alíquota do ICMS

    #[SpedCampos(10, "VL_RED_BC", "N", 0, 2, true, 2)]
    public Decimal $VlRedBc;


    ///     Código da observação do lançamento fiscal

    #[SpedCampos(11, "COD_OBS", "C", 6, 0, false, 2)]
    public string $CodObs;

    /** 
     * @var RegistroC791[] 
     */
    private array $RegistrosC791 = [];

    public function __construct()
    {
        parent::__construct("C790");
    }
}

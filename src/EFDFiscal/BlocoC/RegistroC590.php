<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC590 extends RegistroSped
{
    #[SpedCampos(2, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código fiscal de operação e prestaçaõ do agrupamento de itens

    #[SpedCampos(3, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;


    ///     Alíquota do ICMS

    #[SpedCampos(4, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Valor da operação correspondete à combinação de
    ///     CST_ICMS, CFOP e alíquota do ICMS

    #[SpedCampos(5, "VL_OPR", "N", 0, 2, true, 2)]
    public Decimal $VlOpr;


    ///     Parcela correspondente ao "Valor da base de cálculo
    ///     do ICMS" referente à combinação de CST_ICMS, CFOP e
    ///     alíquota do ICMS

    #[SpedCampos(6, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcms;


    ///     Parcela corresponde ao "Valor do ICMS" referente à
    ///     combinação de CST_ICMS, CFOP e alíquoa do ICMS

    #[SpedCampos(7, "VL_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlIcms;


    ///     Parcela corresponde ao "Valor da base de cálculo do
    ///     ICMS" da substituição tributária referente à combinação
    ///     de CST_ICMS, CFOP alíquota do ICMS.

    #[SpedCampos(8, "VL_BC_ICMS_ST", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcmsSt;


    ///     Parcela corresponde ao valor creditado/debitado do ICMS
    ///     da substituição tributária, referente à combinação de CST_ICMS,
    ///     CFOP e alíquota do ICMS

    #[SpedCampos(9, "VL_ICMS_ST", "N", 0, 2, true, 2)]
    public Decimal $VlIcmsSt;


    ///     Valor não tributado em função da redução da base de cálculo do
    ///     ICMS, referente à combinação de CST_ICMS, CFOP e alíquota do ICMS

    #[SpedCampos(10, "VL_RED_BC", "N", 0, 2, true, 2)]
    public Decimal $VlRedBc;


    ///     Código da observação do lançamento fiscal

    #[SpedCampos(11, "COD_OBS", "C", 6, 0, false, 2)]
    public string $CodObs;

    private ?RegistroC591 $RegistroC591 = null;

    public function __construct()
    {
        parent::__construct("C590");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC490 extends RegistroSped
{
    #[SpedCampos(2, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código fiscal de operação e prestação

    #[SpedCampos(3, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;


    ///     Alíquota do ICMS

    #[SpedCampos(4, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Valor da operação correspondente à combinação de CST_ICMS, CFOP e alíquota do ICMS, incluídas as despesas
    ///     acessórias e acréscimos

    #[SpedCampos(5, "VL_OPR", "N", 0, 2, true, 2)]
    public Decimal $VlOpr;


    ///     Valor acumulado da base de cálculo do ICMS, referente à combinação de CST_ICMS, CFOP e alíquota do ICMS

    #[SpedCampos(6, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcms;


    ///     Valor acumulado do ICMS, referente à combinação de CST_ICMS, CFOP e alíquota do ICMS

    #[SpedCampos(7, "VL_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlIcms;


    ///     Código da observação do lançamento fiscal

    #[SpedCampos(8, "COD_OBS", "C", 6, 0, false, 2)]
    public string $CodObs;

    public function __construct()
    {
        parent::__construct("C490");
    }
}

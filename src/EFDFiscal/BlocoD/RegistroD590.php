<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD590 extends RegistroSped
{
    #[SpedCampos(2, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código Fiscal de Operação e Prestação, conforme a tabela indicada no item 4.2.2.

    #[SpedCampos(3, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;


    ///     Alíquota do ICMS.

    #[SpedCampos(4, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Valor da operação correspondente à combinação de CST_ICMS, CFOP, 
    ///     <para />
    ///     e alíquota do ICMS, incluídas as despesas acessórias e acrescímos.

    #[SpedCampos(5, "VL_OPR", "N", 0, 2, true, 2)]
    public Decimal $VlOpr;


    ///     Parcela correspondente ao "Valor da base de cálculo do ICMS" referente à combinação CST_ICMS, CFOP, e alíquota do ICMS. 

    #[SpedCampos(6, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcms;


    ///     Parcela correspondente ao "Valor do ICMS" referente à combinação CST_ICMS, CFOP, e alíquota do ICMS.

    #[SpedCampos(7, "VL_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlIcms;


    ///     Parcela correspondente ao valor da base de cálculo do ICMS de outras UFs, referente à combinação de CST_ICMS, CFOP, e alíquota do ICMS. 

    #[SpedCampos(8, "VL_BC_ICMS_UF", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcmsUf;


    ///     Parcela correspondente ao valor do ICMS de outras UFs, referente à combinação de CST_ICMS, CFOP, e alíquota do ICMS. 

    #[SpedCampos(9, "VL_ICMS_UF", "N", 0, 2, true, 2)]
    public Decimal $VlIcmsUf;


    ///     Valor não tributado em função da redução da base de cálculo do ICMS, referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(10, "VL_RED_BC", "N", 0, 2, true, 2)]
    public Decimal $VlRedBc;


    ///     Código da observação (campo 02 do Registro 0460).

    #[SpedCampos(11, "COD_OBS", "C", 6, 0, false, 2)]
    public string $CodObs;

    public function __construct()
    {
        parent::__construct("D590");
    }
}

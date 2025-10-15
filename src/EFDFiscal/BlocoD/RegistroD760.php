<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD760 extends RegistroSped
{
    #[SpedCampos(2, "CST_ICMS", "N", 3, 0, true, 17)]
    public int $CstIcms;


    ///     Código Fiscal de Operação e Prestação, conforme a tabela indicada no item 4.2.2.

    #[SpedCampos(3, "CFOP", "N", 4, 0, true, 17)]
    public int $Cfop;


    ///     Alíquota do ICMS.

    #[SpedCampos(4, "ALIQ_ICMS", "N", 6, 2, false, 17)]
    public Decimal $AliqIcms;


    ///     Valor total dos itens relacionados aos serviços próprios com destaque de ICMS, correspondente à combinação de
    ///     CST_ICMS, CFOP, e alíquota do ICMS.

    #[SpedCampos(5, "VL_OPR", "N", 0, 2, true, 17)]
    public Decimal $VlOpr;


    ///     Parcela correspondente ao "Valor da base de cálculo do ICMS" referente à combinação CST_ICMS, CFOP, e 
    ///     alíquota do ICMS.

    #[SpedCampos(6, "VL_BC_ICMS", "N", 0, 2, true, 17)]
    public Decimal $VlBcIcms;


    ///     Parcela correspondente ao "Valor do ICMS", incluindo o FCP, quando aplicável, referente à combinação de
    ///     CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(7, "VL_ICMS", "N", 0, 2, true, 17)]
    public Decimal $VlIcms;


    ///     Valor não tributado em função da redução da base de cálculo do ICMS, referente
    ///     à combinação de CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(8, "VL_RED_BC", "N", 0, 2, true, 17)]
    public Decimal $VlRedBc;


    ///     Código da observação o (campo 02 do Registro 0460).

    #[SpedCampos(9, "COD_OBS", "C", 6, 0, false, 17)]
    public string $CodObs;

    public function __construct()
    {
        parent::__construct("D760");
    }
}

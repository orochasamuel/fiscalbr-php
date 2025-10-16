<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC130 extends RegistroSped
{
    #[SpedCampos(2, "VL_SERV_NT", "N", 0, 2, true, 2)]
    public Decimal $VlServNt;


    ///     Valor da base de cálculo do ISSQN

    #[SpedCampos(3, "VL_BC_ISSQN", "N", 0, 2, true, 2)]
    public Decimal $VlBcIssqn;


    ///     Valor do ISSQN

    #[SpedCampos(4, "VL_ISSQN", "N", 0, 2, false, 2)]
    public Decimal $VlIssqn;


    ///     Valor da base de cálculo do imposto de renda retido na fonte

    #[SpedCampos(5, "VL_BC_IRRF", "N", 0, 2, false, 2)]
    public Decimal $VlBcIrrf;


    ///     Valor do imposto de renda retido na fonte

    #[SpedCampos(6, "VL_IRRF", "N", 0, 2, false, 2)]
    public Decimal $VlIrrf;


    ///     Valor da base de cálculo de retenção da previdência social

    #[SpedCampos(7, "VL_BC_PREV", "N", 0, 2, false, 2)]
    public Decimal $VlBcPrev;


    ///     Valor destacado para retenção da previdência social

    #[SpedCampos(8, "VL_PREV", "N", 0, 2, false, 2)]
    public Decimal $VlPrev;

    public function __construct()
    {
        parent::__construct("C130");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC172 extends RegistroSped
{
    #[SpedCampos(2, "VL_BC_ISSQN", "N", 0, 2, true, 2)]
    public Decimal $VlBcIssqn;


    ///     Alíquota do ISSQN

    #[SpedCampos(3, "ALIQ_ISSQN", "N", 6, 2, true, 2)]
    public Decimal $AliqIssqn;


    ///     Valor do ISSQN

    #[SpedCampos(4, "VL_ISSQN", "N", 0, 2, true, 2)]
    public Decimal $VlIssqn;

    public function __construct()
    {
        parent::__construct("C172");
    }
}

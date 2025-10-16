<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC591 extends RegistroSped
{
    #[SpedCampos(2, "VL_FCP_OP", "N", 12, 2, false, 2)]
    public Decimal $VlFcpOp;

    #[SpedCampos(3, "VL_FCP_ST", "N", 12, 2, false, 2)]
    public Decimal $VlFcpSt;

    public function __construct()
    {
        parent::__construct("C591");
    }
}

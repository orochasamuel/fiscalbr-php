<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD761 extends RegistroSped
{
    #[SpedCampos(2, "VL_FCP_OP", "N", 0, 2, true, 17)]
    public Decimal $VlFcpOp;

    public function __construct()
    {
        parent::__construct("D761");
    }
}

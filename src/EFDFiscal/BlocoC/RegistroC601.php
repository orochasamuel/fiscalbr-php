<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC601 extends RegistroSped
{
    #[SpedCampos(2, "NUM_DOC_CANC", "N", 9, 0, true, 2)]
    public string $NumDocCanc;

    public function __construct()
    {
        parent::__construct("C601");
    }
}

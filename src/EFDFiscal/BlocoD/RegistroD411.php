<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD411 extends RegistroSped
{
    #[SpedCampos(2, "NUM_DOC_CANC", "N", 0, 0, true, 2)]
    public string $NumDocCanc;

    public function __construct()
    {
        parent::__construct("D411");
    }
}

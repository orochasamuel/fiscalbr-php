<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC111 extends RegistroSped
{
    #[SpedCampos(2, "NUM_PROC", "C", 15, 0, true, 2)]
    #[SpedCampos(2, "NUM_PROC", "C", 60, 0, true, 17)]
    public string $NumProc;


    ///     Indicador da origem do processo:
    ///     0 - SEFAZ;
    ///     1 - Justiça Federal;
    ///     2 - Justiça Estadual;
    ///     3 - SECEX/SRF;
    ///     9 - Outros.

    #[SpedCampos(3, "IND_PROC", "C", 1, 0, true, 2)]
    public int $IndProc;

    public function __construct()
    {
        parent::__construct("C111");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC105 extends RegistroSped
{
    #[SpedCampos(2, "OPER", "N", 1, 0, true, 3)]
    public int $Oper;


    ///     Sigla da UF de destino do ICMS_ST

    #[SpedCampos(3, "UF", "C", 2, 0, true, 3)]
    public string $Uf;

    public function __construct()
    {
        parent::__construct("C105");
    }
}

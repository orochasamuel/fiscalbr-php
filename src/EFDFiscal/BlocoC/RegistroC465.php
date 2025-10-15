<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC465 extends RegistroSped
{
    #[SpedCampos(2, "CHV_CFE", "N", 44, 0, true, 2)]
    public string $ChvCfe;


    ///     Número do contador de cupom fiscal

    #[SpedCampos(3, "NUM_CCF", "N", 9, 0, true, 2)]
    public string $NumCcf;

    public function __construct()
    {
        parent::__construct("C465");
    }
}

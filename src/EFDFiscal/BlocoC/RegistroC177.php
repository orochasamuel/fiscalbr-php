<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC177 extends RegistroSped
{
    #[SpedCampos(2, "COD_SELO_IPI", "C", 6, 0, true, 2)]
    public string $CodSeloIpi;


    ///     Quantidade de selo de controle de IPI aplicada

    #[SpedCampos(3, "QT_SELO_IPI", "N", 12, 0, true, 2)]
    public string $QtSeloIpi;

    public function __construct()
    {
        parent::__construct("C177");
    }
}

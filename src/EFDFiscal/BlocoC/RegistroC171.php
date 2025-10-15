<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC171 extends RegistroSped
{
    #[SpedCampos(2, "NUM_TANQUE", "C", 3, 0, true, 2)]
    public string $NumTanque;


    ///     Quantidade ou volume armazenado

    #[SpedCampos(3, "QTDE", "N", 0, 3, true, 2)]
    public Decimal $Qtde;

    public function __construct()
    {
        parent::__construct("C171");
    }
}

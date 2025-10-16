<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC791 extends RegistroSped
{
    #[SpedCampos(2, "UF", "C", 2, 0, true, 2)]
    public string $Uf;


    ///     Valor da base de cálculo do ICMS substituição tributária

    #[SpedCampos(3, "VL_BC_ICMS_ST", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcmsSt;


    ///     Valor do ICMS retido por substituição tributária

    #[SpedCampos(4, "VL_ICMS_ST", "N", 0, 2, true, 2)]
    public Decimal $VlIcmsSt;

    public function __construct()
    {
        parent::__construct("C791");
    }
}

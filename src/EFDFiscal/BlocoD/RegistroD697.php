<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD697 extends RegistroSped
{
    #[SpedCampos(2, "Uf", "C", 2, 0, true, 2)]
    public string $Uf;

    // <summary>
    ///    Valor da base de cálculo do ICMS

    #[SpedCampos(3, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcms;


    ///     Valor do ICMS 

    #[SpedCampos(4, "VL_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlIcms;

    public function __construct()
    {
        parent::__construct("D697");
    }
}

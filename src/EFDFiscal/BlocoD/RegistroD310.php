<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD310 extends RegistroSped
{
    #[SpedCampos(2, "COD_MUN_ORIG", "N", 7, 0, true, 2)]
    public string $CodMunOrig;


    ///    Valor total da prestação de serviço

    #[SpedCampos(3, "VL_SERV", "N", 0, 2, true, 2)]
    public Decimal $VlServ;


    ///    Valor total da base de cálculo do ICMS

    #[SpedCampos(4, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;


    ///    Valor total do ICMS

    #[SpedCampos(5, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;

    public function __construct()
    {
        parent::__construct("D310");
    }
}

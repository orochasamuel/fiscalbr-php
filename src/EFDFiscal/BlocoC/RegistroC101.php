<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC101 extends RegistroSped
{
    #[SpedCampos(2, "VL_FCP_UF_DEST", "N", 0, 2, true, 2)]
    public Decimal $VlFcpUfDest;


    ///     Valor total do ICMS Interestadual para a UF de destino

    #[SpedCampos(3, "VL_ICMS_UF_DEST", "N", 0, 2, true, 2)]
    public Decimal $VlIcmsUfDest;


    ///     Valor total do ICMS Interestadual para a UF do remetente

    #[SpedCampos(4, "VL_ICMS_UF_REM", "N", 0, 2, true, 2)]
    public Decimal $VlIcmsUfRem;

    public function __construct()
    {
        parent::__construct("C101");
    }
}

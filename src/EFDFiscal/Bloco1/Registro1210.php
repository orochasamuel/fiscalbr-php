<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1210 extends RegistroSped
{
    #[SpedCampos(2, "TIPO_UTIL", "C", 4, 0, true, 2)]
    public string $TipoUtil;

    #[SpedCampos(3, "NR_DOC", "C", 0, 0, false, 2)]
    public string $NrDoc;

    #[SpedCampos(4, "VL_CRED_UTIL", "N", 0, 2, true, 2)]
    public Decimal $VlCredUtil;

    #[SpedCampos(5, "CHV_DOCe", "C", 44, 0, false, 2)]
    public string $ChvDocE;

    public function __construct()
    {
        parent::__construct("1210");
    }
}

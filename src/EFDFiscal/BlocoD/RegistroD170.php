<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD170 extends RegistroSped
{
    #[SpedCampos(2, "COD_PART_CONSG", "C", 60, 0, false, 2)]
    public string $CodPartConsg;

    #[SpedCampos(3, "COD_PART_RED", "C", 60, 0, false, 2)]
    public string $CodPartRed;

    #[SpedCampos(4, "COD_MUN_ORIG", "N", 7, 0, true, 2)]
    public string $CodMunOrig;

    #[SpedCampos(5, "COD_MUN_DEST", "N", 7, 0, true, 2)]
    public string $CodMunDest;

    #[SpedCampos(6, "OTM", "C", 0, 0, true, 2)]
    public string $Otm;

    #[SpedCampos(7, "IND_NAT_FRT", "C", 1, 0, true, 2)]
    public string $IndNatFrt;

    #[SpedCampos(8, "VL_LIQ_FRT", "N", 0, 2, true, 2)]
    public string $VlLinqFrt;

    #[SpedCampos(9, "VL_GRIS", "N", 0, 2, false, 2)]
    public string $VlGris;

    #[SpedCampos(10, "VL_PDG", "N", 0, 2, false, 2)]
    public string $VlPdg;

    #[SpedCampos(11, "VL_OUT", "N", 0, 2, false, 2)]
    public string $VlOut;

    #[SpedCampos(12, "VL_FRT", "N", 0, 2, true, 2)]
    public string $VlFrt;

    #[SpedCampos(13, "VEIC_ID", "C", 7, 0, false, 2)]
    public string $VeicId;

    #[SpedCampos(14, "UF_ID", "C", 2, 0, false, 2)]
    public string $UfId;

    public function __construct()
    {
        parent::__construct("D170");
    }
}

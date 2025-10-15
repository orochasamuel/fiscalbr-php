<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1010 extends RegistroSped
{
    #[SpedCampos(2, "IND_EXP", "LE", 1, 0, true, 6)]
    public string $IndExp;

    #[SpedCampos(3, "IND_CCRF", "LE", 1, 0, true, 6)]
    public string $IndCcrf;

    #[SpedCampos(4, "IND_COMB", "LE", 1, 0, true, 6)]
    public string $IndComb;

    #[SpedCampos(5, "IND_USINA", "LE", 1, 0, true, 6)]
    public string $IndUsina;

    #[SpedCampos(6, "IND_VA", "LE", 1, 0, true, 6)]
    public string $IndVa;

    #[SpedCampos(7, "IND_EE", "LE", 1, 0, true, 6)]
    public string $IndEe;

    #[SpedCampos(8, "IND_CART", "LE", 1, 0, true, 6)]
    public string $IndCart;

    #[SpedCampos(9, "IND_FORM", "LE", 1, 0, true, 6)]
    public string $IndForm;

    #[SpedCampos(10, "IND_AER", "LE", 1, 0, true, 6)]
    public string $IndAer;

    #[SpedCampos(11, "IND_GIAF1", "LE", 1, 0, true, 6)]
    public string $IndGiaf1;

    #[SpedCampos(12, "IND_GIAF3", "LE", 1, 0, true, 6)]
    public string $IndGiaf3;

    #[SpedCampos(13, "IND_GIAF4", "LE", 1, 0, true, 6)]
    public string $IndGiaf4;

    #[SpedCampos(14, "IND_REST_RESSARC_COMPL_ICMS", "LE", 1, 0, true, 6)]
    public string $IndRestRessarcComplIcms;

    public function __construct()
    {
        parent::__construct("1010");
    }
}

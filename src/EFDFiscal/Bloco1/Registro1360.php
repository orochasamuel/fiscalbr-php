<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1360 extends RegistroSped
{
    #[SpedCampos(2, "NUM_LACRE", "C", 20, 0, true, 2)]
    public string $NumLacre;

    #[SpedCampos(3, "DT_APLICACAO", "N", 8, 0, true, 2)]
    public DateTime $DtAplicacao;

    public function __construct()
    {
        parent::__construct("1360");
    }
}

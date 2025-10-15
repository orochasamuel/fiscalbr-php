<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1910 extends RegistroSped
{
    ///     Data inicial da sub-apuração

    #[SpedCampos(2, "DT_INI", "N", 8, 0, true, 4)]
    public DateTime $DtIni;


    ///     Data final da sub-apuração

    #[SpedCampos(3, "DT_FIN", "N", 8, 0, true, 4)]
    public DateTime $DtFin;

    private ?Registro1920 $Registro1920 = null;

    public function __construct()
    {
        parent::__construct("1910");
    }
}

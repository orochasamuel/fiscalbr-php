<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE100 extends RegistroSped
{
    /// <summary>
    ///     Data inicial a que a apuração se refere.
    /// </summary>
    #[SpedCampos(2, "DT_INI", "N", 8, 0, true, 2)]
    public DateTime $DtIni;

    /// <summary>
    ///     Data final a que a apuração se refere.
    /// </summary>
    #[SpedCampos(3, "DT_FIN", "N", 8, 0, true, 2)]
    public DateTime $DtFin;

    public ?RegistroE110 $RegistroE110 = null;

    public function __construct()
    {
        parent::__construct("E100");
    }
}

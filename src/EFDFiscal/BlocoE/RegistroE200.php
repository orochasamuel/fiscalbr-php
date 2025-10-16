<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE200 extends RegistroSped
{
    /// <summary>
    ///     Sigla da unidade da federação a que se refere a apuração do ICMS ST
    /// </summary>
    #[SpedCampos(2, "UF", "C", 2, 0, true, 2)]
    public string $Uf;

    /// <summary>
    ///     Data inicial a que a apuração se refere
    /// </summary>
    #[SpedCampos(3, "DT_INI", "N", 8, 0, true, 2)]
    public DateTime $DtIni;

    /// <summary>
    ///     Data final a que a apuação se refere
    /// </summary>
    #[SpedCampos(4, "DT_FUN", "N", 8, 0, true, 2)]
    public DateTime $DtFin;

    public ?RegistroE210 $RegistroE210 = null;

    public function __construct()
    {
        parent::__construct("E200");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE300 extends RegistroSped
{
    /// <summary>
    ///     Sigla da unidade da federação a que se refere a apuração do ICMS Diferencial de Alíquota da UF de Origem/Destino
    /// </summary>
    #[SpedCampos(2, "UF", "C", 2, 0, true, 2)]
    public string $Uf;

    /// <summary>
    ///     Data inicial a que a apuração se refere
    /// </summary>
    #[SpedCampos(3, "DT_INI", "N", 8, 0, true, 2)]
    public DateTime $DtIni;

    /// <summary>
    ///     Data final a que a apuração se refere
    /// </summary>
    #[SpedCampos(4, "DT_FIN", "N", 8, 0, true, 2)]
    public DateTime $DtFin;

    public ?RegistroE310 $RegistroE310 = null;

    public function __construct()
    {
        parent::__construct("E300");
    }
}

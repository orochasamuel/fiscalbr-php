<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE500 extends RegistroSped
{
    /// <summary>
    ///     Indicador de período de apuração do IPI
    /// </summary>
    /// <remarks>
    ///     0 - Mensal
    ///     1 - Decendial
    /// </remarks>
    #[SpedCampos(2, "IND_APUR", "C", 1, 0, true, 2)]
    public string $IndApur;

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

    /** 
     * @var RegistroE510[] 
     */
    private array $RegistrosE510 = [];

    public ?RegistroE520 $RegistroE520 = null;

    public function __construct()
    {
        parent::__construct("E500");
    }
}

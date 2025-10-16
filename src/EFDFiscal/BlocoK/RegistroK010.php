<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK010 extends RegistroSped
{
    /// <summary>
    ///      Indicador de Tipo de Layout
    /// </summary>
    /// <remarks>
    ///     0 – Leiaute simplificado
    ///     <para />
    ///     1 - Leiaute completo
    ///     <para />
    ///     2 – Leiaute restrito aos saldos de estoque
    /// </remarks>
    #[SpedCampos(2, "IND_TP_LEIAUTE", "C", 1, 0, true, 17)]
    public int $IndTpLeiaute;

    public function __construct()
    {
        parent::__construct("K010");
    }
}

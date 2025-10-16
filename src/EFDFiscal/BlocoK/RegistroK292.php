<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK292 extends RegistroSped
{
    /// <summary>
    ///     Código do insumo/componente consumido (campo 02 do Registro 0200)
    /// </summary>
    #[SpedCampos(2, "COD_ITEM", "C", 60, 0, true, 13)]
    public string $CodItem;

    /// <summary>
    ///    Quantidade consumida
    /// </summary>
    #[SpedCampos(3, "QTD", "N", 0, 3, true, 13)]
    public Decimal $Qtd;

    public function __construct()
    {
        parent::__construct("K292");
    }
}

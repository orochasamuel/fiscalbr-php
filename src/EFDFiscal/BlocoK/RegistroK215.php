<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK215 extends RegistroSped
{
    /// <summary>
    ///     Código do item de destino (campo 02 do Registro 0200)
    /// </summary>
    #[SpedCampos(2, "COD_ITEM_DES", "C", 60, 0, true, 11)]
    public string $CodItemDes;

    /// <summary>
    ///    Quantidade de destino – entrada em estoque
    /// </summary>
    #[SpedCampos(3, "QTD_DES", "N", 0, 3, true, 11)]
    public Decimal $QtdDes;

    public function __construct()
    {
        parent::__construct("K215");
    }
}

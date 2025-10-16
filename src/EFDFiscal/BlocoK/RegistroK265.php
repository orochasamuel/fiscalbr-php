<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK265 extends RegistroSped
{
    /// <summary>
    ///     Código da mercadoria (campo 02 do Registro 0200)
    /// </summary>
    #[SpedCampos(2, "COD_ITEM", "C", 60, 0, true, 11)]
    public string $CodItem;

    /// <summary>
    ///    Quantidade consumida – saída do estoque
    /// </summary>
    #[SpedCampos(3, "QTD_CONS", "N", 0, 3, false, 11)]
    public Decimal $QtdCons;

    /// <summary>
    ///    Quantidade retornada – entrada em estoque
    /// </summary>
    #[SpedCampos(4, "QTD_RET", "N", 0, 3, false, 11)]
    public Decimal $QtdRet;

    public function __construct()
    {
        parent::__construct("K265");
    }
}

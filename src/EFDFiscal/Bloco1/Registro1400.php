<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1400 extends RegistroSped
{
    #[SpedCampos(2, "COD_ITEM_IPM", "C", 60, 0, true, 2)]
    public string $CodItemIpm;

    #[SpedCampos(3, "MUN", "N", 7, 0, true, 2)]
    public string $Mun;

    #[SpedCampos(4, "VALOR", "N", 0, 2, true, 2)]
    public Decimal $Valor;

    public function __construct()
    {
        parent::__construct("1400");
    }
}

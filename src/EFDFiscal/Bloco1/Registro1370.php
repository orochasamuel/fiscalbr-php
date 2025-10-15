<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1370 extends RegistroSped
{
    #[SpedCampos(2, "NUM_BICO", "N", 3, 0, true, 2)]
    public int $NumBico;

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;

    #[SpedCampos(4, "NUM_TANQUE", "C", 3, 0, true, 2)]
    public string $NumTanque;

    public function __construct()
    {
        parent::__construct("1370");
    }
}

<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1390 extends RegistroSped
{
    #[SpedCampos(2, "COD_PROD", "N", 2, 0, true, 6)]
    public int $CodProd;

    /** 
     * @var Registro1391[] 
     */
    private array $Registros1391 = [];

    public function __construct()
    {
        parent::__construct("1390");
    }
}

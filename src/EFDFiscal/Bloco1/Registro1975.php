<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1975 extends RegistroSped
{
    #[SpedCampos(2, "ALIQ_IMP_BASE", "N", 0, 2, true, 2)]
    public int $AliqImpBase;


    ///     Saídas incentivadas de PI 

    #[SpedCampos(3, "G3_10", "N", 0, 2, true, 2)]
    public int $G310;


    ///    Importações-base para o crédito presumido 

    #[SpedCampos(4, "G3_11", "N", 0, 2, true, 2)]
    public int $G311;


    ///   Crédito presumido nas saídas internas

    #[SpedCampos(5, "G3_12", "N", 0, 2, true, 2)]
    public int $G312;

    public function __construct()
    {
        parent::__construct("1975");
    }
}

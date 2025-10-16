<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1600 extends RegistroSped
{
    ///     Código do participante (campo 02 do Registro 0150): identificação da administradora do cartão de débito/crédito
    #[SpedCampos(2, "COD_PART", "C", 60, 0, true, 2)]
    public string $CodPart;

    ///     Valor total das operações realizadas no período referente a Cartão de Crédito
    #[SpedCampos(3, "TOT_CREDITO", "N", 15, 2, true, 2)]
    public Decimal $TotCredito;

    ///     Valor total das operações realizadas no período referente a Cartão de Débito
    #[SpedCampos(4, "TOT_DEBITO", "N", 15, 2, true, 2)]
    public Decimal $TotDebito;

    public function __construct()
    {
        parent::__construct("1600");
    }
}

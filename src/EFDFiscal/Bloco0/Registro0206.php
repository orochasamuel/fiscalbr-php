<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0206 extends RegistroSped
{
    #[SpedCampos(2, "COD_COMB", "C", PHP_INT_MAX, 0, true, 2)]
    public string $CodComb;

    public function __construct()
    {
        parent::__construct("0206");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->CodComb ??= '';
    }
}

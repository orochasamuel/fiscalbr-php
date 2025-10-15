<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0460 extends RegistroSped
{
    #[SpedCampos(2, "COD_OBS", "C", 6, 0, true, 2)]
    public string $CodObs;

    #[SpedCampos(3, "TXT", "C", PHP_INT_MAX, 0, true, 2)]
    public string $Txt;

    public function __construct()
    {
        parent::__construct("0460");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->CodObs ??= '';
        $this->Txt ??= '';
    }
}

<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0450 extends RegistroSped
{
    #[SpedCampos(2, "COD_INF", "C", 6, 0, true, 2)]
    public string $CodInf;

    #[SpedCampos(3, "TXT", "C", PHP_INT_MAX, 0, true, 2)]
    public string $Txt;

    public function __construct()
    {
        parent::__construct("0450");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->CodInf ??= '';
        $this->Txt ??= '';
    }
}

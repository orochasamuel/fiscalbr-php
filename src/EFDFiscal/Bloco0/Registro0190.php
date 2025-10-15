<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0190 extends RegistroSped
{
    #[SpedCampos(2, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;

    #[SpedCampos(3, "DESCR", "C", PHP_INT_MAX, 0, true, 2)]
    public string $Descr;

    public function __construct()
    {
        parent::__construct("0190");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->Unid ??= '';
        $this->Descr ??= '';
    }
}

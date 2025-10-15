<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0400 extends RegistroSped
{
    #[SpedCampos(2, "COD_NAT", "C", 10, 0, true, 2)]
    public string $CodNat;

    #[SpedCampos(3, "DESCR_NAT", "C", PHP_INT_MAX, 0, true, 2)]
    public string $DescrNat;

    public function __construct()
    {
        parent::__construct("0400");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->CodNat ??= '';
        $this->DescrNat ??= '';
    }
}

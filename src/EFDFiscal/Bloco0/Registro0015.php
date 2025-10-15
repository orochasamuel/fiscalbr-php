<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0015 extends RegistroSped
{
    #[SpedCampos(2, "UF_ST", "C", 2, 0, true, 2)]
    public string $UfSt;

    #[SpedCampos(3, "IE_ST", "C", 14, 0, true, 2)]
    public string $IeSt;

    public function __construct()
    {
        parent::__construct("0015");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->UfSt ??= '';
        $this->IeSt ??= '';
    }

    public function comUfSt(string $value): self
    {
        $this->UfSt = $value;
        return $this;
    }
    
    public function comIeSt(string $value): self
    {
        $this->IeSt = $value;
        return $this;
    }
}

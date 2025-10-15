<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0002 extends RegistroSped
{
    #[SpedCampos(2, "CLAS_ESTAB_IND", "C", 2, 0, true, 2)]
    public string $ClassEstabInd;

    public function __construct()
    {
        parent::__construct("0002");
        
        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->ClassEstabInd ??= '';
    }

    public function comTipoEstabelecimento(string $value): self
    {
        $this->ClassEstabInd = $value;
        return $this;
    }

    public function getClassEstabInd(): string
    {
        return $this->ClassEstabInd;
    }

    public function setClassEstabInd(string $value): void
    {
        $this->ClassEstabInd = $value;
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoH;

use FiscalBr\Core\Sped\Interfaces\BlocoSpedInterface;

class BlocoH implements BlocoSpedInterface
{
    public RegistroH001 $RegistroH001;
    public RegistroH990 $RegistroH990;

    public function __construct()
    {
        $this->RegistroH001 = new RegistroH001();
        $this->RegistroH990 = new RegistroH990();
    }

    public function setBlocoComMovimento(): void
    {
        $this->RegistroH001 = new RegistroH001(true);
    }

    public function setBlocoSemMovimento(): void
    {
        $this->RegistroH001 = new RegistroH001(false);
    }

    public function getRegH001(): RegistroH001
    {
        return $this->RegistroH001;
    }

    public function setRegH001(RegistroH001 $value): void
    {
        $this->RegistroH001 = $value;
    }
}
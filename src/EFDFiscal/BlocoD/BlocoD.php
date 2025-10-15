<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\Interfaces\BlocoSpedInterface;

class BlocoD implements BlocoSpedInterface
{
    public RegistroD001 $RegistroD001;
    public RegistroD990 $RegistroD990;

    public function __construct()
    {
        $this->RegistroD001 = new RegistroD001();
        $this->RegistroD990 = new RegistroD990();
    }

    public function setBlocoComMovimento(): void
    {
        $this->RegistroD001 = new RegistroD001(true);
    }

    public function setBlocoSemMovimento(): void
    {
        $this->RegistroD001 = new RegistroD001(false);
    }

    public function getRegD001(): RegistroD001
    {
        return $this->RegistroD001;
    }

    public function setRegD001(RegistroD001 $value): void
    {
        $this->RegistroD001 = $value;
    }
}
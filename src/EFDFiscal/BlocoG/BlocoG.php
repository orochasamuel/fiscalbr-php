<?php

namespace FiscalBr\EFDFiscal\BlocoG;

use FiscalBr\Core\Sped\Interfaces\BlocoSpedInterface;

class BlocoG implements BlocoSpedInterface
{
    public RegistroG001 $RegistroG001;
    public RegistroG990 $RegistroG990;

    public function __construct()
    {
        $this->RegistroG001 = new RegistroG001();
        $this->RegistroG990 = new RegistroG990();
    }

    public function setBlocoComMovimento(): void
    {
        $this->RegistroG001 = new RegistroG001(true);
    }

    public function setBlocoSemMovimento(): void
    {
        $this->RegistroG001 = new RegistroG001(false);
    }

    public function getRegG001(): RegistroG001
    {
        return $this->RegistroG001;
    }

    public function setRegG001(RegistroG001 $value): void
    {
        $this->RegistroG001 = $value;
    }
}
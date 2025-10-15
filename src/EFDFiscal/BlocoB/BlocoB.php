<?php

namespace FiscalBr\EFDFiscal\BlocoB;

use FiscalBr\Core\Sped\Interfaces\BlocoSpedInterface;

class BlocoB implements BlocoSpedInterface
{
    public RegistroB001 $RegistroB001;
    public RegistroB990 $RegistroB990;

    public function __construct()
    {
        $this->RegistroB001 = new RegistroB001();
        $this->RegistroB990 = new RegistroB990();
    }

    public function setBlocoComMovimento(): void
    {
        $this->RegistroB001 = new RegistroB001(true);
    }

    public function setBlocoSemMovimento(): void
    {
        $this->RegistroB001 = new RegistroB001(false);
    }

    public function getRegB001(): RegistroB001
    {
        return $this->RegistroB001;
    }

    public function setRegB001(RegistroB001 $value): void
    {
        $this->RegistroB001 = $value;
    }
}
<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use FiscalBr\Core\Sped\Interfaces\BlocoSpedInterface;

class BlocoE implements BlocoSpedInterface
{
    public RegistroE001 $RegistroE001;
    public RegistroE990 $RegistroE990;

    public function __construct()
    {
        $this->RegistroE001 = new RegistroE001();
        $this->RegistroE990 = new RegistroE990();
    }

    public function setBlocoComMovimento(): void
    {
        $this->RegistroE001 = new RegistroE001(true);
    }

    public function setBlocoSemMovimento(): void
    {
        $this->RegistroE001 = new RegistroE001(false);
    }

    public function getRegE001(): RegistroE001
    {
        return $this->RegistroE001;
    }

    public function setRegE001(RegistroE001 $value): void
    {
        $this->RegistroE001 = $value;
    }
}
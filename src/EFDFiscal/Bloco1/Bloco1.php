<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\Interfaces\BlocoSpedInterface;

class Bloco1 implements BlocoSpedInterface
{
    public Registro1001 $Registro1001;
    public Registro1990 $Registro1990;

    public function __construct()
    {
        $this->Registro1001 = new Registro1001();
        $this->Registro1990 = new Registro1990();
    }

    public function setBlocoComMovimento(): void
    {
        $this->Registro1001 = new Registro1001(true);
    }

    public function setBlocoSemMovimento(): void
    {
        $this->Registro1001 = new Registro1001(false);
    }

    public function getReg1001(): Registro1001
    {
        return $this->Registro1001;
    }

    public function setReg1001(Registro1001 $value): void
    {
        $this->Registro1001 = $value;
    }
}
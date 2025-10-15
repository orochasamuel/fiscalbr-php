<?php

namespace FiscalBr\EFDFiscal\Bloco9;

use FiscalBr\Core\Sped\Interfaces\BlocoSpedInterface;

class Bloco9 implements BlocoSpedInterface
{
    public Registro9001 $Registro9001;
    public Registro9990 $Registro9990;
    public Registro9999 $Registro9999;

    public function __construct()
    {
        $this->Registro9001 = new Registro9001();
        $this->Registro9990 = new Registro9990(0);
        $this->Registro9999 = new Registro9999(0);
    }

    public function setBlocoComMovimento(): void
    {
        $this->Registro9001 = new Registro9001(true);
    }

    public function setBlocoSemMovimento(): void
    {
        $this->Registro9001 = new Registro9001(false);
    }

    public function getReg9001(): Registro9001
    {
        return $this->Registro9001;
    }

    public function setReg9001(Registro9001 $value): void
    {
        $this->Registro9001 = $value;
    }
}

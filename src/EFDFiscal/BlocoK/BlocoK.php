<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use FiscalBr\Core\Sped\Interfaces\BlocoSpedInterface;

class BlocoK implements BlocoSpedInterface
{
    public RegistroK001 $RegistroK001;
    public RegistroK990 $RegistroK990;

    public function __construct()
    {
        $this->RegistroK001 = new RegistroK001();
        $this->RegistroK990 = new RegistroK990();
    }

    public function setBlocoComMovimento(): void
    {
        $this->RegistroK001 = new RegistroK001(true);
    }

    public function setBlocoSemMovimento(): void
    {
        $this->RegistroK001 = new RegistroK001(false);
    }

    public function getRegK001(): RegistroK001
    {
        return $this->RegistroK001;
    }

    public function setRegK001(RegistroK001 $value): void
    {
        $this->RegistroK001 = $value;
    }
}
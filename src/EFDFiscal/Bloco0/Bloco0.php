<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\Interfaces\BlocoSpedInterface;

class Bloco0 implements BlocoSpedInterface
{
    public Registro0000 $Registro0000;
    public Registro0001 $Registro0001;
    public Registro0990 $Registro0990;

    public function __construct(
        Registro0000 $reg0000
    )
    {
        // Inicializa o Registro0000
        $this->Registro0000 = $reg0000;
        
        $this->Registro0001 = new Registro0001();

        $this->Registro0990 = new Registro0990();
    }

    // Getter para Registro0000
    public function getReg0000(): Registro0000
    {
        return $this->Registro0000;
    }

    // Setter para Registro0000
    public function setReg0000(Registro0000 $value): void
    {
        $this->Registro0000 = $value;
    }
}
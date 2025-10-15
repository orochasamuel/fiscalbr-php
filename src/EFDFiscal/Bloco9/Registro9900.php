<?php

namespace FiscalBr\EFDFiscal\Bloco9;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro9900 extends RegistroSped
{
    #[SpedCampos(2, "REG_BLC", "C", 4, 0, true, 2)]
    public string $RegBlc;

    #[SpedCampos(3, "QTD_REG_BLC", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdRegBlc;

    public function __construct(string $currentRegBlc, int $currentQtdRegBlc)
    {
        parent::__construct("9900");
        $this->RegBlc = $currentRegBlc;
        $this->QtdRegBlc = $currentQtdRegBlc;
    }

    // /** 
    //  * @var Registro9990[] 
    //  */
    // private array $Reg9990s = [];

    // public function adicionarUmRegistro9990(Registro9990 $value): void
    // {
    //     $this->Reg9990s[] = $value;
    // }

    // public function obterContagemRegistros9990(): int
    // {
    //     return count($this->Reg9990s);
    // }
}

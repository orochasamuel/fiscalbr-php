<?php

namespace FiscalBr\EFDFiscal\Bloco9;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro9001 extends RegistroSped
{
    #[SpedCampos(2, "IND_MOV", "N", 1, 0, true, 2)]
    public int $IndMov;

    /** 
     * @var Registro9900[] 
     */
    private array $Reg9900s = [];

    public function __construct(bool $temMovimento = false)
    {
        parent::__construct("9001");
        $this->IndMov = $temMovimento === false ? 1 : 0;
    }

    public function comIndicadorMovimento(int $value): self
    {
        $this->IndMov = $value;
        return $this;
    }

    public function temMovimento(bool $temMovimento): void
    {
        $this->IndMov = $temMovimento === false ? 1 : 0;
    }

    public function getIndMov(): int
    {
        return $this->IndMov;
    }

    public function setIndMov(int $value): void
    {
        $this->IndMov = $value;
    }

    public function verificaSeBlocoPossuiDados(): bool
    {
        return count($this->Reg9900s) > 0;
    }

    public function adicionarUmRegistro9900(Registro9900 $value): void
    {
        $this->Reg9900s[] = $value;

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

        public function obterContagemRegistros9900(): int
    {
        return count($this->Reg9900s);
    }
}

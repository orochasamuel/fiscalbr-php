<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK001 extends RegistroSped
{
    #[SpedCampos(2, "IND_MOV", "N", 1, 0, true, 2)]
    public int $IndMov;

    private ?RegistroK010 $RegistroK010 = null;

    /** 
     * @var RegistroK100[]
     */
    private array $RegistrosK100 = [];

    public function __construct(bool $temMovimento = false)
    {
        parent::__construct("K001");
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
        return count($this->RegistrosK100) > 0;
    }

    public function adicionarUmRegistroK100(RegistroK100 $value, string $identificador): void
    {
        $this->RegistrosK100[$identificador] = $value;

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function removerUmRegistroK100(string $identificador): void
    {
        unset($this->RegistrosK100[$identificador]);

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function obterTodosRegistrosK100(): array
    {
        return $this->RegistrosK100;
    }
}

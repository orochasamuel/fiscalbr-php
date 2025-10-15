<?php

namespace FiscalBr\EFDFiscal\BlocoH;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroH001 extends RegistroSped
{
    #[SpedCampos(2, "IND_MOV", "N", 1, 0, true, 2)]
    public int $IndMov;

    /** 
     * @var RegistroH005[]
     */
    private array $RegistrosH005 = [];

    public function __construct(bool $temMovimento = false)
    {
        parent::__construct("H001");
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
}

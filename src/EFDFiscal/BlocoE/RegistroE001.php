<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE001 extends RegistroSped
{
    #[SpedCampos(2, "IND_MOV", "N", 1, 0, true, 2)]
    public int $IndMov;

    /** 
     * @var RegistroE100[] 
     */
    private array $RegistrosE100 = [];

    /** 
     * @var RegistroE200[] 
     */
    private array $RegistrosE200 = [];

    /** 
     * @var RegistroE300[] 
     */
    private array $RegistrosE300 = [];

    /** 
     * @var RegistroE500[] 
     */
    private array $RegistrosE500 = [];

    public function __construct(bool $temMovimento = false)
    {
        parent::__construct("E001");
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

    public function adicionarUmRegistroE100(RegistroE100 $value, string $sequencial): void
    {
        $this->RegistrosE100[$sequencial] = $value;
    }

    public function removerUmRegistroE100(string $sequencial): void
    {
        unset($this->RegistrosE100[$sequencial]);
    }
}

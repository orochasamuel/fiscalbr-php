<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD001 extends RegistroSped
{
    #[SpedCampos(2, "IND_MOV", "N", 1, 0, true, 2)]
    public int $IndMov;

    /** 
     * @var RegistroD100[] 
     */
    private array $RegistrosD100 = [];

    /** 
     * @var RegistroD300[] 
     */
    private array $RegistrosD300 = [];

    /** 
     * @var RegistroD350[] 
     */
    private array $RegistrosD350 = [];

    /** 
     * @var RegistroD400[] 
     */
    private array $RegistrosD400 = [];

    /** 
     * @var RegistroD500[] 
     */
    private array $RegistrosD500 = [];

    /** 
     * @var RegistroD600[] 
     */
    private array $RegistrosD600 = [];

    /** 
     * @var RegistroD695[] 
     */
    private array $RegistrosD695 = [];

    public function __construct(bool $temMovimento = false)
    {
        parent::__construct("D001");
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

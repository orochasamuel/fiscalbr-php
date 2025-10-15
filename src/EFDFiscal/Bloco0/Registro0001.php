<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0001 extends RegistroSped
{
    #[SpedCampos(2, "IND_MOV", "N", 1, 0, true, 2)]
    public int $IndMov;

    private ?Registro0002 $registro0002 = null;
    private ?Registro0005 $registro0005 = null;

    /** 
     * @var Registro0015[] 
     */
    private array $Registros0015 = [];

    /** 
     * @var Registro0100[] 
     */
    private array $Registros0100 = [];

    /** 
     * @var Registro0150[] 
     */
    private array $Registros0150 = [];

    /** 
     * @var Registro0190[] 
     */
    private array $Registros0190 = [];

    /** 
     * @var Registro0200[] 
     */
    private array $Registros0200 = [];

    /** 
     * @var Registro0300[] 
     */
    private array $Registros0300 = [];

    /** 
     * @var Registro0400[] 
     */
    private array $Registros0400 = [];

    /** 
     * @var Registro0450[] 
     */
    private array $Registros0450 = [];

    /** 
     * @var Registro0460[] 
     */
    private array $Registros0460 = [];

    /** 
     * @var Registro0500[] 
     */
    private array $Registros0500 = [];

    /** 
     * @var Registro0600[] 
     */
    private array $Registros0600 = [];

    public function __construct(bool $temMovimento = false)
    {
        parent::__construct("0001");
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

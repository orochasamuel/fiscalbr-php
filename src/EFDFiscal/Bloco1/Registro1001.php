<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1001 extends RegistroSped
{
    #[SpedCampos(2, "IND_MOV", "N", 1, 0, true, 2)]
    public int $IndMov;

    private ?Registro1010 $registro1010 = null;

    /** 
     * @var Registro1100[] 
     */
    private array $Registros1100 = [];

    /** 
     * @var Registro1200[] 
     */
    private array $Registros1200 = [];

    private ?Registro1250 $registro1250 = null;

    /** 
     * @var Registro1300[] 
     */
    private array $Registros1300 = [];

    /** 
     * @var Registro1350[] 
     */
    private array $Registros1350 = [];

    /** 
     * @var Registro1390[] 
     */
    private array $Registros1390 = [];

    /** 
     * @var Registro1400[] 
     */
    private array $Registros1400 = [];

    /** 
     * @var Registro1500[] 
     */
    private array $Registros1500 = [];

    /** 
     * @var Registro1600[] 
     */
    private array $Registros1600 = [];

    /** 
     * @var Registro1601[] 
     */
    private array $Registros1601 = [];

    /** 
     * @var Registro1700[] 
     */
    private array $Registros1700 = [];

    private ?Registro1800 $registro1800 = null;

    /** 
     * @var Registro1900[] 
     */
    private array $Registros1900 = [];

    /** 
     * @var Registro1960[] 
     */
    private array $Registros1960 = [];

    /** 
     * @var Registro1970[] 
     */
    private array $Registros1970 = [];

    private ?Registro1980 $registro1980 = null;

    public function __construct(bool $temMovimento = false)
    {
        parent::__construct("1001");
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
        return
            count($this->Registros1100) > 0 ||
            count($this->Registros1200) > 0 ||
            count($this->Registros1300) > 0 ||
            count($this->Registros1350) > 0 ||
            count($this->Registros1390) > 0 ||
            count($this->Registros1400) > 0 ||
            count($this->Registros1500) > 0 ||
            count($this->Registros1600) > 0 ||
            count($this->Registros1601) > 0 ||
            count($this->Registros1700) > 0 ||
            count($this->Registros1900) > 0 ||
            count($this->Registros1960) > 0 ||
            count($this->Registros1970) > 0;
    }

    public function adicionarUmRegistroC100(Registro1100 $value, string $chave): void
    {
        $this->Registros1100[$chave] = $value;

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function removerUmRegistroC100(string $chave): void
    {
        unset($this->Registros1100[$chave]);

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function obterUmRegistro1100(string $chave): ?Registro1100
    {
        return $this->Registros1100[$chave] ?? null;
    }
    
    /**
     * @return Registro1100[]
     */
    public function obterTodosRegistros1100(): array
    {
        return $this->Registros1100;
    }
}

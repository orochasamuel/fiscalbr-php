<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;
use FiscalBr\Core\Sped\SpedOrdemRegistro;

//#[SpedOrdemRegistro(001)]
class RegistroC001 extends RegistroSped
{
    #[SpedCampos(2, "IND_MOV", "N", 1, 0, true, 2)]
    public int $IndMov;

    /** 
     * @var RegistroC100[] 
     */
    private array $RegistrosC100 = [];

    /** 
     * @var RegistroC300[] 
     */
    private array $RegistrosC300 = [];

    /** 
     * @var RegistroC350[] 
     */
    private array $RegistrosC350 = [];

    /** 
     * @var RegistroC400[] 
     */
    private array $RegistrosC400 = [];

    /** 
     * @var RegistroC495[] 
     */
    private array $RegistrosC495 = [];

    /** 
     * @var RegistroC500[] 
     */
    private array $RegistrosC500 = [];

    /** 
     * @var RegistroC600[] 
     */
    private array $RegistrosC600 = [];

    /** 
     * @var RegistroC700[] 
     */
    private array $RegistrosC700 = [];

    /** 
     * @var RegistroC800[] 
     */
    private array $RegistrosC800 = [];

    /** 
     * @var RegistroC860[] 
     */
    private array $RegistrosC860 = [];

    public function __construct(bool $temMovimento = false)
    {
        parent::__construct("C001");
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
        return count($this->RegistrosC100) > 0;
    }

    public function adicionarUmRegistroC100(RegistroC100 $value, string $chave): void
    {
        $this->RegistrosC100[$chave] = $value;

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function removerUmRegistroC100(string $chave): void
    {
        unset($this->RegistrosC100[$chave]);

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    /**
     * @param RegistroC100[] $RegistrosC100
     */
    public function adicionarVariosRegistrosC100(array $values): void
    {
        foreach ($values as $value) {
            if ($value instanceof RegistroC100) {
                $this->adicionarUmRegistroC100($value, $value->getChvNfe());
            }
        }
    }

    /**
     * @param string[] $values
     */
    public function removerVariosRegistrosC100(array $values): void
    {
        foreach ($values as $value) {
            $this->removerUmRegistroC100($value);
        }
    }

    public function obterUmRegistroC100(string $chave): ?RegistroC100
    {
        return $this->RegistrosC100[$chave] ?? null;
    }

    public function obterTodosRegistrosC100(): array
    {
        return $this->RegistrosC100;
    }
}

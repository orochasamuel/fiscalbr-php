<?php

namespace FiscalBr\Core\Sped;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
class SpedCampos
{
    public int $Ordem;
    public string $Campo;
    private string $tipo;
    private int $tamanho;
    private int $qtdCasas;
    private bool $isObrigatorio;
    private int $versao;

    public function __construct(
        int $ordem,
        string $campo,
        string $tipo,
        int $tamanho,
        int $qtdCasas,
        bool $isObrigatorio,
        int $versao
    ) {
        $this->Ordem = $ordem;
        $this->Campo = $campo;
        $this->tipo = $tipo;
        $this->tamanho = $tamanho;
        $this->qtdCasas = $qtdCasas;
        $this->isObrigatorio = $isObrigatorio;
        $this->versao = $versao;
    }

    public function getOrdem(): int
    {
        return $this->Ordem;
    }

    public function getCampo(): string
    {
        return $this->Campo;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function getTamanho(): int
    {
        return $this->tamanho;
    }

    public function getQtdCasas(): int
    {
        return $this->qtdCasas;
    }

    public function getEhObrigatorio(): bool
    {
        return $this->isObrigatorio;
    }

    public function getVersao(): int
    {
        return $this->versao;
    }
}

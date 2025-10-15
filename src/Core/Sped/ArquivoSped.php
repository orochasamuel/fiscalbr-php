<?php

namespace FiscalBr\Core\Sped;

use FiscalBr\Core\Sped\Interfaces\ArquivoSpedInterface;

abstract class ArquivoSped implements ArquivoSpedInterface
{
    /** @var string[] */
    public array $linhas = [];

    /** @var string[] */
    public array $erros = [];

    public function __construct(array $linhas)
    {
        $this->linhas = [];
        $this->erros = [];
    }

    abstract function calcularBloco9(bool $totalizarBlocos = true): void;

    abstract function escreverArquivo(string $path, string $encoding = 'UTF-8'): void;

    abstract protected function escreverLinha(RegistroSped $registro): void;

    abstract function gerarLinhas(): void;

    abstract protected function gerarComFilhos(object $obj): void;
}
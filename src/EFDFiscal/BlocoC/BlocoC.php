<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use FiscalBr\Core\Sped\EscreverCamposSped;
use FiscalBr\Core\Sped\Interfaces\BlocoSpedInterface;
use FiscalBr\Core\Sped\SpedOrdemRegistro;

class BlocoC implements BlocoSpedInterface
{
    public RegistroC001 $RegistroC001;

    public function __construct()
    {
        $this->RegistroC001 = new RegistroC001();
    }

    public function setBlocoComMovimento(): void
    {
        $this->RegistroC001 = new RegistroC001(true);
    }

    public function setBlocoSemMovimento(): void
    {
        $this->RegistroC001 = new RegistroC001(false);
    }

    public function getRegC001(): RegistroC001
    {
        return $this->RegistroC001;
    }

    public function setRegC001(RegistroC001 $value): void
    {
        $this->RegistroC001 = $value;
    }

    // public function gerarTxt(): array
    // {
    //     $registros = [];

    //     $registros[] = $this->RegistroC001;
    //     foreach ($this->RegistroC001->obterTodosRegistrosC100() as $r) {
    //         // $registros[] = $r;
    //         // foreach ($r->obter as $r170) {
    //         //     $registros[] = $r170;
    //         // }
    //         // foreach ($r->RegistrosC190 as $r190) {
    //         //     $registros[] = $r190;
    //         // }
    //     }
    //     if ($this->RegistroC990) {
    //         $registros[] = $this->RegistroC990;
    //     }

    //     // Ordenar de acordo com o atributo OrdemRegistro
    //     usort($registros, function ($a, $b) {
    //         $ra = new \ReflectionClass($a);
    //         $rb = new \ReflectionClass($b);

    //         $ordemA = $ra->getAttributes(SpedOrdemRegistro::class)[0]?->newInstance()->posicao ?? 999;
    //         $ordemB = $rb->getAttributes(SpedOrdemRegistro::class)[0]?->newInstance()->posicao ?? 999;

    //         return $ordemA <=> $ordemB;
    //     });

    //     $escritor = new \FiscalBr\Core\Sped\EscreverCamposSped();

    //     return array_map(fn($r) => $escritor->EscreverCampos($r), $registros);
    //     //return implode(array_map(fn($r) => $escritor->EscreverCampos($r), $registros));
    // }

    public ?RegistroC990 $RegistroC990 = null;
}

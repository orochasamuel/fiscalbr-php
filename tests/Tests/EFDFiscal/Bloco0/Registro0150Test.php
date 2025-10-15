<?php

namespace Tests\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\EscreverCamposSped;
use FiscalBr\EFDFiscal\Bloco0\Registro0150;
use PHPUnit\Framework\TestCase;

final class Registro0150Test extends TestCase
{
    public function testEscritaRegistro0150(): void
    {
        $erroCampoObrigatorio = 'CAMPO_OBRIGATORIO_NAO_INFORMADO';

        $r = new Registro0150();

        $resultadoEsperado = "|0150|||1058||||||||||" . PHP_EOL;

        $escritor = new EscreverCamposSped();
        $resultadoAtual = $escritor->escreverCampos($r);

        $resultadoAtual = str_replace($erroCampoObrigatorio, '', $resultadoAtual);

        $this->assertEquals($resultadoEsperado, $resultadoAtual);
    }
}

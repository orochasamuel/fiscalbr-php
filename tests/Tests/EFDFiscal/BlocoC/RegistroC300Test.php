<?php

namespace Tests\EFDFiscal\BlocoC;

//require_once __DIR__ . '/../../../../vendor/autoload.php';
require_once __DIR__ . '/../../../../src/Core/Utils/Decimal.php';

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\EscreverCamposSped;
use FiscalBr\EFDFiscal\ArquivoEFDFiscal;
use FiscalBr\EFDFiscal\BlocoC\RegistroC300;
use PHPUnit\Framework\TestCase;

final class RegistroC300Test extends TestCase
{
    public function testEscritaRegistroC300(): void
    {
        //echo getcwd(); // Outputs the current working directory

        $arq = new ArquivoEFDFiscal();

        $r = new RegistroC300();

        $resultadoEsperado = "|C300|||||||||||" . PHP_EOL;

        $escritor = new EscreverCamposSped();
        $resultadoAtual = $escritor->escreverCampos($r);

        $this->assertEquals($resultadoEsperado, $resultadoAtual);
    }
}
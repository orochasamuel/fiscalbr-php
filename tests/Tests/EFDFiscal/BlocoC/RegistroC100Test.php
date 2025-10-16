<?php

namespace Tests\EFDFiscal\BlocoC;

//require_once __DIR__ . '/../../../../vendor/autoload.php';
require_once __DIR__ . '/../../../../src/Core/Utils/Decimal.php';

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\EscreverCamposSped;
use FiscalBr\EFDFiscal\ArquivoEFDFiscal;
use FiscalBr\EFDFiscal\BlocoC\RegistroC100;
use PHPUnit\Framework\TestCase;

final class RegistroC100Test extends TestCase
{
    public function testEscritaRegistroC100(): void
    {
        //echo getcwd(); // Outputs the current working directory

        $arq = new ArquivoEFDFiscal();

        $dataEmissao = new DateTime("first day of last month");
        $dataEntradaSaida = new DateTime("last day of last month");

        $valorDocumento = new Decimal(1500.75);
        $valorDocumentoFormatado = $valorDocumento->format(",", "");

        $chaveDFeParaTeste = '12345678901234567890123456789012345678901234';

        $r = new RegistroC100();
        $r->comIndicadorOperacao(1);
        $r->comIndicadorEmitente(0);
        // Participante
        $r->comCodigoModelo('65');
        $r->comCodigoSituacao(0);
        $r->comSerie('999');
        $r->comNumeroDocumento('123456789');
        $r->comChaveNfe($chaveDFeParaTeste);
        $r->comDataDocumento($dataEmissao);
        $r->comDataEntradaSaida($dataEntradaSaida);
        $r->comValorDocumento($valorDocumento);
        $r->comIndicadorPagamento(0);
        // Valor do desconto
        // Valor do abatimento
        $r->comValorMercadoria($valorDocumento);
        $r->comIndicadorFrete(9);

        $resultadoEsperado = "|C100|1|0||65|00|999|123456789|" . $chaveDFeParaTeste . "|" . date("dmY", strtotime("first day of last month")) . "|" . date("dmY", strtotime("last day of last month")) . "|1500,75|0|||1500,75|9|||||||||||||" . PHP_EOL;

        $escritor = new EscreverCamposSped();
        $resultadoAtual = $escritor->escreverCampos($r);

        $this->assertEquals($resultadoEsperado, $resultadoAtual);

        $arq->adicionarRegistroC100($r);

        //$linhasGeradasSomenteBlocoC = $arq->blocoC->gerarTxt();

        $arq->gerarLinhas();

        $arq->calcularBloco9();

        //$linhasGeradasSomenteBlocoC = $arq->blocoC->gerarTxt();

        $linhasGeradasAntesDeRemover = $arq->linhas;

        //$arq->removerRegistroC100($r->getChvNfe());

        // $arq->gerarLinhas();

        // $arq->calcularBloco9();

        // $linhasGeradasAposRemover = $arq->linhas;

        // $arq->linhas = []; // Limpa as linhas atuais
        // // Adiciona apenas as linhas do Bloco C para o teste
        // $arq->linhas = $linhasGeradasSomenteBlocoC;

        $arq->escreverArquivo('C:\\Users\sroli\Desktop\output.txt');

        $this->assertEquals('123456789', $arq->blocoC->RegistroC001->obterUmRegistroC100($chaveDFeParaTeste)->getNumDoc());
        $this->assertEquals($valorDocumentoFormatado, $arq->blocoC->RegistroC001->obterUmRegistroC100($chaveDFeParaTeste)->getVlDoc()->format(",", ""));
    }

    public function testEscritaRegistroC100ComC170(): void
    {
        $arq = new ArquivoEFDFiscal();

        $dataEmissao = new DateTime("first day of last month");
        $dataEntradaSaida = new DateTime("last day of last month");

        $valorDocumento = new Decimal(1500.75);
        $valorDocumentoFormatado = $valorDocumento->format(",", "");

        $chaveDFeParaTeste = '12345678901234567890123456789012345678901234';

        $r = new RegistroC100();
        $r->comIndicadorOperacao(1);
        $r->comIndicadorEmitente(0);
        // Participante
        $r->comCodigoModelo('65');
        $r->comCodigoSituacao(0);
        $r->comSerie('999');
        $r->comNumeroDocumento('123456789');
        $r->comChaveNfe($chaveDFeParaTeste);
        $r->comDataDocumento($dataEmissao);
        $r->comDataEntradaSaida($dataEntradaSaida);
        $r->comValorDocumento($valorDocumento);
        $r->comIndicadorPagamento(0);
        // Valor do desconto
        // Valor do abatimento
        $r->comValorMercadoria($valorDocumento);
        $r->comIndicadorFrete(9);

        $resultadoEsperado = "|C100|1|0||65|00|999|123456789|" . $chaveDFeParaTeste . "|" . date("dmY", strtotime("first day of last month")) . "|" . date("dmY", strtotime("last day of last month")) . "|1500,75|0|||1500,75|9|||||||||||||" . PHP_EOL;

        $item1 = new \FiscalBr\EFDFiscal\BlocoC\RegistroC170();
        $item1->NumItem = 1;

        $r->adicionarUmRegistroC170($item1, $item1->NumItem);

        $escritor = new EscreverCamposSped();
        $resultadoAtual = $escritor->escreverCampos($r);

        $this->assertEquals($resultadoEsperado, $resultadoAtual);

        $arq->adicionarRegistroC100($r);

        //$linhasGeradasSomenteBlocoC = $arq->blocoC->gerarTxt();

        $arq->gerarLinhas();

        $arq->calcularBloco9();

        //$linhasGeradasSomenteBlocoC = $arq->blocoC->gerarTxt();

        $linhasGeradasAntesDeRemover = $arq->linhas;

        //$arq->removerRegistroC100($r->getChvNfe());

        // $arq->gerarLinhas();

        // $arq->calcularBloco9();

        // $linhasGeradasAposRemover = $arq->linhas;

        // $arq->linhas = []; // Limpa as linhas atuais
        // // Adiciona apenas as linhas do Bloco C para o teste
        // $arq->linhas = $linhasGeradasSomenteBlocoC;

        $arq->escreverArquivo('C:\\Users\sroli\Desktop\output.txt');

        $this->assertEquals('123456789', $arq->blocoC->RegistroC001->obterUmRegistroC100($chaveDFeParaTeste)->getNumDoc());
        $this->assertEquals($valorDocumentoFormatado, $arq->blocoC->RegistroC001->obterUmRegistroC100($chaveDFeParaTeste)->getVlDoc()->format(",", ""));
    }
}

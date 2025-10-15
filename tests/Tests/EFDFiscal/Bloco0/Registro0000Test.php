<?php

namespace Tests\EFDFiscal\Bloco0;

//require_once __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use FiscalBr\Core\Sped\EscreverCamposSped;
use FiscalBr\EFDFiscal\ArquivoEFDFiscal;
use FiscalBr\EFDFiscal\Bloco0\Registro0000;
use PHPUnit\Framework\TestCase;

final class Registro0000Test extends TestCase
{
    public function testEscritaRegistro0000(): void
    {
        //echo getcwd(); // Outputs the current working directory

        $arq = new ArquivoEFDFiscal();

        $dataInicial = new DateTime("first day of last month");
        $dataFinal = new DateTime("last day of last month");

        $r = new Registro0000(
            19,
            0,
            $dataInicial,
            $dataFinal,
            'BANCO DO BRASIL S.A.',
            '00000000000191',
            'DF',
            '123456789',
            '5300108',
            'A',
            1
        );
        
        // $r->comVersaoLayout(17);
        // $r->comFinalidade(0);
        // $r->comDataInicial($dataInicial);
        // $r->comDataFinal($dataFinal);
        // $r->comNome('BANCO DO BRASIL S.A.');
        // $r->comCnpj('00000000000191');
        // $r->comUf('DF');
        // $r->comInscricaoEstadual('123456789');
        // $r->comCodigoMunicipio('5300108');
        // $r->comIndicadorPerfil('A');
        // $r->comIndicadorAtividade('1');

        $resultadoEsperado = "|0000|019|0|" . date("dmY", strtotime("first day of last month")) . "|" . date("dmY", strtotime("last day of last month")) . "|BANCO DO BRASIL S.A.|00000000000191||DF|123456789|5300108|||A|1|" . PHP_EOL;

        $escritor = new EscreverCamposSped();
        $resultadoAtual = $escritor->escreverCampos($r);

        $this->assertEquals($resultadoEsperado, $resultadoAtual);

        // $arq->setBloco0(new \FiscalBr\EFDFiscal\Bloco0\Bloco0($r));

        // $this->assertEquals(17, $arq->getBloco0()->Registro0000->getCodVer());
        // $this->assertEquals(0, $arq->getBloco0()->Registro0000->getCodFin());

        //$linhas = $arq->gerarLinhas();

        //expect($linhas)->toBeArray();
        //expect($linhas[0])->toStartWith('|0000|');
        //expect($linhas[0])->toContain('|EMPRESA ABC|');
    }
}

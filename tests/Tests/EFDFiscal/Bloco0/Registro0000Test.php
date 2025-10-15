<?php

namespace EFDFiscal\Bloco0;

//use FiscalBr\Core\Sped\EscreverCamposSped;
use FiscalBr\EFDFiscal\ArquivoEFDFiscal;
use PHPUnit\Framework\TestCase;

final class Registro0000Test extends TestCase
{

    public function testEscritaRegistro0000(): void
    {
        //echo getcwd(); // Outputs the current working directory

        $arq = new ArquivoEFDFiscal();

        $r = new Registro0000();
        $r->comVersaoLayout(17);
        $r->comFinalidade(0);
        //$r->dtIni = new DateTimeImmutable('2024-01-01');
        //$r->dtFin = new DateTimeImmutable('2024-01-31');
        //$r->nome = 'EMPRESA ABC';
        //$r->cnpj = '12345678000199';
        //$r->uf = 'SP';

        //$escritor = new EscreverCamposSped();
        //$resultado = $escritor->escreverCampos($r);

        $arq->setBloco0(new \FiscalBr\EFDFiscal\Bloco0\Bloco0($r));

        $this->assertEquals(17, $arq->getBloco0()->registro0000->getCodVer());
        $this->assertEquals(0, $arq->getBloco0()->registro0000->getCodFin());

        //$linhas = $arq->gerarLinhas();

        //expect($linhas)->toBeArray();
        //expect($linhas[0])->toStartWith('|0000|');
        //expect($linhas[0])->toContain('|EMPRESA ABC|');
    }
}

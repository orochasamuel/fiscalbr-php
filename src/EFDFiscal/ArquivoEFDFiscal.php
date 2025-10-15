<?php

namespace FiscalBr\EFDFiscal;

use DateTime;
use Exception;
use FiscalBr\Core\Sped\ArquivoSped;
use FiscalBr\Core\Sped\EscreverCamposSped;
use FiscalBr\Core\Sped\RegistroSped;
use FiscalBr\EFDFiscal\Bloco0\Bloco0;
use FiscalBr\EFDFiscal\BlocoB\BlocoB;
use FiscalBr\EFDFiscal\BlocoC\BlocoC;
use FiscalBr\EFDFiscal\BlocoD\BlocoD;
use FiscalBr\EFDFiscal\BlocoE\BlocoE;
use FiscalBr\EFDFiscal\BlocoG\BlocoG;
use FiscalBr\EFDFiscal\BlocoH\BlocoH;
use FiscalBr\EFDFiscal\BlocoK\BlocoK;
use FiscalBr\EFDFiscal\Bloco1\Bloco1;
use FiscalBr\EFDFiscal\Bloco9\Bloco9;
use FiscalBr\EFDFiscal\Bloco0\Registro0000;
use FiscalBr\EFDFiscal\Bloco0\Registro0990;
use FiscalBr\EFDFiscal\BlocoB\RegistroB990;
use FiscalBr\EFDFiscal\BlocoC\RegistroC100;
use FiscalBr\EFDFiscal\BlocoC\RegistroC990;
use FiscalBr\EFDFiscal\BlocoD\RegistroD990;
use FiscalBr\EFDFiscal\BlocoE\RegistroE990;
use FiscalBr\EFDFiscal\BlocoG\RegistroG990;
use FiscalBr\EFDFiscal\BlocoH\RegistroH990;
use FiscalBr\EFDFiscal\BlocoK\RegistroK990;
use FiscalBr\EFDFiscal\Bloco1\Registro1990;
use FiscalBr\EFDFiscal\Bloco9\Registro9001;
use FiscalBr\EFDFiscal\Bloco9\Registro9900;
use FiscalBr\EFDFiscal\Bloco9\Registro9990;
use FiscalBr\EFDFiscal\Bloco9\Registro9999;

final class ArquivoEFDFiscal extends ArquivoSped
{
    public ?Bloco0 $bloco0;
    private Registro0000 $registro0000;

    public ?BlocoB $blocoB;
    public ?BlocoC $blocoC;
    public ?BlocoD $blocoD;
    public ?BlocoE $blocoE;
    public ?BlocoG $blocoG;
    public ?BlocoH $blocoH;
    public ?BlocoK $blocoK;

    public ?Bloco1 $bloco1;
    public ?Bloco9 $bloco9;

    public function __construct(
        int $versao = 19,
        int $finalidade = 0,
        DateTime $dtInicial = new DateTime('first day of last month'),
        DateTime $dtFinal = new DateTime('last day of last month'),
        string $nome = '',
        string $cnpj = '',
        string $uf = '',
        string $inscricaoEstadual = '',
        string $codigoMunicipio = '',
        string $indicadorPerfil = 'A',
        int $indicadorAtividade = 1
    ) {
        $this->registro0000 = new Registro0000(
            $versao,
            $finalidade,
            $dtInicial,
            $dtFinal,
            $nome,
            $cnpj,
            $uf,
            $inscricaoEstadual,
            $codigoMunicipio,
            $indicadorPerfil,
            $indicadorAtividade
        );

        // Inicializando os blocos obrigatórios
        $this->bloco0 = new Bloco0($this->registro0000);

        $this->blocoB = new BlocoB();

        $this->blocoC = new BlocoC();

        $this->blocoD = new BlocoD();

        $this->blocoE = new BlocoE();

        $this->blocoG = new BlocoG();

        $this->blocoH = new BlocoH();

        $this->blocoK = new BlocoK();

        $this->bloco1 = new Bloco1();

        $this->bloco9 = new Bloco9();
    }

    public function __destruct()
    {
        // Libera os blocos explicitamente
        $this->erros = [];
        $this->linhas = [];
        $this->bloco0 = null;
        $this->blocoB = null;
        $this->blocoC = null;
        $this->blocoD = null;
        $this->blocoE = null;
        $this->blocoG = null;
        $this->blocoH = null;
        $this->blocoK = null;
        $this->bloco1 = null;
        $this->bloco9 = null;
    }

    public function calcularBloco9(bool $totalizarBlocos = true): void
    {
        if (empty($this->linhas)) {
            throw new Exception('Não é possível calcular o bloco 9 sem as linhas. Execute a função "GerarLinhas()", gere as linhas manualmente ou leia um arquivo para preencher as linhas.');
        }

        //parent::CalcularBloco9($totalizarBlocos);

        if ($totalizarBlocos) {
            // Pega só as linhas que não são totalizadores
            $registros = array_map(function ($x) {
                return substr($x, 1, 4);
            }, array_filter($this->linhas, function ($x) {
                return strlen($x) > 6 && substr($x, 2, 3) !== "990";
            }));

            if ($this->bloco0 !== null) {
                $this->bloco0->Registro0990 = new Registro0990();
                $this->bloco0->Registro0990->setQtdLin0(count(array_filter($registros, fn($x) => str_starts_with($x, "0"))) + 1);
            }

            if ($this->bloco1 !== null) {
                $this->bloco1->Registro1990 = new Registro1990();
                $this->bloco1->Registro1990->setQtdLin1(count(array_filter($registros, fn($x) => str_starts_with($x, "1"))) + 1);
            }

            if ($this->blocoB !== null) {
                $this->blocoB->RegistroB990 = new RegistroB990();
                $this->blocoB->RegistroB990->setQtdLinB(count(array_filter($registros, fn($x) => str_starts_with($x, "B"))) + 1);
            }

            if ($this->blocoC !== null) {
                $this->blocoC->RegistroC990 = new RegistroC990();
                $this->blocoC->RegistroC990->setQtdLinC(count(array_filter($registros, fn($x) => str_starts_with($x, "C"))) + 1);
            }

            if ($this->blocoD !== null) {
                $this->blocoD->RegistroD990 = new RegistroD990();
                $this->blocoD->RegistroD990->setQtdLinD(count(array_filter($registros, fn($x) => str_starts_with($x, "D"))) + 1);
            }

            if ($this->blocoE !== null) {
                $this->blocoE->RegistroE990 = new RegistroE990();
                $this->blocoE->RegistroE990->setQtdLinE(count(array_filter($registros, fn($x) => str_starts_with($x, "E"))) + 1);
            }

            if ($this->blocoG !== null) {
                $this->blocoG->RegistroG990 = new RegistroG990();
                $this->blocoG->RegistroG990->setQtdLinG(count(array_filter($registros, fn($x) => str_starts_with($x, "G"))) + 1);
            }

            if ($this->blocoH !== null) {
                $this->blocoH->RegistroH990 = new RegistroH990();
                $this->blocoH->RegistroH990->setQtdLinH(count(array_filter($registros, fn($x) => str_starts_with($x, "H"))) + 1);
            }

            if ($this->blocoK !== null) {
                $this->blocoK->RegistroK990 = new RegistroK990();
                $this->blocoK->RegistroK990->setQtdLinK(count(array_filter($registros, fn($x) => str_starts_with($x, "K"))) + 1);
            }

            $this->GerarLinhas();
        }

        // Remove todas as linhas do Bloco 9
        $this->linhas = array_values(array_filter($this->linhas, function ($x) {
            return !(strlen($x) > 6 && $x[1] === '9');
        }));

        $this->bloco9 = new Bloco9();
        // Inicializa o bloco 9 com os registros obrigatórios
        $this->bloco9->Registro9001 = new Registro9001(true);

        // $this->bloco9 = new Bloco9([
        //     "Reg9001" => new Registro9001(true),
        //     "Reg9990" => new Registro9990(),
        //     "Reg9999" => new Registro9999()
        // ]);

        // Linhas distintas
        $diferentes = array_unique(array_map(function ($x) {
            return substr($x, 1, 4);
        }, array_filter($this->linhas, fn($x) => strlen($x) > 6)));

        foreach ($diferentes as $registro) {
            $qtd = count(array_filter($this->linhas, fn($x) => str_starts_with($x, "|{$registro}|")));
            $this->bloco9->Registro9001->adicionarUmRegistro9900(new Registro9900($registro, $qtd));
        }

        // Adiciona os registros fixos
        $this->bloco9->Registro9001->adicionarUmRegistro9900(new Registro9900("9001", 1));
        $this->bloco9->Registro9001->adicionarUmRegistro9900(new Registro9900("9900", $this->bloco9->Registro9001->obterContagemRegistros9900() + 3));
        $this->bloco9->Registro9001->adicionarUmRegistro9900(new Registro9900("9990", 1));
        $this->bloco9->Registro9001->adicionarUmRegistro9900(new Registro9900("9999", 1));

        $this->bloco9->Registro9990 = new Registro9990($this->bloco9->Registro9001->obterContagemRegistros9900() + 3);

        $this->bloco9->Registro9999 = new Registro9999(count($this->linhas) + $this->bloco9->Registro9001->obterContagemRegistros9900() + 3);

        $this->GerarComFilhos($this->bloco9);
    }

    public function escreverArquivo(string $path, string $encoding = 'UTF-8'): void
    {
        if (empty($this->linhas)) {
            throw new Exception('Não é possível escrever o arquivo sem as linhas. Execute a função "GerarLinhas()", gere as linhas manualmente ou leia um arquivo para preencher as linhas.');
        }

        $conteudo = implode($this->linhas);
        file_put_contents($path, mb_convert_encoding($conteudo, $encoding));
    }

    protected function escreverLinha(RegistroSped $registro): void
    {
        $erro = '';
        $escritor = new EscreverCamposSped();
        $texto = $escritor->escreverCampos($registro);

        if (!empty($erro)) {
            $this->erros[] = $erro;
        }

        $this->linhas[] = $texto;
    }

    public function gerarLinhas(): void
    {
        $this->linhas = [];

        /*
         * Ordem de geração dos blocos conforme o leiaute
         */

        // Gera as linhas para o Bloco 0
        $this->gerarComFilhos($this->bloco0);

        $this->gerarComFilhos($this->blocoB);

        $this->gerarComFilhos($this->blocoC);

        $this->gerarComFilhos($this->blocoD);

        $this->gerarComFilhos($this->blocoE);

        $this->gerarComFilhos($this->blocoG);

        $this->gerarComFilhos($this->blocoH);

        $this->gerarComFilhos($this->blocoK);

        $this->gerarComFilhos($this->bloco1);

        $this->gerarComFilhos($this->bloco9);
    }

    protected function gerarComFilhos(object $registro): void
    {
        if ($registro === null) {
            return;
        }

        if ($registro instanceof RegistroSped) {
            $this->escreverLinha($registro);
        }

        $ref = new \ReflectionClass($registro);
        foreach ($ref->getProperties() as $prop) {
            $prop->setAccessible(true);
            $valor = $prop->getValue($registro);

            if ($valor === null) {
                continue;
            }

            if ($valor instanceof RegistroSped) {
                $this->gerarComFilhos($valor);
            } elseif (is_array($valor)) {
                foreach ($valor as $item) {
                    $this->gerarComFilhos($item);
                }
            }
        }

        // if ($obj instanceof RegistroSped) {
        //     $this->linhas[] = $this->escreverLinha($obj);
        // }

        // foreach (get_object_vars($obj) as $property) {
        //     if (is_array($property)) {
        //         foreach ($property as $item) {
        //             if (is_object($item)) {
        //                 $this->gerarComFilhos($item);
        //             }
        //         }
        //     } elseif (is_object($property)) {
        //         $this->gerarComFilhos($property);
        //     }
        // }
    }

    public function adicionarRegistroC100(RegistroC100 $value): void
    {
        $this->blocoC->RegistroC001->adicionarUmRegistroC100($value, $value->getChvNfe());
    }

    public function removerRegistroC100(string $chave): void
    {
        $this->blocoC->RegistroC001->removerUmRegistroC100($chave);
    }

    /**
     * @param RegistroC100[] $values
     */
    public function adicionarRegistrosC100(array $values): void
    {
        $this->blocoC->RegistroC001->adicionarVariosRegistrosC100($values);
    }

    /**
     * @param string[] $values
     */
    public function removerRegistrosC100(array $values): void
    {
        $this->blocoC->RegistroC001->removerVariosRegistrosC100($values);
    }
}

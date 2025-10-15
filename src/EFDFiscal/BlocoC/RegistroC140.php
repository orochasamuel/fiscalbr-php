<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC140 extends RegistroSped
{
    #[SpedCampos(2, "IND_EMIT", "C", 1, 0, true, 2)]
    public int $IndEmit;


    ///     Indicador do tipo de título de crédito

    /// <remarks>
    ///     00 - Duplicata;
    ///     <para />
    ///     01 - Cheque;
    ///     <para />
    ///     02 - Promissória;
    ///     <para />
    ///     03 - Recibo;
    ///     <para />
    ///     99 - Outros (descrever)
    /// </remarks>
    #[SpedCampos(3, "IND_TIT", "C", 2, 0, true, 2)]
    public int $IndTit;


    ///     Descrição complementar do título de crédito

    #[SpedCampos(4, "DESC_TIT", "C", 999, 0, false, 2)]
    public string $DescTit;


    ///     Número ou código identificador do título de crédito

    #[SpedCampos(5, "NUM_TIT", "C", 999, 0, true, 2)]
    public string $NumTit;


    ///     Quantidade de parcelas a receber/pagar

    #[SpedCampos(6, "QTD_PARC", "N", 2, 0, true, 2)]
    public int $QtdParc;


    ///     Valor total dos títulos de créditos

    #[SpedCampos(7, "VL_TIT", "N", 0, 2, true, 2)]
    public Decimal $VlTit;

    /** 
     * @var RegistroC141[] 
     */
    private array $RegistrosC141 = [];

    public function __construct()
    {
        parent::__construct("C140");
    }

    public function obterTodosRegistrosC141(): array
    {
        return $this->RegistrosC141;
    }

    public function adicionarUmRegistroC141(RegistroC141 $value, string $sequencial): void
    {
        $this->RegistrosC141[$sequencial] = $value;
    }

    public function removerUmRegistroC141(string $sequencial): void
    {
        unset($this->RegistrosC141[$sequencial]);
    }

    /**
     * @param RegistroC141[] $RegistrosC141
     */
    public function adicionarVariosRegistrosC141(array $values): void
    {
        foreach ($values as $value) {
            if ($value instanceof RegistroC141) {
                $this->adicionarUmRegistroC141($value, $value->getNumParc());
            }
        }
    }

    /**
     * @param string[] $values
     */
    public function removerVariosRegistrosC141(array $values): void
    {
        foreach ($values as $value) {
            $this->removerUmRegistroC141($value);
        }
    }
}

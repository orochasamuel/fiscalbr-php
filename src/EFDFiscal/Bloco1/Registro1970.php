<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1970 extends RegistroSped
{
    #[SpedCampos(2, "IND_AP", "N", 2, 0, true, 2)]
    public int $IndAp;


    ///     Importações com ICMS diferido

    #[SpedCampos(3, "G3_01", "N", 0, 2, true, 2)]
    public int $G301;


    ///     ICMS diferido nas importações

    #[SpedCampos(4, "G3_02", "N", 0, 2, true, 2)]
    public int $G302;


    ///    Saídas não incentivadas de PI

    #[SpedCampos(5, "G3_03", "N", 0, 2, true, 2)]
    public int $G303;


    ///   Percentual de incentivo nas saídas para fora do Estado

    #[SpedCampos(6, "G3_04", "N", 0, 2, true, 2)]
    public int $G304;


    ///     Saídas incentivadas de PI para fora do Estado

    #[SpedCampos(7, "G3_05", "N", 0, 2, true, 2)]
    public int $G305;


    ///     ICMS das saídas incentivadas de PI para fora do Estado

    #[SpedCampos(8, "G3_06", "N", 0, 2, true, 2)]
    public int $G306;


    ///     Crédito presumido nas saídas para fora do Estado.

    #[SpedCampos(9, "G3_07", "N", 0, 2, true, 2)]
    public int $G307;


    ///    Dedução de incentivo da Importação (crédito presumido)

    #[SpedCampos(10, "G3_T", "N", 0, 2, true, 2)]
    public int $G3T;


    ///    Saldo devedor do ICMS antes das deduções do incentivo

    #[SpedCampos(11, "G3_08", "N", 0, 2, true, 2)]
    public int $G308;


    ///    Saldo devedor do ICMS após deduções do incentivo

    #[SpedCampos(12, "G3_09", "N", 0, 2, true, 2)]
    public int $G309;

    /** 
     * @var Registro1975[] 
     */
    private array $Registros1975 = [];

    public function __construct()
    {
        parent::__construct("1970");
    }
}

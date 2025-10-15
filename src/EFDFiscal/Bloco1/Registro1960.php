<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1960 extends RegistroSped
{
    #[SpedCampos(2, "IND_AP", "N", 2, 0, true, 2)]
    public int $IndAp;


    ///     Percentual de crédito presumido

    #[SpedCampos(3, "G1_01", "N", 15, 2, true, 2)]
    public Decimal $G101;


    ///     Saídas não incentivadas de PI 

    #[SpedCampos(4, "G1_02", "N", 15, 2, true, 2)]
    public Decimal $G102;


    ///     Saídas incentivadas de PI

    #[SpedCampos(5, "G1_03", "N", 15, 2, true, 2)]
    public Decimal $G103;


    ///     Saídas incentivadas de PI para fora do Nordeste

    #[SpedCampos(6, "G1_04", "N", 15, 2, true, 2)]
    public Decimal $G104;


    ///     Saldo devedor do ICMS antes das deduções do incentivo

    #[SpedCampos(7, "G1_05", "N", 15, 2, true, 2)]
    public Decimal $G105;


    ///     Saldo devedor do ICMS relativo à faixa incentivada de PI 

    #[SpedCampos(8, "G1_06", "N", 15, 2, true, 2)]
    public Decimal $G106;


    ///     Crédito presumido nas saídas incentivadas de PI para fora do Nordeste

    #[SpedCampos(9, "G1_07", "N", 15, 2, true, 2)]
    public Decimal $G107;


    ///    Saldo devedor relativo à faixa incentivada de PI após o crédito presumido nas saídas para fora do Nordeste

    #[SpedCampos(10, "G1_08", "N", 15, 2, true, 2)]
    public Decimal $G108;


    ///    Crédito presumido

    #[SpedCampos(11, "G1_09", "N", 15, 2, true, 2)]
    public Decimal $G109;


    ///     Dedução de incentivo da Indústria (crédito presumido)

    #[SpedCampos(12, "G1_10", "N", 15, 2, true, 2)]
    public Decimal $G110;


    ///     Saldo devedor do ICMS após deduções

    #[SpedCampos(13, "G1_11", "N", 15, 2, true, 2)]
    public Decimal $G111;

    public function __construct()
    {
        parent::__construct("1960");
    }
}

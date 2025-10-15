<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1980 extends RegistroSped
{
    #[SpedCampos(2, "IND_AP", "N", 2, 0, true, 2)]
    public int $IndAp;


    ///    Entradas (percentual de incentivo)

    #[SpedCampos(3, "G4_01", "N", 0, 2, true, 2)]
    public int $G401;


    ///     Entradas não incentivadas de PI 

    #[SpedCampos(4, "G4_02", "N", 0, 2, true, 2)]
    public int $G402;


    ///   Entradas incentivadas de PI

    #[SpedCampos(5, "G4_03", "N", 0, 2, true, 2)]
    public int $G403;


    ///   Saídas (percentual de incentivo)

    #[SpedCampos(6, "G4_04", "N", 0, 2, true, 2)]
    public int $G404;


    ///     Saídas não incentivadas de PI 

    #[SpedCampos(7, "G4_05", "N", 0, 2, true, 2)]
    public int $G405;


    ///     Saídas incentivadas de P

    #[SpedCampos(8, "G4_06", "N", 0, 2, true, 2)]
    public int $G406;


    ///     Saldo devedor do ICMS antes das deduções do incentivo (PI e itens não incentivados)

    #[SpedCampos(9, "G4_07", "N", 0, 2, true, 2)]
    public int $G407;


    ///    Crédito presumido nas entradas incentivadas de PI 

    #[SpedCampos(10, "G4_08", "N", 0, 2, true, 2)]
    public int $G408;


    ///    Crédito presumido nas saídas incentivadas de PI 

    #[SpedCampos(11, "G4_09", "N", 0, 2, true, 2)]
    public int $G409;


    ///    Dedução de incentivo da Central de Distribuição (entradas/saídas)

    #[SpedCampos(12, "G4_10", "N", 0, 2, true, 2)]
    public int $G410;


    ///    Saldo devedor do ICMS após deduções do incentivo

    #[SpedCampos(13, "G4_11", "N", 0, 2, true, 2)]
    public int $G411;


    ///    Índice de recolhimento da central de distribuição

    #[SpedCampos(14, "G4_12", "N", 0, 2, true, 2)]
    public int $G412;

    public function __construct()
    {
        parent::__construct("1980");
    }
}

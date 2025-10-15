<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1310 extends RegistroSped
{
    #[SpedCampos(2, "NUM_TANQUE", "C", 3, 0, true, 2)]
    public string $NumTanque;

    #[SpedCampos(3, "ESTQ_ABERT", "N", 0, 3, true, 2)]
    public Decimal $EstqAbert;

    #[SpedCampos(4, "VOL_ENTR", "N", 0, 3, true, 2)]
    public Decimal $VolEntr;

    #[SpedCampos(5, "VOL_DISP", "N", 0, 3, true, 2)]
    public Decimal $VolDisp;

    #[SpedCampos(6, "VOL_SAIDAS", "N", 0, 3, true, 2)]
    public Decimal $VolSaidas;

    #[SpedCampos(7, "ESTQ_ESCR", "N", 0, 3, true, 2)]
    public Decimal $EstqEscr;

    #[SpedCampos(8, "VAL_AJ_PERDA", "N", 0, 3, true, 2)]
    public Decimal $ValAjPerda;

    #[SpedCampos(9, "VAL_AJ_GANHO", "N", 0, 3, true, 2)]
    public Decimal $VlAjGanho;

    #[SpedCampos(10, "FECH_FISICO", "N", 0, 3, true, 2)]
    public Decimal $FechFisico;

    /** 
     * @var Registro1320[] 
     */
    private array $Registros1320 = [];

    public function __construct()
    {
        parent::__construct("1310");
    }
}

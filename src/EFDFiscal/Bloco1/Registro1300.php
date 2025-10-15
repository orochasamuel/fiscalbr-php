<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1300 extends RegistroSped
{
    #[SpedCampos(2, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;

    #[SpedCampos(3, "DT_FECH", "N", 8, 0, true, 2)]
    public DateTime $DtFech;

    #[SpedCampos(4, "ESTQ_ABERT", "N", 0, 3, true, 2)]
    public Decimal $EstqAbert;

    #[SpedCampos(5, "VOL_ENTR", "N", 0, 3, true, 2)]
    public Decimal $VolEntr;

    #[SpedCampos(6, "VOL_DISP", "N", 0, 3, true, 2)]
    public Decimal $VolDisp;

    #[SpedCampos(7, "VOL_SAIDAS", "N", 0, 3, true, 2)]
    public Decimal $VolSaidas;

    #[SpedCampos(8, "ESTQ_ESCR", "N", 0, 3, true, 2)]
    public Decimal $EstqEscr;

    #[SpedCampos(9, "VAL_AJ_PERDA", "N", 0, 3, true, 2)]
    public Decimal $ValAjPerda;

    #[SpedCampos(10, "VAL_AJ_GANHO", "N", 0, 3, true, 2)]
    public Decimal $ValAjGanho;

    #[SpedCampos(11, "FECH_FISICO", "N", 0, 3, true, 2)]
    public Decimal $FechFisico;

    /** 
     * @var Registro1310[] 
     */
    private array $Registros1310 = [];

    public function __construct()
    {
        parent::__construct("1300");
    }
}

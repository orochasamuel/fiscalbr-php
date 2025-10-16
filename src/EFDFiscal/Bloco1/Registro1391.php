<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1391 extends RegistroSped
{
    #[SpedCampos(2, "DT_REGISTRO", "C", 8, 0, true, 6)]
    public DateTime $DtRegistro;

    #[SpedCampos(3, "QTD_MOID", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $QtdMoid;

    #[SpedCampos(4, "ESTQ_INI", "N", PHP_INT_MAX, 2, true, 6)]
    public Decimal $EstqIni;

    #[SpedCampos(5, "QTD_PRODUZ", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $QtdProduz;

    #[SpedCampos(6, "ENT_ANID_HID", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $EntAnidHid;

    #[SpedCampos(7, "OUTR_ENTR", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $OutrEntr;

    #[SpedCampos(8, "PERDA", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $Perda;

    #[SpedCampos(9, "CONS", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $Cons;

    #[SpedCampos(10, "SAI_ANI_HID", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $SaiAniHid;

    #[SpedCampos(11, "SAIDAS", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $Saidas;

    #[SpedCampos(12, "ESTQ_FIN", "N", PHP_INT_MAX, 2, true, 6)]
    public Decimal $EstqFin;

    #[SpedCampos(13, "ESTQ_INI_MEL", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $EstqIniMel;

    #[SpedCampos(14, "PROD_DIA_MEL", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $ProdDiaMel;

    #[SpedCampos(15, "UTIL_MEL", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $UtilMel;

    #[SpedCampos(16, "PROD_ALC_MEL", "N", PHP_INT_MAX, 2, false, 6)]
    public Decimal $ProdAlcMel;

    #[SpedCampos(17, "OBS", "C", PHP_INT_MAX, 0, false, 6)]
    public string $Obs;

    #[SpedCampos(18, "COD_ITEM", "C", 60, 0, true, 6)]
    public string $CodItem;

    #[SpedCampos(19, "TP_RESIDUO", "N", 2, 0, false, 6)]
    public ?int $TpResiduo;

    #[SpedCampos(20, "QTD_RESIDUO", "N", PHP_INT_MAX, 2, true, 6)]
    public Decimal $QtdResiduo;

    #[SpedCampos(21, "QTD_RESIDUO_DDG", "N", PHP_INT_MAX, 2, true, 18)]
    public Decimal $QtdResiduoDdg;

    #[SpedCampos(22, "QTD_RESIDUO_WDG", "N", PHP_INT_MAX, 2, true, 18)]
    public Decimal $QtdResiduoWdg;

    #[SpedCampos(23, "QTD_RESIDUO_CANA", "N", PHP_INT_MAX, 2, true, 18)]
    public Decimal $QtdResiduoCana;

    public function __construct()
    {
        parent::__construct("1391");
    }
}

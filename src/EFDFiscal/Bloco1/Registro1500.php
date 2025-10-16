<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1500 extends RegistroSped
{
    #[SpedCampos(2, "IND_OPER", "C", 1, 0, true, 2)]
    public int $IndOper;

    #[SpedCampos(3, "IND_EMIT", "C", 1, 0, true, 2)]
    public int $IndEmit;

    #[SpedCampos(4, "COD_PART", "C", 60, 0, true, 2)]
    public string $CodPart;

    #[SpedCampos(5, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;

    #[SpedCampos(6, "COD_SIT", "N", 2, 0, true, 2)]
    public int $CodSit;

    #[SpedCampos(7, "SER", "C", 4, 0, false, 2)]
    public string $Ser;

    #[SpedCampos(8, "SUB", "N", 3, 0, false, 2)]
    public int $Sub;

    #[SpedCampos(9, "COD_CONS", "C", 2, 0, true, 2)]
    public int $CodCons;

    #[SpedCampos(10, "NUM_DOC", "N", 9, 0, true, 2)]
    public string $NumDoc;

    #[SpedCampos(11, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;

    #[SpedCampos(12, "DT_E_S", "N", 8, 0, true, 2)]
    public DateTime $DtEs;

    #[SpedCampos(13, "VL_DOC", "N", 0, 2, true, 2)]
    public Decimal $VlDoc;

    #[SpedCampos(14, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;

    #[SpedCampos(15, "VL_FORN", "N", 0, 2, true, 2)]
    public Decimal $VlForn;

    #[SpedCampos(16, "VL_SERV_NT", "N", 0, 2, false, 2)]
    public Decimal $VlServNt;

    #[SpedCampos(17, "VL_TERC", "N", 0, 2, false, 2)]
    public Decimal $VlTerc;

    #[SpedCampos(18, "VL_DA", "N", 0, 2, false, 2)]
    public Decimal $VlDa;

    #[SpedCampos(19, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;

    #[SpedCampos(20, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;

    #[SpedCampos(21, "VL_BC_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcmsSt;

    #[SpedCampos(22, "VL_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlIcmsSt;

    #[SpedCampos(23, "COD_INF", "C", 6, 0, false, 2)]
    public string $CodInf;

    #[SpedCampos(24, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;

    #[SpedCampos(25, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;

    #[SpedCampos(26, "TP_LIGACAO", "N", 1, 0, false, 3)]
    public int $TpLigacao;

    #[SpedCampos(27, "COD_GRUPO_TENSAO", "C", 2, 0, false, 3)]
    public int $CodGrupoTensao;

    /** 
     * @var Registro1510[] 
     */
    private array $Registros1510 = [];

    public function __construct()
    {
        parent::__construct("1500");
        $this->IndOper = 1;
        $this->IndEmit = 0;
    }
}

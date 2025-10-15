<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD100 extends RegistroSped
{
    #[SpedCampos(2, "IND_OPER", "C", 1, 0, true, 2)]
    public int $IndOper;

    #[SpedCampos(3, "IND_EMIT", "C", 1, 0, true, 2)]
    public int $IndEmit;

    #[SpedCampos(4, "COD_PART", "C", 60, 0, false, 2)]
    public string $CodPart;

    #[SpedCampos(5, "COD_MOD", "C", 2, 0, true, 2)]
    public int $CodMod;

    #[SpedCampos(6, "COD_SIT", "N", 2, 0, true, 2)]
    public int $CodSit;

    #[SpedCampos(7, "SER", "C", 4, 0, false, 2)]
    public string $Ser;

    #[SpedCampos(8, "SUB", "C", 3, 0, false, 2)]
    public string $Sub;

    #[SpedCampos(9, "NUM_DOC", "N", 9, 0, true, 2)]
    public string $NumDoc;

    #[SpedCampos(10, "CHV_CTE", "N", 44, 0, false, 2)]
    public string $ChvCte;

    #[SpedCampos(11, "DT_DOC", "N", 8, 0, false, 2)]
    public ?DateTime $DtDoc;

    #[SpedCampos(12, "DT_AP", "N", 8, 0, false, 2)]
    public ?DateTime $DtAp;

    #[SpedCampos(13, "TP_CT-e", "N", 1, 0, false, 2)]
    public ?int $TpCte;

    #[SpedCampos(14, "CHV_CTE_REF", "N", 44, 0, false, 2)]
    public string $ChvCteRef;

    #[SpedCampos(15, "VL_DOC", "N", 0, 2, false, 2)]
    public ?Decimal $VlDoc;

    #[SpedCampos(16, "VL_DESC", "N", 0, 2, false, 2)]
    public ?Decimal $VlDesc;

    #[SpedCampos(17, "IND_FRT", "N", 1, 0, false, 2)]
    public int $IndFrt;

    #[SpedCampos(18, "VL_SERV", "N", 0, 2, false, 2)]
    public ?Decimal $VlServ;

    #[SpedCampos(19, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public ?Decimal $VlBcIcms;

    #[SpedCampos(20, "VL_ICMS", "N", 0, 2, false, 2)]
    public ?Decimal $VlIcms;

    #[SpedCampos(21, "VL_NT", "N", 0, 2, false, 2)]
    public ?Decimal $VlNt;

    #[SpedCampos(22, "COD_INF", "C", 6, 0, false, 2)]
    public string $CodInf;

    #[SpedCampos(22, "COD_CTA", "C", 0, 0, false, 2)]
    public string $CodCta;

    #[SpedCampos(24, "COD_MUN_ORIG", "N", 7, 0, false, 2)]
    public string $CodMunOrig;

    #[SpedCampos(25, "COD_MUN_DEST", "N", 7, 0, false, 2)]
    public string $CodMunDest;

    private ?RegistroD101 $RegistroD101 = null;

    /** 
     * @var RegistroD110[] 
     */
    private array $RegistrosD110 = [];

    /** 
     * @var RegistroD130[] 
     */
    private array $RegistrosD130 = [];

    private ?RegistroD140 $RegistroD140 = null;

    private ?RegistroD150 $RegistroD150 = null;
    /** 
     * @var RegistroD160[] 
     */
    private array $RegistrosD160 = [];

    private ?RegistroD170 $RegistroD170 = null;

    /** 
     * @var RegistroD180[] 
     */
    private array $RegistrosD180 = [];

    /** 
     * @var RegistroD190[] 
     */
    private array $RegistrosD190 = [];

    /** 
     * @var RegistroD195[] 
     */
    private array $RegistrosD195 = [];

    public function __construct()
    {
        parent::__construct("D100");
    }
}

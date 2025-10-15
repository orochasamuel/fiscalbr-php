<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1100 extends RegistroSped
{
    #[SpedCampos(2, "IND_DOC", "N", 1, 0, true, 2)]
    public int $IndDoc;

    #[SpedCampos(3, "NRO_DE", "N", 11, 0, true, 2)]
    public int $NroDe;

    #[SpedCampos(4, "DT_DE", "N", 8, 0, true, 2)]
    public DateTime $DtDe;

    #[SpedCampos(5, "NAT_EXP", "N", 1, 0, true, 2)]
    public int $NatExp;

    #[SpedCampos(6, "NRO_RE", "N", 12, 0, false, 2)]
    public int $NroRe;

    #[SpedCampos(7, "DT_RE", "N", 8, 0, false, 2)]
    public DateTime $DtRe;

    #[SpedCampos(8, "CHC_EMB", "C", 18, 0, false, 2)]
    public string $ChcEmb;

    #[SpedCampos(9, "DT_CHC", "N", 8, 0, false, 2)]
    public DateTime $DtChc;

    #[SpedCampos(10, "DT_AVB", "N", 8, 0, true, 2)]
    public DateTime $DtAvb;

    #[SpedCampos(11, "TP_CHC", "N", 1, 0, true, 2)]
    public int $TpChc;

    #[SpedCampos(12, "PAIS", "N", 3, 0, true, 2)]
    public int $Pais;

    /** 
     * @var Registro1105[] 
     */
    private array $Registros1105 = [];

    public function __construct()
    {
        parent::__construct("1100");
    }
}

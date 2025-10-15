<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1110 extends RegistroSped
{
    #[SpedCampos(2, "COD_PART", "C", 60, 0, true, 2)]
    public string $CodPart;

    #[SpedCampos(3, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;

    #[SpedCampos(4, "SERIE", "C", 3, 0, false, 2)]
    public string $Serie;

    #[SpedCampos(5, "NUM_DOC", "N", 9, 0, true, 2)]
    public int $NumDoc;

    #[SpedCampos(6, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;

    #[SpedCampos(7, "CHV_NFE", "N", 44, 0, false, 2)]
    public string $ChvNfe;

    #[SpedCampos(8, "NR_MEMO", "N", 0, 0, false, 2)]
    public string $CodItem;

    #[SpedCampos(9, "QTD", "N", 0, 3, true, 2)]
    public int $Qtd;

    #[SpedCampos(10, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;

    public function __construct()
    {
        parent::__construct("1110");
    }
}

<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1105 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;

    #[SpedCampos(3, "SERIE", "C", 3, 0, false, 2)]
    public string $Serie;

    #[SpedCampos(4, "NUM_DOC", "N", 9, 0, true, 2)]
    public int $NumDoc;

    #[SpedCampos(5, "CHV_NFE", "N", 44, 0, false, 2)]
    public string $ChvNfe;

    #[SpedCampos(6, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;

    #[SpedCampos(7, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;

    /** 
     * @var Registro1110[] 
     */
    private array $Registros1110 = [];

    public function __construct()
    {
        parent::__construct("1105");
    }
}

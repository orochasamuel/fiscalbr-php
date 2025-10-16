<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC595 extends RegistroSped
{
    #[SpedCampos(2, "COD_OBS", "C", 6, 0, true, 2)]
    public string $CodObs;

    #[SpedCampos(3, "TXT_COMPL", "C", 100, 0, false, 2)]
    public string $TxtCompl;

    /** 
     * @var RegistroC597[] 
     */
    private array $RegistrosC597 = [];

    public function __construct()
    {
        parent::__construct("C595");
    }
}

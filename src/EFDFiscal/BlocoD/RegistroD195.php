<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD195 extends RegistroSped
{
    #[SpedCampos(2, "COD_OBS", "C", 6, 0, true, 6)]
    public string $CodObs;

    #[SpedCampos(3, "TXT_COMPL", "C", 0, 0, false, 6)]
    public string $TxtCompl;

    /** 
     * @var RegistroD197[] 
     */
    private array $RegistrosD197 = [];

    public function __construct()
    {
        parent::__construct("D195");
    }
}

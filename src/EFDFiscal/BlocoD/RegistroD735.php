<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD735 extends RegistroSped
{
    #[SpedCampos(2, "COD_OBS", "C", 6, 0, true, 17)]
    public string $CodObs;


    ///     Descrição complementar do código de observação.

    #[SpedCampos(3, "TXT_COMPL", "C", 999, 0, false, 17)]
    public string $TxrCompl;

    public function __construct()
    {
        parent::__construct("D735");
    }
}

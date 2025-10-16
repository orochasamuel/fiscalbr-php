<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC855 extends RegistroSped
{
    #[SpedCampos(2, "COD_OBS", "C", 6, 0, true, 17)]
    public string $CodObs;


    ///     Descrição complementar do código de observação.

    #[SpedCampos(3, "TXT_COMPL", "C", 999, 0, false, 17)]
    public string $TxtCompl;

    /** 
     * @var RegistroC857[] 
     */
    private array $RegistrosC857 = [];

    public function __construct()
    {
        parent::__construct("C855");
    }
}

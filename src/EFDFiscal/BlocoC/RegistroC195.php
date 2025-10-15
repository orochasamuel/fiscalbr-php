<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC195 extends RegistroSped
{
    #[SpedCampos(2, "COD_OBS", "C", 6, 0, true, 2)]
    public string $CodObs;


    ///     Descrição complementar do código de observação

    #[SpedCampos(3, "TXT_COMPL", "C", 999, 0, false, 2)]
    public string $TxtCompl;

    /** 
     * @var RegistroC197[] 
     */
    private array $RegistrosC197 = [];

    public function __construct()
    {
        parent::__construct("C195");
    }
}

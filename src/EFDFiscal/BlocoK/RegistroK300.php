<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK300 extends RegistroSped
{
    /// <summary>
    ///    Data do reconhecimento da produção ocorrida no terceiro
    /// </summary>
    #[SpedCampos(2, "DT_PROD", "N", 8, 0, true, 13)]
    public DateTime $DtProd;

    /** 
     * @var RegistroK301[]
     */
    private array $RegistrosK301 = [];

    /** 
     * @var RegistroK302[]
     */
    private array $RegistrosK302 = [];

    public function __construct()
    {
        parent::__construct("K300");
    }
}

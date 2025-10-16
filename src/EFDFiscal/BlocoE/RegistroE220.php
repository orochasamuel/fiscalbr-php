<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE220 extends RegistroSped
{
    /// <summary>
    ///     Código de ajuste da apuração e dedução
    /// </summary>
    #[SpedCampos(2, "COD_AJ_APUR", "C", 8, 0, true, 2)]
    public string $CodAjApur;

    /// <summary>
    ///     Descrição complementar do ajuste da apuração
    /// </summary>
    #[SpedCampos(3, "DESCR_COMPL_AJ", "C", 1024, 0, false, 2)]
    public string $DescrComplAj;

    /// <summary>
    ///     Valor do ajuste da apuração
    /// </summary>
    #[SpedCampos(4, "VL_AJ_APUR", "N", 0, 2, true, 2)]
    public Decimal $VlAjApur;

    /** 
     * @var RegistroE230[] 
     */
    private array $RegistrosE230 = [];

    /** 
     * @var RegistroE240[] 
     */
    private array $RegistrosE240 = [];

    public function __construct()
    {
        parent::__construct("E220");
    }
}

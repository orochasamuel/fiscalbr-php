<?php

namespace FiscalBr\EFDFiscal\BlocoH;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroH030 extends RegistroSped
{
    /// <summary>
    ///     Valor médio unitário do ICMS OP
    /// </summary>
    #[SpedCampos(2, "VL_ICMS_OP", "N", 0, 6, true, 2)]
    public string $VlIcmsOp;

    /// <summary>
    ///     Valor médio unitário da base de cálculo do ICMS ST
    /// </summary>
    #[SpedCampos(3, "VL_BC_ICMS_ST", "N", 0, 6, true, 2)]
    public string $VlBcIcmsSt;

    /// <summary>
    ///    Valor médio unitário do ICMS ST
    /// </summary>
    #[SpedCampos(4, "VL_ICMS_ST", "N", 0, 6, true, 2)]
    public string $VlIcmsSt;

    /// <summary>
    ///    Valor médio unitário do FCP
    /// </summary>
    #[SpedCampos(5, "VL_FCP", "N", 0, 6, true, 2)]
    public string $VlFcp;

    public function __construct()
    {
        parent::__construct("H030");
    }
}

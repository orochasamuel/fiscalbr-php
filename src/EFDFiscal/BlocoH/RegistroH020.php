<?php

namespace FiscalBr\EFDFiscal\BlocoH;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroH020 extends RegistroSped
{
    /// <summary>
    ///     Código da Situação Tributária referente ao ICMS, conforme a Tabela indicada no item 4.3.1
    /// </summary>
    #[SpedCampos(2, "CST_ICMS", "N", 3, 0, true, 6)]
    public string $CstIcms;

    /// <summary>
    ///     Informe a base de cálculo do ICMS
    /// </summary>
    #[SpedCampos(3, "BC_ICMS", "N", 0, 2, true, 6)]
    public Decimal $BcIcms;

    /// <summary>
    ///     Informe o valor do ICMS a ser debitado ou creditado
    /// </summary>
    #[SpedCampos(4, "VL_ICMS", "N", 0, 2, true, 6)]
    public Decimal $VlIcms;

    public function __construct()
    {
        parent::__construct("H020");
    }
}

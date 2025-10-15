<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE115 extends RegistroSped
{
    /// <summary>
    ///     Código da informação adicional conforme tabela a ser definida pelas SEFAZ
    /// </summary>
    #[SpedCampos(2, "COD_INF_ADIC", "C", 8, 0, true, 2)]
    public string $CodInfAdic;

    /// <summary>
    ///     Valor referente à informação adicional
    /// </summary>
    #[SpedCampos(3, "VL_INF_ADIC", "N", 0, 2, true, 2)]
    public Decimal $VlInfAdic;

    /// <summary>
    ///     Descrição complementar do ajuste
    /// </summary>
    #[SpedCampos(4, "DESCR_COMPL_AJ", "C", 1024, 0, true, 2)]
    public string $DescrComplAj;

    public function __construct()
    {
        parent::__construct("E115");
    }
}

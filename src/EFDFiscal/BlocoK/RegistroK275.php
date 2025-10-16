<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK275 extends RegistroSped
{
    /// <summary>
    ///     Código da mercadoria (campo 02 do Registro 0200)
    /// </summary>
    #[SpedCampos(2, "COD_ITEM", "C", 60, 0, true, 11)]
    public string $CodItem;

    /// <summary>
    ///    Quantidade de correção positiva de apontamento ocorrido em período de apuração anterior
    /// </summary>
    #[SpedCampos(3, "QTD_COR_POS", "N", 0, 3, false, 11)]
    public Decimal $QtdCorPos;

    /// <summary>
    ///    Quantidade de correção negativa de apontamento ocorrido em período de apuração anterior
    /// </summary>
    #[SpedCampos(4, "QTD_COR NEG", "N", 0, 3, false, 11)]
    public Decimal $QtdCorNeg;

    /// <summary>
    ///    Código do insumo que foi substituído, caso ocorra a substituição, relativo aos Registros K235/K255
    /// </summary>
    #[SpedCampos(5, "COD_INS_SUBST", "C", 60, 0, false, 11)]
    public string $CodInstSubst;

    public function __construct()
    {
        parent::__construct("K275");
    }
}

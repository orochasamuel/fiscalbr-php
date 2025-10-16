<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK280 extends RegistroSped
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
    ///     Indicador do tipo de estoque:
    ///         0 = Estoque de propriedade do informante e em seu poder;
    ///         1 = Estoque de propriedade do informante e em posse de terceiros;
    ///         2 = Estoque de propriedade de terceiros e em posse do informante
    /// </summary>
    #[SpedCampos(5, "IND_EST", "C", 1, 0, true, 11)]
    public string $IndEst;

    /// <summary>
    ///     Código do participante (campo 02 do Registro 0150):
    ///         - proprietário/possuidor que não seja o informante do arquivo
    /// </summary>
    #[SpedCampos(6, "COD_PART", "C", 60, 0, false, 11)]
    public string $CodPart;

    public function __construct()
    {
        parent::__construct("K280");
    }
}

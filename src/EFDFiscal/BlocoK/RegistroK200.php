<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK200 extends RegistroSped
{
    /// <summary>
    ///     Data do estoque final
    /// </summary>
    #[SpedCampos(2, "DT_EST", "N", 8, 0, true, 10)]
    public DateTime $DtEst;

    /// <summary>
    ///     Código do item
    /// </summary>
    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 10)]
    public string $CodItem;

    /// <summary>
    ///     Quantidade em estoque
    /// </summary>
    #[SpedCampos(4, "QTD", "N", 0, 3, true, 10)]
    public Decimal $Qtd;

    /// <summary>
    ///     Indicador do tipo de estoque
    /// </summary>
    /// <remarks>
    ///     0 - Estoque de propriedade do informante e em seu poder
    ///     <para />
    ///     1 - Estoque de propriedade do informante e em posse de terceiros
    ///     <para />
    ///     2 - Estoque de propriedade de terceiros e em posse do informante
    /// </remarks>
    #[SpedCampos(5, "IND_EST", "C", 1, 0, true, 10)]
    public int $IndEst;

    /// <summary>
    ///     Código do participante
    /// </summary>
    /// <remarks>
    ///     - proprietário/possuidor que não seja o informante do arquivo
    /// </remarks>
    #[SpedCampos(6, "COD_PART", "C", 60, 0, false, 10)]
    public string $CodPart;

    public function __construct()
    {
        parent::__construct("K200");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE313 extends RegistroSped
{
    /// <summary>
    ///     Código do participante
    /// </summary>
    #[SpedCampos(2, "COD_PART", "C", 60, 0, true, 2)]
    public string $CodPart;

    /// <summary>
    ///     Código do modelo do documento fiscal
    /// </summary>
    #[SpedCampos(3, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;

    /// <summary>
    ///     Série do documento fiscal
    /// </summary>
    #[SpedCampos(4, "SER", "C", 4, 0, false, 2)]
    public string $Ser;

    /// <summary>
    ///     Subsérie do documento fiscal
    /// </summary>
    #[SpedCampos(5, "SUB", "N", 3, 0, false, 2)]
    public string $Sub;

    /// <summary>
    ///     Número do documento fiscal
    /// </summary>
    #[SpedCampos(6, "NUM_DOC", "N", 9, 0, true, 2)]
    public string $NumDoc;

    /// <summary>
    ///     Chave do documento eletrônico
    /// </summary>
    #[SpedCampos(7, "CHV_DOCe", "N", 44, 0, false, 2)]
    public string $ChvDocE;

    /// <summary>
    ///     Data da emissão do documento fiscal
    /// </summary>
    #[SpedCampos(8, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;

    /// <summary>
    ///     Código do item
    /// </summary>
    #[SpedCampos(9, "COD_ITEM", "C", 60, 0, false, 2)]
    public string $CodItem;

    /// <summary>
    ///     Valor do ajuste para a operação/item
    /// </summary>
    #[SpedCampos(10, "VL_AJ_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlAjItem;

    public function __construct()
    {
        parent::__construct("E313");
    }
}

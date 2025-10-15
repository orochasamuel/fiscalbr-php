<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE113 extends RegistroSped
{
    /// <summary>
    ///     Código do participante (campo 02 do Registro 0150)
    /// </summary>
    /// <remarks>
    ///     - do emitente do documento ou do remetente das mercadorias, no caso das entradas;
    ///     - do adquirente, no caso de saídas.
    /// </remarks>
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
    ///     Data da emissão do documento fiscal
    /// </summary>
    #[SpedCampos(7, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;

    /// <summary>
    ///     Código do item (campo 02 do Registro 0200)
    /// </summary>
    #[SpedCampos(8, "COD_ITEM", "C", 60, 0, false, 2)]
    public string $CodItem;

    /// <summary>
    ///     Valor do ajuste para operação/item
    /// </summary>
    #[SpedCampos(9, "VL_AJ_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlAjItem;

    /// <summary>
    ///     Chave do Documento Eletrônico
    /// </summary>
    #[SpedCampos(10, "CHV_DOCe", "N", 44, 0, false, 2)]
    public string $ChvDocE;

    public function __construct()
    {
        parent::__construct("E113");
    }
}

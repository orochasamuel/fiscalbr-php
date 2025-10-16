<?php

namespace FiscalBr\EFDFiscal\BlocoH;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroH005 extends RegistroSped
{
    /// <summary>
    ///     Código do item (campo 02 do Registro 0200)
    /// </summary>
    #[SpedCampos(2, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;

    /// <summary>
    ///     Unidade do item
    /// </summary>
    #[SpedCampos(3, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;

    /// <summary>
    ///     Quantidade do item
    /// </summary>
    #[SpedCampos(4, "QTD", "N", 0, 3, true, 2)]
    public Decimal $Qtd;

    /// <summary>
    ///     Valor unitário do item
    /// </summary>
    #[SpedCampos(5, "VL_UNIT", "N", 0, 6, true, 2)]
    public Decimal $VlUnit;

    /// <summary>
    ///     Valor do item
    /// </summary>
    #[SpedCampos(6, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlItem;

    /// <summary>
    ///     Indicador de propriedade/posse do item: 0- Item de propriedade do informante e em seu poder; 1- Item de propriedade
    ///     do informante em posse de terceiros; 2- Item de propriedade de terceiros em posse do informante
    /// </summary>
    #[SpedCampos(7, "IND_PROP", "C", 1, 0, true, 2)]
    public int $IndProp;

    /// <summary>
    ///     Código do participante (campo 02 do Registro 0150): - proprietário/possuidor que não seja o informante do arquivo
    /// </summary>
    #[SpedCampos(8, "COD_PART", "C", 60, 0, false, 2)]
    public string $CodPart;

    /// <summary>
    ///     Descrição complementar.
    /// </summary>
    #[SpedCampos(9, "TXT_COMPL", "C", 0, 0, false, 2)]
    public string $TxtCompl;

    /// <summary>
    ///     Código da conta analítica contábil debitada/creditada
    /// </summary>
    #[SpedCampos(10, "COD_CTA", "C", PHP_INT_MAX, 0, false, 2)]
    public string $CodCta;

    /// <summary>
    ///     Valor do item para efeitos do Imposto de Renda.
    /// </summary>
    #[SpedCampos(11, "VL_ITEM_IR", "N", 0, 2, false, 9)]
    public Decimal $VlItemIr;

    /** 
     * @var RegistroH020[]
     */
    private array $RegistrosH020 = [];

    private ?RegistroH030 $RegistroH030 = null;

    public function __construct()
    {
        parent::__construct("H010");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC810 extends RegistroSped
{
    #[SpedCampos(2, "NUM_ITEM", "N", 3, 0, true, 2)]
    public int $NumItem;


    ///    Código do item (campo 02 do Registro 0200)

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;

    // <summary>
    ///     Quantidade do item

    #[SpedCampos(4, "QTD", "N", 0, 5, true, 2)]
    public Decimal $Qtd;


    ///    Unidade do item (Campo 02 do registro 0190)

    #[SpedCampos(5, "UNID", "C", 6, 0, true, 2)]
    public int $Unid;


    ///     Valor total do item(mercadorias ou serviços)

    #[SpedCampos(6, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlItem;


    ///     Código da situação tributária referente ao ICMS

    #[SpedCampos(7, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código fiscal da operação e prestação

    #[SpedCampos(8, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;

    private ?RegistroC815 $RegistroC815 = null;

    public function __construct()
    {
        parent::__construct("C810");
    }
}

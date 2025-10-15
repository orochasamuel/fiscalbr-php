<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC370 extends RegistroSped
{
    #[SpedCampos(2, "NUM_ITEM", "N", 3, 0, true, 2)]
    public int $NumItem;


    ///     Código do item

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;


    ///     Quantidade do item

    #[SpedCampos(4, "QTD", "N", 0, 3, true, 2)]
    public Decimal $Qtd;


    ///     Unidade do item

    #[SpedCampos(5, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;


    ///     Valor total do item

    #[SpedCampos(6, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlItem;


    ///     Valor total do desconto no item

    #[SpedCampos(7, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;

    private ?RegistroC380 $RegistroC380 = null;

    public function __construct()
    {
        parent::__construct("C370");
    }
}

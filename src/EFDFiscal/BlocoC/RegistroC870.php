<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC870 extends RegistroSped
{
    #[SpedCampos(2, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;

    // <summary>
    ///     Quantidade do item

    #[SpedCampos(3, "QTD", "N", 0, 5, true, 2)]
    public Decimal $Qtd;


    ///    Unidade do item (Campo 02 do registro 0190)

    #[SpedCampos(4, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;


    ///     Código da situação tributária referente ao ICMS

    #[SpedCampos(5, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código fiscal da operação e prestação

    #[SpedCampos(6, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;

    private ?RegistroC880 $RegistroC880 = null;

    public function __construct()
    {
        parent::__construct("C870");
    }
}

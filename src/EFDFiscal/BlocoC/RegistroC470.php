<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC470 extends RegistroSped
{
    #[SpedCampos(2, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;


    ///     Quantidade do item

    #[SpedCampos(3, "QTD", "N", 0, 3, true, 2)]
    public Decimal $Qtd;


    ///     Quantidade cancelada, no caso de cancelamento parcial do item

    #[SpedCampos(4, "QTD_CANC", "N", 0, 3, false, 2)]
    public Decimal $QtdCanc;


    ///     Unidade do item

    #[SpedCampos(5, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;


    ///     Valor total do item

    #[SpedCampos(6, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlItem;


    ///     Código da situação tributária

    #[SpedCampos(7, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código fiscal de operação e prestação

    #[SpedCampos(8, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;


    ///     Alíquota do ICMS - carga tributária efetiva em percentual

    #[SpedCampos(9, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Valor do PIS

    #[SpedCampos(10, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor da COFINS

    #[SpedCampos(11, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;

    private ?RegistroC480 $RegistroC480 = null;

    public function __construct()
    {
        parent::__construct("C470");
    }
}

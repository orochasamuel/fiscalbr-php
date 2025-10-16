<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC425 extends RegistroSped
{
    #[SpedCampos(2, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;


    ///     Quantidade acumulada do item

    #[SpedCampos(3, "QTD", "N", 0, 3, true, 2)]
    public Decimal $Qtd;


    ///     Unidade do item

    #[SpedCampos(4, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;


    ///     Valor acumulado do item

    #[SpedCampos(5, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlItem;


    ///     Valor do PIS

    #[SpedCampos(6, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Vaor da COFINS

    #[SpedCampos(7, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;

    /** 
     * @var RegistroC430[] 
     */
    private array $RegistrosC430 = [];

    public function __construct()
    {
        parent::__construct("C425");
    }
}

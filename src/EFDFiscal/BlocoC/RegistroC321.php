<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC321 extends RegistroSped
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


    ///     Valor do desconto acumulado

    #[SpedCampos(6, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///     Valor acumulado da base de cálculo do ICMS

    #[SpedCampos(7, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;


    ///     Valor acumulado do ICMS debitado

    #[SpedCampos(8, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;


    ///     Valor acumulado do PIS

    #[SpedCampos(9, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor acumulado da COFINS

    #[SpedCampos(10, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;

    private ?RegistroC330 $RegistroC330 = null;

    public function __construct()
    {
        parent::__construct("C321");
    }
}

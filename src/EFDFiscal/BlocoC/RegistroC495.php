<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC495 extends RegistroSped
{
    #[SpedCampos(2, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Código do item

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;


    ///     Quantidade acumulada do item

    #[SpedCampos(4, "QTD", "N", 0, 3, true, 2)]
    public Decimal $Qtd;


    ///     Quantidade cancelada acumulada, no caso de cancelamento parcial do item

    #[SpedCampos(5, "QTD_CANC", "N", 0, 3, false, 2)]
    public Decimal $QtdCanc;


    ///     Unidade do item

    #[SpedCampos(6, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;


    ///     Valor acumulado do item

    #[SpedCampos(7, "VL_ITEM", "N", 0, 2, true, 2)]
    public Decimal $VlItem;


    ///     Valor acumulado dos descontos

    #[SpedCampos(8, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///     Valor acumulado dos cancelamentos

    #[SpedCampos(9, "VL_CANC", "N", 0, 2, false, 2)]
    public Decimal $VlCanc;


    ///     Valor acumulado dos acréscimos

    #[SpedCampos(10, "VL_ACMO", "N", 0, 2, false, 2)]
    public Decimal $VlAcmo;


    ///     Valor acumulado da base de cálculo do ICMS

    #[SpedCampos(11, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;


    ///     Valor acumulado do ICMS

    #[SpedCampos(12, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;


    ///     Valor das saídas isentas do ICMS

    #[SpedCampos(13, "VL_ISEN", "N", 0, 2, false, 2)]
    public Decimal $VlIsen;


    ///     Valor das saídas sob não-incidência ou não-tributadas pelo ICMS

    #[SpedCampos(14, "VL_NT", "N", 0, 2, false, 2)]
    public Decimal $VlNt;


    ///     Valor das aídas de mercadorias adquiridas com substituição tributária do ICMS

    #[SpedCampos(15, "VL_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlIcmsSt;

    public function __construct()
    {
        parent::__construct("C495");
    }
}

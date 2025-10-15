<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1800 extends RegistroSped
{
    #[SpedCampos(2, "VL_CARGA", "N", 0, 2, true, 3)]
    public Decimal $VlCarga;


    ///     Valor das prestações passageiros/cargas(não tributado)

    #[SpedCampos(3, "VL_PASS", "N", 0, 2, true, 3)]
    public Decimal $VlPass;


    ///     Valor total do faturamento

    #[SpedCampos(4, "VL_FAT", "N", 0, 2, true, 3)]
    public Decimal $VlFat;


    ///     Índice para rateio

    #[SpedCampos(5, "IND_RAT", "N", 8, 2, true, 3)]
    public Decimal $IndRat;


    ///     Valor total dos créditos do ICMS

    #[SpedCampos(6, "VL_ICMS_ANT", "N", 0, 2, true, 3)]
    public Decimal $VlIcmsAnt;


    ///     Valor da base de cálculo do ICMS

    #[SpedCampos(7, "VL_BC_ICMS", "N", 0, 2, true, 3)]
    public Decimal $VlBcIcms;


    ///     Valor do ICMS apurado no cálculo

    #[SpedCampos(8, "VL_ICMS_APUR", "N", 0, 2, true, 3)]
    public Decimal $VlIcmsApur;


    ///     Valor da base de cálculo do ICMS apurada

    #[SpedCampos(9, "VL_BC_ICMS_APUR", "N", 0, 2, true, 3)]
    public Decimal $VlBcIcmsApur;


    ///     Valor da diferença a ser levada a estorno de crédito na apuração

    #[SpedCampos(10, "VL_DIF", "N", 0, 2, true, 3)]
    public Decimal $VlDif;

    public function __construct()
    {
        parent::__construct("1800");
    }
}

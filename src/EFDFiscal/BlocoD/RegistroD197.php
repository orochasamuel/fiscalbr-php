<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD197 extends RegistroSped
{
    #[SpedCampos(2, "COD_AJ", "C", 10, 0, true, 6)]
    public string $CodAj;


    ///     Descrição complementar do ajuste do documento fiscal

    #[SpedCampos(3, "DESCR_COMPL_AJ", "C", 999, 0, false, 6)]
    public string $DescrComplAj;


    ///     Código do item

    #[SpedCampos(4, "COD_ITEM", "C", 60, 0, false, 6)]
    public string $CodItem;


    ///     Base de cálculo do ICMS ou do ICMS ST

    #[SpedCampos(5, "VL_BC_ICMS", "N", 0, 2, false, 6)]
    public Decimal $VlBcIcms;


    ///     Alíquota do ICMS

    #[SpedCampos(6, "ALIQ_ICMS", "N", 6, 2, false, 6)]
    public Decimal $AliqIcms;


    ///     Valor do ICMS ou do ICMS ST

    #[SpedCampos(7, "VL_ICMS", "N", 0, 2, false, 6)]
    public Decimal $VlIcms;


    ///     Outros valores

    #[SpedCampos(8, "VL_OUTROS", "N", 0, 2, false, 6)]
    public Decimal $VlOutros;

    public function __construct()
    {
        parent::__construct("D197");
    }
}

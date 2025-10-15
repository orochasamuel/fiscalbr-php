<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC190 extends RegistroSped
{
    #[SpedCampos(2, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código fiscal de operação e prestação do agrupamento de itens

    #[SpedCampos(3, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;


    ///     Alíquota do ICMS

    #[SpedCampos(4, "ALIQ_ICMS", "N", 6, 2, true, 2)]
    public Decimal $AliqIcms;


    ///     Valor da operação na combinação de CST_ICMS, CFOP e alíquota do ICMS,
    ///     correspondente ao somatório do valor das mercadorias, despesas acessórias
    ///     (frete, seguros e outras despesas acessórias), ICMS_ST e IPI.

    #[SpedCampos(5, "VL_OPR", "N", 0, 2, true, 2)]
    public Decimal $VlOpr;


    ///     Parcela correspondente ao "Valor da base de cálculo do ICMS" referente à
    ///     combinação de CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(6, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcms;


    ///     Parcela correspondente ao "Valor do ICMS" referente à combinação de CST_ICMS,
    ///     CFOP e alíquota do ICMS.

    #[SpedCampos(7, "VL_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlIcms;


    ///     Parcela correspondente ao "Valor da base de cálculo do ICMS" da substituição
    ///     tributária referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(8, "VL_BC_ICMS_ST", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcmsSt;


    ///     Parcela correspondente ao valor creditado/debitado do ICMS da substituição
    ///     tributária, referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(9, "VL_ICMS_ST", "N", 0, 2, true, 2)]
    public Decimal $VlIcmsSt;


    ///     Valor não tributado em função da redução da base de cálculo do ICMS, referente
    ///     à combinação de CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(10, "VL_RED_BC", "N", 0, 2, true, 2)]
    public Decimal $VlRedBc;


    ///     Parcela correspondente ao "Valor do IPI" referente à combinação CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(11, "VL_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlIpi;


    ///     Código da observação do lançamento fiscal

    #[SpedCampos(12, "COD_OBS", "C", 6, 0, false, 3)]
    public string $CodObs;

    private ?RegistroC191 $RegistroC191 = null;

    public function __construct()
    {
        parent::__construct("C190");
    }
}

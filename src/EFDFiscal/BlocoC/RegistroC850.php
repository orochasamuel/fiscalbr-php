<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC850 extends RegistroSped
{
    #[SpedCampos(2, "CST_ICMS", "N", 3, 0, true, 2)]
    public int $CstIcms;


    ///     Código fiscal de operação e prestação do agrupamento de itens

    #[SpedCampos(3, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;


    ///     Alíquota do ICMS

    #[SpedCampos(4, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///     Valor total do CF-E na combinação de CST_ICMS, CFOP e alíquota do ICMS,
    ///     correspondente ao somatório do valor líquido dos itens.

    #[SpedCampos(5, "VL_OPR", "N", 0, 2, true, 2)]
    public Decimal $VlOpr;


    ///     Valor acumulado da base de cálculo do ICMS referente à
    ///     combinação de CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(6, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcms;


    ///     Parcela correspondente ao "Valor do ICMS" referente à combinação de CST_ICMS,
    ///     CFOP e alíquota do ICMS.

    #[SpedCampos(7, "VL_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlIcms;


    ///     Código da observação do lançamento fiscal

    /// <remarks>
    ///     Preenchimento: este campo só deve ser informado pelos contribuintes localizados em UF que determine em
    ///     sua legislação o seu preenchimento. Validação: o código informado deve constar do registro 0460.
    /// </remarks>
    #[SpedCampos(8, "COD_OBS", "C", 6, 0, false, 2)]
    public string $CodObs;

    /** 
     * @var RegistroC855[] 
     */
    private array $RegistrosC855 = [];

    public function __construct()
    {
        parent::__construct("C850");
    }
}

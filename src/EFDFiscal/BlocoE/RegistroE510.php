<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE510 extends RegistroSped
{
    /// <summary>
    ///     Código fiscal de operação e prestação do agrupamento de itens
    /// </summary>
    #[SpedCampos(2, "CFOP", "N", 4, 0, true, 2)]
    public int $Cfop;

    /// <summary>
    ///     Código da situação tributária referente ao IPI
    /// </summary>
    #[SpedCampos(3, "CST_IPI", "C", 2, 0, true, 2)]
    public int $CstIpi;

    /// <summary>
    ///     Parcela correspondente ao "Valor Contábil" referente ao CFOP e ao Código de Tributação do IPI
    /// </summary>
    #[SpedCampos(4, "VL_CONT_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlContIpi;

    /// <summary>
    ///     Parcela correspondente ao "Valor da base de cálculo do IPI" referente ao CFOP e ao Código de Tributação do IPI,
    ///     para operação tributadas
    /// </summary>
    #[SpedCampos(5, "VL_BC_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlBcIpi;

    /// <summary>
    ///     Parcela correspondete ao "Valor do IPI" referente ao CFOP e ao Código de Tributação do IPI, para operações
    ///     tributadas
    /// </summary>
    #[SpedCampos(6, "VL_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlIpi;

    public function __construct()
    {
        parent::__construct("E510");
    }
}

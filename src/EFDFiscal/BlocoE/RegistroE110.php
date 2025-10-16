<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE110 extends RegistroSped
{
    /// <summary>
    ///     Valor total dos débitos por "Saídas e prestações com débito do imposto"
    /// </summary>
    #[SpedCampos(2, "VL_TOT_DEBITOS", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlTotDebitos;

    /// <summary>
    ///     Valor total dos ajustes a débito decorrentes do documento fiscal.
    /// </summary>
    #[SpedCampos(3, "VL_AJ_DEBITOS", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlAjDebitos;

    /// <summary>
    ///     Valor total de "Ajustes a débito"
    /// </summary>
    #[SpedCampos(4, "VL_TOT_AJ_DEBITOS", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlTotAjDebitos;

    /// <summary>
    ///     Valor total de Ajustes “Estornos de créditos”
    /// </summary>
    #[SpedCampos(5, "VL_ESTORNOS_CRED", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlEstornosCred;

    /// <summary>
    ///     Valor total dos créditos por "Entradas e aquisições com crédito do imposto"
    /// </summary>
    #[SpedCampos(6, "VL_TOT_CREDITOS", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlTotCreditos;

    /// <summary>
    ///     Valor total dos ajustes a crédito decorrentes do documento fiscal.
    /// </summary>
    #[SpedCampos(7, "VL_AJ_CREDITOS", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlAjCreditos;

    /// <summary>
    ///     Valor total de "Ajustes a crédito"
    /// </summary>
    #[SpedCampos(8, "VL_TOT_AJ_CREDITOS", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlTotAjCreditos;

    /// <summary>
    ///     Valor total de Ajustes “Estornos de Débitos”
    /// </summary>
    #[SpedCampos(9, "VL_ESTORNOS_DEB", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlEstornosDeb;

    /// <summary>
    ///     Valor total de "Saldo credor do período anterior"
    /// </summary>
    #[SpedCampos(10, "VL_SLD_CREDOR_ANT", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlSldCredorAnt;

    /// <summary>
    ///     Valor do saldo devedor apurado
    /// </summary>
    #[SpedCampos(11, "VL_SLD_APURADO", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlSldApurado;

    /// <summary>
    ///     Valor total de "Deduções"
    /// </summary>
    #[SpedCampos(12, "VL_TOT_DED", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlTotDed;

    /// <summary>
    ///     Valor total de "ICMS a recolher (11-12)
    /// </summary>
    #[SpedCampos(13, "VL_ICMS_RECOLHER", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlIcmsRecolher;

    /// <summary>
    ///     Valor total de "Saldo credor a transportar para o período seguinte”
    /// </summary>
    #[SpedCampos(14, "VL_SLD_CREDOR_TRANSPORTAR", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $VlSldCredorTransportar;

    /// <summary>
    ///     Valores recolhidos ou a recolher, extraapuração.
    /// </summary>
    #[SpedCampos(15, "DEB_ESP", "N", PHP_INT_MAX, 2, true, 2)]
    public Decimal $DebEsp;

    /** 
     * @var RegistroE111[] 
     */
    private array $RegistrosE111 = [];

    /** 
     * @var RegistroE115[] 
     */
    private array $RegistrosE115 = [];

    /** 
     * @var RegistroE116[] 
     */
    private array $RegistrosE116 = [];

    public function __construct()
    {
        parent::__construct("E110");
    }
}

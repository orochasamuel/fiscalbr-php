<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE520 extends RegistroSped
{
    /// <summary>
    ///     Saldo credor do IPI transferido do período anterior
    /// </summary>
    #[SpedCampos(2, "VL_SD_ANT_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlSdAntIpi;

    /// <summary>
    ///     Valor total dos débitos por "Saídas com débito do imposto"
    /// </summary>
    #[SpedCampos(3, "VL_DEB_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlDebIpi;

    /// <summary>
    ///     Valor total dos créditos por "Entradas e aquisições com crédito do imposto"
    /// </summary>
    #[SpedCampos(4, "VL_CRED_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlCredIpi;

    /// <summary>
    ///     Valor de "Outros débitos" do IPI (inclusive estornos de crédito)
    /// </summary>
    #[SpedCampos(5, "VL_OD_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlOdIpi;

    /// <summary>
    ///     Valor de "Outros créditos" do IPI (inclusive estornos de débitos)
    /// </summary>
    #[SpedCampos(6, "VL_OC_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlOcIpi;

    /// <summary>
    ///     Valor do saldo credor do IPI a transportar para o período seguinte
    /// </summary>
    #[SpedCampos(7, "VL_SC_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlScIpi;

    /// <summary>
    ///     Valor do saldo devedor do IPI a recolher
    /// </summary>
    #[SpedCampos(8, "VL_SD_IPI", "N", 0, 2, true, 2)]
    public Decimal $VlSdIpi;

    /** 
     * @var RegistroE530[] 
     */
    private array $RegistrosE530 = [];

    public function __construct()
    {
        parent::__construct("E520");
    }
}

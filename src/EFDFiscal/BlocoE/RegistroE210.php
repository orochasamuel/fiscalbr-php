<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE210 extends RegistroSped
{
    /// <summary>
    ///     Indicador de movimento
    /// </summary>
    /// <remarks>
    ///     0 - Sem operações com ST
    ///     1 - Com operações de ST
    /// </remarks>
    #[SpedCampos(2, "IND_MOV_ST", "C", 1, 0, true, 2)]
    public int $IndMovSt;

    /// <summary>
    ///     Valor do "Saldo credor do período anterior - Substituição Tributária"
    /// </summary>
    #[SpedCampos(3, "VL_SLD_CRED_ANT_ST", "N", 0, 2, true, 2)]
    public Decimal $VlSldCredAntSt;

    /// <summary>
    ///     Valor total do ICMS ST de devolução de mercadorias
    /// </summary>
    #[SpedCampos(4, "VL_DEVOL_ST", "N", 0, 2, true, 2)]
    public Decimal $VlDevolSt;

    /// <summary>
    ///     Valor total do ICMS ST de ressarcimentos
    /// </summary>
    #[SpedCampos(5, "VL_RESSARC_ST", "N", 0, 2, true, 2)]
    public Decimal $VlRessarcSt;

    /// <summary>
    ///     Valor total de Ajustes "Outros créditos ST" e "Estorno de débitos ST"
    /// </summary>
    #[SpedCampos(6, "VL_OUT_CRED_ST", "N", 0, 2, true, 2)]
    public Decimal $VlOutCredSt;

    /// <summary>
    ///     Valor total dos ajustes a crédito de ICMS ST, proveninetes de ajustes do documento fiscal
    /// </summary>
    #[SpedCampos(7, "VL_AJ_CREDITOS_ST", "N", 0, 2, true, 2)]
    public Decimal $VlAjCreditosSt;

    /// <summary>
    ///     Valor total do ICMS retido por substituição tributária
    /// </summary>
    #[SpedCampos(8, "VL_RETENÇAO_ST", "N", 0, 2, true, 2)]
    public Decimal $VlRetencaoSt;

    /// <summary>
    ///     Valor total dos ajustes "Outros débitos ST" e "Estorno de créditos ST"
    /// </summary>
    #[SpedCampos(9, "VL_OUT_DEB_ST", "N", 0, 2, true, 2)]
    public Decimal $VlOutDebSt;

    /// <summary>
    ///     Valor total dos ajustes a débito de ICMS ST, provenientes de ajustes do documento fiscal
    /// </summary>
    #[SpedCampos(10, "VL_AJ_DEBITOS_ST", "N", 0, 2, true, 2)]
    public Decimal $VlAjDebitosSt;

    /// <summary>
    ///     Valor total do saldo devedor antes das deduções
    /// </summary>
    #[SpedCampos(11, "VL_SLD_DEV_ANT_ST", "N", 0, 2, true, 2)]
    public Decimal $VlSldDevAntSt;

    /// <summary>
    ///     Valor total dos ajustes "Deduções ST"
    /// </summary>
    #[SpedCampos(12, "VL_DEDUÇÕES_ST", "N", 0, 2, true, 2)]
    public Decimal $VlDeducoesSt;

    /// <summary>
    ///     Imposto a recolher ST (11-12)
    /// </summary>
    #[SpedCampos(13, "VL_ICMS_RECOL_ST", "N", 0, 2, true, 2)]
    public Decimal $VlIcmsRecolSt;

    /// <summary>
    ///     Saldo credor de ST a transportar para o período seguinte
    /// </summary>
    #[SpedCampos(14, "VL_SLD_CRED_ST_TRANSPORTAR", "N", 0, 2, true, 2)]
    public Decimal $VlSldCredStTransportar;

    /// <summary>
    ///     Valores recohidos ou a recolher, extra-apuração
    /// </summary>
    #[SpedCampos(15, "DEB_ESP_ST", "N", 0, 2, true, 2)]
    public Decimal $DebEspSt;

    /** 
     * @var RegistroE220[] 
     */
    private array $RegistrosE220 = [];

    /** 
     * @var RegistroE250[] 
     */
    private array $RegistrosE250 = [];

    public function __construct()
    {
        parent::__construct("E210");
    }
}

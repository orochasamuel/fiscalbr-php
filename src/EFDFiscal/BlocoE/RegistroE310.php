<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE310 extends RegistroSped
{
    /// <summary>
    ///     Indicador de movimento
    /// </summary>
    /// <remarks>
    ///     0 - Sem operações com ICMS Diferencial de Alíquota da UF de Origem/Destino
    ///     1 - Com operações de ICMS Diferencial de Alíquota da UF de Origem/Destino
    /// </remarks>
    #[SpedCampos(2, "IND_MOV_DIFAL", "C", 1, 0, true, 2)]
    public int $IndMovDifal;

    /// <summary>
    ///     Valor do "Saldo credor do período anterior - ICMS Diferencial de Alíquota da UF de Origem/Destino"
    /// </summary>
    #[SpedCampos(3, "VL_SLD_CRED_ANT_DIFAL", "N", 0, 2, true, 2)]
    public Decimal $VlSldCredAntDifal;

    /// <summary>
    ///     Valor total dos débitos por "Saídas e prestações com débito do ICMS referente ao diferencial de alíquota devido à
    ///     UF do Remetente/Destinatário"
    /// </summary>
    #[SpedCampos(4, "VL_TOT_DEBITOS_DIFAL", "N", 0, 2, true, 2)]
    public Decimal $VlTotDebitosDifal;

    /// <summary>
    ///     Valor total dos ajustes "Outros débitos ICMS Diferencial de Alíquota da UF de Origem/Destino" e "Estorno de
    ///     créditos ICMS Diferencial de Alíquota da UF de Origem/Destino"
    /// </summary>
    #[SpedCampos(5, "VL_OUT_DEB_DIFAL", "N", 0, 2, true, 2)]
    public Decimal $VlOutDebDifal;

    /// <summary>
    ///     Valor total dos créditos do ICMS referente ao diferencial de alíquota devido à UF de Origem/Destino
    /// </summary>
    #[SpedCampos(6, "VL_TOT_CREDITOS_DIFAL", "N", 0, 2, true, 2)]
    public Decimal $VlTotCreditosDifal;

    /// <summary>
    ///     Valor total de ajustes "Outros créditos ICMS diferencial de Alíquota da UF de Origem/Destino" e "Estorno de débitos
    ///     ICMS Diferencial de Alíquota da UF de Origem/Destino"
    /// </summary>
    #[SpedCampos(7, "VL_OUT_CRED_DIFAL", "N", 0, 2, true, 2)]
    public Decimal $VlOutCredDifal;

    /// <summary>
    ///     Valor total de "Saldo devedor ICMS Diferencial de Alíquota da UF de Origem/Destino antes das deduções"
    /// </summary>
    #[SpedCampos(8, "VL_SLD_DEV_ANT_DIFAL", "N", 0, 2, true, 2)]
    public Decimal $VlSldDevAntDifal;

    /// <summary>
    ///     Valor total dos ajustes "Deduções ICMS Diferencial de Alíquota da UF de Origem/Destino"
    /// </summary>
    #[SpedCampos(9, "VL_DEDUÇÕES_DIFAL", "N", 0, 2, true, 2)]
    public Decimal $VlDeducoesDifal;

    /// <summary>
    ///     Valor recolhido ou a recolher referente ICMS Diferencial de Alíquota da UF de de Origem/Destino (08-09)
    /// </summary>
    #[SpedCampos(10, "VL_RECOL_DIFAL", "N", 0, 2, true, 2)]
    public Decimal $VlRecolDifal;

    /// <summary>
    ///     Saldo credor a transportar para o período seguinte referente ao ICMS Diferencial de Alíquota da UF de Origem/Destino
    /// </summary>
    #[SpedCampos(11, "VL_SLD_CRED_TRANSPORTAR_DIFAL", "N", 0, 2, true, 2)]
    public Decimal $VlSldCredTransportarDifal;

    /// <summary>
    ///      Valor recolhido ou a recolher, estra-apuração - ICMS Diferencial de Alíquota da UF de de Origem/Destino
    /// </summary>
    #[SpedCampos(12, "DEB_ESP_DIFAL", "N", 0, 2, true, 2)]
    public Decimal $DebEspDifal;

    /// <summary>
    ///     Valor do "Slado credor de período anterior - FCP"
    /// </summary>
    #[SpedCampos(13, "VL_SLD_CRED_ANT_FCP", "N", 0, 2, true, 2)]
    public Decimal $VlSldCredAntFcp;

    /// <summary>
    ///     Valor total dos débitos FCP por "Saídas e prestações"
    /// </summary>
    #[SpedCampos(14, "VL_TOT_DEB_FCP", "N", 0, 2, true, 2)]
    public Decimal $VlTotDebFcp;

    /// <summary>
    ///     Valor total dos ajustes "Outros débitos FCP" e "Estornos de créditos FCP"
    /// </summary>
    #[SpedCampos(15, "VL_OUT_DEB_FCP", "N", 0, 2, true, 2)]
    public Decimal $VlOutDebFcp;

    /// <summary>
    ///     Valor total dos créditos FCP por Entradas
    /// </summary>
    #[SpedCampos(16, "VL_TOT_CRED_FCP", "N", 0, 2, true, 2)]
    public Decimal $VlTotCredFcp;

    /// <summary>
    ///     Valor total dos ajustes "Outros créditos FCP" e "Estornos de débitos FCP"
    /// </summary>
    #[SpedCampos(17, "VL_OUT_CRED_FCP", "N", 0, 2, true, 2)]
    public Decimal $VlOutCredFcp;

    /// <summary>
    ///     Valor total de Saldo devedor FCP antes das deduções
    /// </summary>
    #[SpedCampos(18, "VL_SLD_DEV_ANT_FCP", "N", 0, 2, true, 2)]
    public Decimal $VlSldDevAntFcp;

    /// <summary>
    ///     Valor total das deduções "FCP"
    /// </summary>
    #[SpedCampos(19, "VL_DEDUÇÕES_FCP", "N", 0, 2, true, 2)]
    public Decimal $VlDeduoesFcp;

    /// <summary>
    ///     Valor recolhido ou a recolher referente ao FCP (18-19)
    /// </summary>
    #[SpedCampos(20, "VL_RECOL_FCP", "N", 0, 2, true, 2)]
    public Decimal $VlRecolFCP;

    /// <summary>
    ///     Saldo credor a transportar para o período seguinte referente ao FCP
    /// </summary>
    #[SpedCampos(21, "VL_SLD_CRED_TRANSPORTAR_FCP", "N", 0, 2, true, 2)]
    public Decimal $VlSldCredTransportarFcp;

    /// <summary>
    ///     Valores recolhidos ou a recolher, extra-apuração - FCP
    /// </summary>
    #[SpedCampos(22, "DEB_ESP_FCP", "N", 0, 2, true, 2)]
    public Decimal $DebEspFcp;

    /** 
     * @var RegistroE311[] 
     */
    private array $RegistrosE311 = [];

    /** 
     * @var RegistroE316[] 
     */
    private array $RegistrosE316 = [];

    public function __construct()
    {
        parent::__construct("E310");
    }
}

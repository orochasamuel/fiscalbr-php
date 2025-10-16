<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1920 extends RegistroSped
{
    #[SpedCampos(2, "VL_TOT_TRANSF_DEBITOS_OA", "N", 0, 2, true, 4)]
    public Decimal $VlTotTransfDebitosOa;


    ///     Valor total de "Ajustes a débito"

    #[SpedCampos(3, "VL_TOT_AJ_DEBITOS_OA", "N", 0, 2, true, 4)]
    public Decimal $VlTotAjDebitosOa;


    ///     Valor total de ajustes "Estornos de créditos"

    #[SpedCampos(4, "VL_ESTORNOS_CRED_OA", "N", 0, 2, true, 4)]
    public Decimal $VlEstornosCredOa;


    ///     Valor total dos créditos por "Entradas e aquisições com crédito do imposto"

    #[SpedCampos(5, "VL_TOT_TRANSF_CREDITOS_OA", "N", 0, 2, true, 4)]
    public Decimal $VlTotTransfCreditosOa;


    ///     Valor total de "Ajustes a crédito"

    #[SpedCampos(6, "VL_TOT_AJ_CREDITOS_OA", "N", 0, 2, true, 4)]
    public Decimal $VlTotAjCreditosOa;


    ///     Valor total de ajustes "Estornos de Débitos"

    #[SpedCampos(7, "VL_ESTORNOS_DEB_OA", "N", 0, 2, true, 4)]
    public Decimal $VlEstornosDebOa;


    ///     Valor total de "Saldo credor do período anterior"

    #[SpedCampos(8, "VL_SLD_CREDOR_ANT_OA", "N", 0, 2, true, 4)]
    public Decimal $VlSldCredorAntOa;


    ///     Valor do saldo devedor apurado

    #[SpedCampos(9, "VL_SLD_APURADO_OA", "N", 0, 2, true, 4)]
    public Decimal $VlSldApuradoOa;


    ///     Valor total de "Deduções"

    #[SpedCampos(10, "VL_TOT_DED", "N", 0, 2, true, 4)]
    public Decimal $VlTotDed;


    ///     Valor total de "ICMS a recolher"

    #[SpedCampos(11, "VL_ICMS_RECOLHER_OA", "N", 0, 2, true, 4)]
    public Decimal $VlIcmsRecolherOa;


    ///     Valor total de "Saldo credor a transportar para o período seguinte"

    #[SpedCampos(12, "VL_SLD_CREDOR_TRANSP_OA", "N", 0, 2, true, 4)]
    public Decimal $VlSldCredorTranspOa;


    ///     Valores recolhidos ou a recolher, extra-apuração

    #[SpedCampos(13, "DEB_ESP_OA", "N", 0, 2, true, 4)]
    public Decimal $DebEspOa;

    /** 
     * @var Registro1921[] 
     */
    private array $Registros1921 = [];

    /** 
     * @var Registro1925[] 
     */
    private array $Registros1925 = [];

    /** 
     * @var Registro1926[] 
     */
    private array $Registros1926 = [];

    public function __construct()
    {
        parent::__construct("1920");
    }
}

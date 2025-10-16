<?php

namespace FiscalBr\EFDFiscal\BlocoG;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroG110 extends RegistroSped
{
    /// <summary>
    ///     Data final a que a apuração se refere
    /// </summary>
    #[SpedCampos(2, "DT_INI", "N", 8, 0, true, 4)]
    public DateTime $DtIni;

    /// <summary>
    ///     Data final a que a apuração se refere
    /// </summary>
    #[SpedCampos(3, "DT_FIN", "N", 8, 0, true, 4)]
    public DateTime $DtFin;

    /// <summary>
    ///     Saldo inicial de ICMS do CIAP, composto por ICMS de bens que entraram anteriormente ao período de apuração
    ///     (somatório dos campos 05 a 08 dos registros G125)
    /// </summary>
    #[SpedCampos(4, "SALDO_IN_ICMS", "N", 0, 2, true, 4)]
    public Decimal $SaldoInIcms;

    /// <summary>
    ///     Somatório das parcelas de ICMS passível de apropriação de cada bem (campo 10 do G125)
    /// </summary>
    #[SpedCampos(5, "SOM_PARC", "N", 0, 2, true, 4)]
    public Decimal $SomParc;

    /// <summary>
    ///     Valor do somatório das saídas tributadas e saídas para exportação
    /// </summary>
    #[SpedCampos(6, "VL_TRIB_EXP", "N", 0, 2, true, 4)]
    public Decimal $VlTribExp;

    /// <summary>
    ///     Valor total de saídas
    /// </summary>
    #[SpedCampos(7, "VL_TOTAL", "N", 0, 2, true, 4)]
    public Decimal $VlTotal;

    /// <summary>
    ///     Índice de participação do valor do somatório das saídas tributadas e saídas para exportação no valor total de
    ///     saídas (campo 06 dividido pelo campo 07)
    /// </summary>
    #[SpedCampos(8, "IND_PER_SAI", "N", 0, 8, true, 4)]
    public Decimal $IndPerSai;

    /// <summary>
    ///     Valor de ICMS a ser apropriado na apuração do ICMS, corresponde à multiplicação do campo 05 pelo campo 08.
    /// </summary>
    #[SpedCampos(9, "ICMS_APROP", "N", 0, 2, true, 4)]
    public Decimal $IcmsAprop;

    /// <summary>
    ///     Valor de outros créditos a ser apropriado na apuração do ICMS, corresponde ao somatório do campo 09 do registro
    ///     G126.
    /// </summary>
    #[SpedCampos(10, "SOM_ICMS_OC", "N", 0, 2, true, 4)]
    public Decimal $SomIcmsOc;

    /** 
     * @var RegistroG125[]
     */
    private array $RegistrosG125 = [];

    public function __construct()
    {
        parent::__construct("G110");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoG;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroG126 extends RegistroSped
{
    /// <summary>
    ///     Data inicial do período de apuração
    /// </summary>
    #[SpedCampos(2, "DT_INI", "N", 8, 0, true, 4)]
    public DateTime $DtIni;

    /// <summary>
    ///     Data final do período de apuração
    /// </summary>
    #[SpedCampos(3, "DT_FIM", "N", 8, 0, true, 4)]
    public DateTime $DtFim;

    /// <summary>
    ///     Número de parcela do ICMS
    /// </summary>
    #[SpedCampos(4, "NUM_PARC", "N", 3, 02, true, 4)]
    public int $NumParc;

    /// <summary>
    ///     Valor da parcela de ICMS passível de apropriação - antes da aplicação da participação percentual do valor das
    ///     saídas tributadas/exportação sobre as saídas totais
    /// </summary>
    #[SpedCampos(5, "VL_PARC_PASS", "N", 0, 2, true, 4)]
    public Decimal $VlParcPass;

    /// <summary>
    ///     Valor do somatório das saídas tributadas e saídas para exportação no período indicado neste registro
    /// </summary>
    #[SpedCampos(6, "VL_TRIB_OC", "N", 0, 2, true, 4)]
    public Decimal $VlTribOc;

    /// <summary>
    ///     Valor total de saídas no período indicado neste registro
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
    ///     Valor de outros créditos de ICMS a ser apropriado na apuração (campo 05 vezes o campo 08)
    /// </summary>
    #[SpedCampos(9, "VL_PARC_APROP", "N", 0, 2, true, 4)]
    public Decimal $VlParcAprop;

    public function __construct()
    {
        parent::__construct("G126");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoG;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroG140 extends RegistroSped
{
    /// <summary>
    ///     Número sequencial do item no documento fiscal
    /// </summary>
    #[SpedCampos(2, "NUM_ITEM", "N", 3, 0, true, 4)]
    public int $NumItem;

    /// <summary>
    ///     Código correspondente do bem no documento fiscal (campo 02 do registro 0200)
    /// </summary>
    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 4)]
    public string $CodItem;

    /// <summary>
    ///     Quantidade, deste item da nota fiscal, que foi aplicada neste bem, expressa na mesma unidade constante no documento fiscal de entrada
    /// </summary>
    #[SpedCampos(4, "QTDE", "N", 0, 5, true, 4)]
    public Decimal $Qtde;

    /// <summary>
    ///     Unidade do item constante no documento fiscal de entrada
    /// </summary>
    #[SpedCampos(5, "UNID", "C", 6, 0, true, 4)]
    public string $Unid;

    /// <summary>
    ///     Valor do ICMS da Operação Própria na entrada do item, proporcional à quantidade aplicada no bem ou componente.
    /// </summary>
    #[SpedCampos(6, "VL_ICMS_OP_APLICADO", "N", 0, 2, true, 4)]
    public Decimal $VlIcmsOpAplicado;

    /// <summary>
    ///     Valor do ICMS ST na entrada do item, proporcional à quantidade aplicada no bem ou componente.
    /// </summary>
    #[SpedCampos(7, "VL_ICMS_ST_APLICADO", "N", 0, 2, true, 4)]
    public Decimal $VlIcmsStAplicado;

    /// <summary>
    ///     Valor do ICMS sobre Frete do Conhecimento de Transporte na entrada do item, proporcional à quantidade aplicada no bem ou componente.
    /// </summary>
    #[SpedCampos(8, "VL_ICMS_FRT_APLICADO", "N", 0, 2, true, 4)]
    public Decimal $VlIcmsFrtAplicado;

    /// <summary>
    ///     Valor do ICMS Diferencial de Alíquota, na entrada do item, proporcional à quantidade aplicada no bem ou componente.
    /// </summary>
    #[SpedCampos(9, "VL_ICMS_DIF_APLICADO", "N", 0, 2, true, 4)]
    public Decimal $VlIcmsDifAplicado;

    public function __construct()
    {
        parent::__construct("G140");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK220 extends RegistroSped
{
    /// <summary>
    ///     Data da movimentação interna
    /// </summary>
    #[SpedCampos(2, "DT_MOV", "N", 8, 0, true, 10)]
    public DateTime $DtMov;

    /// <summary>
    ///     Código do item de origem
    /// </summary>
    #[SpedCampos(3, "COD_ITEM_ORI", "C", 60, 0, true, 10)]
    public string $CodItemOri;

    /// <summary>
    ///     Código do item de destino
    /// </summary>
    #[SpedCampos(4, "COD_ITEM_DEST", "C", 60, 0, true, 10)]
    public string $CodItemDest;

    /// <summary>
    ///     Quantidade movimentada
    /// </summary>
    #[SpedCampos(5, "QTD", "N", 0, 3, true, 10)]
    public Decimal $Qtd;

    /// <summary>
    ///     Quantidade movimentada do item de destino
    ///     Guia Prático EFD-ICMS/IPI – Versão 2.0.21
    ///     Atualização: 22/08/2017
    /// </summary>
    #[SpedCampos(6, "QTD_DEST", "N", 3, 0, false, 10)]
    public string $QtdDest;

    public function __construct()
    {
        parent::__construct("K220");
    }
}

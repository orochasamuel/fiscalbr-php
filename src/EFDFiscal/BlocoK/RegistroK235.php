<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK235 extends RegistroSped
{
    /// <summary>
    ///     Data de saída do estoque para alocação ao produto
    /// </summary>
    #[SpedCampos(2, "DT_SAÍDA", "N", 8, 0, true, 10)]
    public DateTime $DtSaida;

    /// <summary>
    ///     Código do item componente/insumo
    /// </summary>
    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 10)]
    public string $CodItem;

    /// <summary>
    ///     Quantidade consumida do item
    /// </summary>
    #[SpedCampos(4, "QTD", "N", 0, 6, true, 10)]
    public Decimal $Qtd;

    /// <summary>
    ///     Código do insumo que foi substituído, caso ocorra a substituição
    /// </summary>
    #[SpedCampos(5, "COD_INS_SUBST", "C", 60, 0, false, 10)]
    public string $CodInsSubst;

    public function __construct()
    {
        parent::__construct("K235");
    }
}

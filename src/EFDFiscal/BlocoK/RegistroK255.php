<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK255 extends RegistroSped
{
    /// <summary>
    ///     Data do reconhecimento do consumo do insumo referente ao produto informado no campo 04 do Registro K250
    /// </summary>
    #[SpedCampos(2, "DT_CONS", "N", 8, 0, true, 10)]
    public DateTime $DtCons;

    /// <summary>
    ///     Código do insumo
    /// </summary>
    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 10)]
    public string $CodItem;

    /// <summary>
    ///     Quantidade de consumo do insumo
    /// </summary>
    #[SpedCampos(4, "QTD", "N", 0, 3, true, 10)]
    public Decimal $Qtd;

    /// <summary>
    ///     Código do insumo que foi substituído, caso ocorra a substituição
    /// </summary>
    #[SpedCampos(5, "COD_INS_SUBST", "C", 60, 0, false, 10)]
    public string $CodInsSubst;

    public function __construct()
    {
        parent::__construct("K255");
    }
}

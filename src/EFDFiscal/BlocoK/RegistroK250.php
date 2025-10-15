<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK250 extends RegistroSped
{
    /// <summary>
    ///     Data do reconhecimento da produção ocorrida no terceiro
    /// </summary>
    #[SpedCampos(2, "DT_PROD", "N", 8, 0, true, 10)]
    public DateTime $DtProd;

    /// <summary>
    ///     Código do item produzido
    /// </summary>
    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 10)]
    public string $CodItem;

    /// <summary>
    ///     Quantidade produzida
    /// </summary>
    #[SpedCampos(4, "QTD", "N", 0, 3, true, 10)]
    public Decimal $Qtd;

    /** 
     * @var RegistroK255[]
     */
    private array $RegistrosK255 = [];

    public function __construct()
    {
        parent::__construct("K250");
    }
}

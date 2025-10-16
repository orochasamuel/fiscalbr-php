<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1923 extends RegistroSped
{
    #[SpedCampos(2, "COD_PART", "C", 60, 0, true, 4)]
    public string $CodPart;


    ///     Código do modelo do documento fiscal

    #[SpedCampos(3, "COD_MOD", "C", 2, 0, true, 4)]
    public string $CodMod;


    ///     Série do documento fiscal

    #[SpedCampos(4, "SER", "C", 4, 0, false, 4)]
    public string $Ser;


    ///     Subsérie do documento fiscal

    #[SpedCampos(5, "SUB", "N", 3, 0, false, 4)]
    public string $Sub;


    ///     Número do documento fiscal

    #[SpedCampos(6, "NUM_DOC", "N", 9, 0, true, 4)]
    public string $NumDoc;


    ///     Data da emissão do documento fiscal

    #[SpedCampos(7, "DT_DOC", "N", 8, 0, true, 4)]
    public DateTime $DtDoc;


    ///     Código do item

    #[SpedCampos(8, "COD_ITEM", "C", 60, 0, false, 4)]
    public string $CodItem;


    ///     Valor do ajuste para a operação/item

    #[SpedCampos(9, "VL_AJ_ITEM", "N", 0, 2, true, 4)]
    public Decimal $VlAjItem;

    public function __construct()
    {
        parent::__construct("1923");
    }
}

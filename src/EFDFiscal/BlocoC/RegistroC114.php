<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC114 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Número de série de fabricação do ECF

    #[SpedCampos(3, "ECF_FAB", "C", 21, 0, true, 2)]
    public string $EcfFab;


    ///     Número do caixa atribuído ao ECF

    #[SpedCampos(4, "ECF_CX", "N", 3, 0, true, 2)]
    public int $EcfCx;


    ///     Número do documento fiscal

    #[SpedCampos(5, "NUM_DOC", "N", 9, 0, true, 2)]
    public string $NumDoc;


    ///     Data da emissão do documento fiscal

    #[SpedCampos(6, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;

    public function __construct()
    {
        parent::__construct("C114");
    }
}

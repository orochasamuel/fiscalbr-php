<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC120 extends RegistroSped
{
    #[SpedCampos(2, "COD_DOC_IMP", "C", 1, 0, true, 2)]
    public int $CodDocImp;


    ///     Número do documento de importação

    #[SpedCampos(3, "NUM_DOC_IMP", "C", 12, 0, true, 2)]
    public string $NumDocImp;


    ///     Valor pago de PIS na importação

    #[SpedCampos(4, "PIS_IMP", "N", 0, 2, false, 2)]
    public Decimal $PisImp;


    ///     Valor pago de COFINS na importação

    #[SpedCampos(5, "COFINS_IMP", "N", 0, 2, false, 2)]
    public Decimal $CofinsImp;


    ///     Número do Ato Concessório do regime Drawback

    #[SpedCampos(6, "NUM_ACDRAW", "C", 20, 0, false, 3)]
    public string $NumAcDraw;

    public function __construct()
    {
        parent::__construct("C120");
    }
}

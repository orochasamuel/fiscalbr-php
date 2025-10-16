<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC141 extends RegistroSped
{
    #[SpedCampos(2, "NUM_PARC", "N", 2, 0, true, 2)]
    public int $NumParc;


    ///     Data de vencimento da parcela

    #[SpedCampos(3, "DT_VCTO", "N", 8, 0, true, 2)]
    public DateTime $DtVcto;


    ///     Valor da parcela a receber/pagar

    #[SpedCampos(4, "VL_PARC", "N", 0, 2, true, 2)]
    public Decimal $VlParc;

    public function __construct()
    {
        parent::__construct("C141");
    }

    public function getNumParc(): int
    {
        return $this->NumParc;
    }
}

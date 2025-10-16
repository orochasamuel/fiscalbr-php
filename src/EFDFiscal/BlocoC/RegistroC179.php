<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC179 extends RegistroSped
{
    #[SpedCampos(2, "BC_ST_ORIG_DEST", "N", 0, 2, true, 2)]
    public Decimal $BcStOrigDest;


    ///     Valor do ICMS-ST a repassar/deduzir em operações interestaduais

    #[SpedCampos(3, "ICMS_ST_REP", "N", 0, 2, true, 2)]
    public Decimal $IcmsStRep;


    ///     Valor do ICMS-ST a complementar à UF de destino

    #[SpedCampos(4, "ICMS_ST_COMPL", "N", 0, 2, false, 2)]
    public Decimal $IcmsStCompl;


    ///     Valor da base de cálculo de retenção em remessa promovida por substituído intermediário

    #[SpedCampos(5, "BC_RET", "N", 0, 2, false, 2)]
    public Decimal $BcRet;


    ///     Valor da parcela do imposto retido em remessa promovida por substituído intermediário

    #[SpedCampos(6, "ICMS_RET", "N", 0, 2, false, 2)]
    public Decimal $IcmsRet;

    public function __construct()
    {
        parent::__construct("C179");
    }
}

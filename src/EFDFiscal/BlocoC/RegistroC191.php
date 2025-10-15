<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC191 extends RegistroSped
{
    #[SpedCampos(2, "VL_FCP_OP", "N", 0, 2, false, 2)]
    public Decimal $VlFcpOp;


    ///    Valor do Fundo de Combate à Pobreza (FCP) vinculado à operação de substituição tributária, na combinação de CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(3, "VL_FCP_ST", "N", 0, 2, false, 2)]
    public Decimal $VlFcpSt;


    ///   Valor relativo ao Fundo de Combate à Pobreza (FCP) retido anteriormente nas operações com SubstituiçãoTributárias, na combinação de CST_ICMS, CFOP e alíquota do ICMS

    #[SpedCampos(4, "VL_FCP_RET", "N", 0, 2, false, 2)]
    public Decimal $VlFcpRet;

    public function __construct()
    {
        parent::__construct("C191");
    }
}

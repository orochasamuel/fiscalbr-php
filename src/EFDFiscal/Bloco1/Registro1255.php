<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1255 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOT_REST_COMPL", "C", 5, 2, true, 2)]
    public string $CodMotRestCompl;

    #[SpedCampos(3, "VL_CREDITO_ICMS_OP_MOT", "N", 15, 2, true, 2)]
    public Decimal $VlCreditoIcmsOpMot;

    #[SpedCampos(4, "VL_ICMS_ST_REST_MOT", "N", 15, 2, true, 2)]
    public Decimal $VlIcmsStRestMot;

    #[SpedCampos(5, "VL_FCP_ST_REST_MOT", "N", 15, 2, true, 2)]
    public Decimal $VlFcpStRestMot;

    #[SpedCampos(6, "VL_ICMS_ST_COMPL_MOT", "N", 15, 2, true, 2)]
    public Decimal $VlIcmsStComplMot;

    #[SpedCampos(7, "VL_FCP_ST_COMPL_MOT", "N", 15, 2, true, 2)]
    public Decimal $VlFcpStComplMotH;

    public function __construct()
    {
        parent::__construct("1255");
    }
}

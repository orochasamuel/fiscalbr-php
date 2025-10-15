<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1250 extends RegistroSped
{
    #[SpedCampos(2, "VL_CREDITO_ICMS_OP", "N", 0, 2, true, 2)]
    public string $VlCreditoIcmsOp;

    #[SpedCampos(3, "VL_ICMS_ST_REST", "N", 0, 2, true, 2)]
    public Decimal $VlIcmsStRest;

    #[SpedCampos(4, "VL_FCP_ST_REST", "N", 0, 2, true, 2)]
    public Decimal $VlFcpStRest;

    #[SpedCampos(5, "VL_ICMS_ST_COMPL", "N", 0, 2, true, 2)]
    public Decimal $VlIcmsStCompl;

    #[SpedCampos(6, "VL_FCP_ST_COMPL", "N", 0, 2, true, 2)]
    public Decimal $VlFcpStCompl;

    /** 
     * @var Registro1255[] 
     */
    private array $Registros1255 = [];

    public function __construct()
    {
        parent::__construct("1250");
    }
}

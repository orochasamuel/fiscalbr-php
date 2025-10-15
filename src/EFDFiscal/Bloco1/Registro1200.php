<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1200 extends RegistroSped
{
    #[SpedCampos(2, "COD_AJ_APUR", "C", 8, 0, true, 2)]
    public string $CodAjApur;

    #[SpedCampos(3, "SLD_CRED", "N", 0, 2, true, 2)]
    public Decimal $SldCred;

    #[SpedCampos(4, "CRED_APR", "N", 0, 2, true, 2)]
    public Decimal $CredApr;

    #[SpedCampos(5, "CRED_RECEB", "N", 0, 2, true, 2)]
    public Decimal $CredReceb;

    #[SpedCampos(6, "CRED_UTIL", "N", 0, 2, true, 2)]
    public Decimal $CredUtil;

    #[SpedCampos(7, "SLD_CRED_FIM", "N", 0, 2, true, 2)]
    public Decimal $SldCredFim;

    /** 
     * @var Registro1210[] 
     */
    private array $Registros1210 = [];

    public function __construct()
    {
        parent::__construct("1200");
    }
}

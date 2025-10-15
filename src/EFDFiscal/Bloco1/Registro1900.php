<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1900 extends RegistroSped
{
    #[SpedCampos(2, "IND_APUR_ICMS", "C", 1, 0, true, 4)]
    public int $IndApurIcms;


    ///     Descrição complementar de outra apuração do ICMS

    #[SpedCampos(3, "DESCR_COMPL_OUT_APUR", "C", 1024, 0, true, 4)]
    public string $DescrComplOutApur;

    /** 
     * @var Registro1910[] 
     */
    private array $Registros1910 = [];

    public function __construct()
    {
        parent::__construct("1900");
    }
}

<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1921 extends RegistroSped
{
    #[SpedCampos(2, "COD_AJ_APUR", "C", 8, 0, true, 4)]
    public string $CodAjApur;


    ///     Descrição complementar do ajuste da apuração

    #[SpedCampos(3, "DESCR_COMPL_AJ", "C", 1024, 0, false, 4)]
    public string $DescrComplAj;


    ///     Valor do ajuste da apuração

    #[SpedCampos(4, "VL_AJ_APUR", "N", 0, 2, true, 4)]
    public Decimal $VlAjApur;

    /** 
     * @var Registro1922[] 
     */
    private array $Registros1922 = [];
    
    /** 
     * @var Registro1923[] 
     */
    private array $Registros1923 = [];

    public function __construct()
    {
        parent::__construct("1921");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD110 extends RegistroSped
{
    #[SpedCampos(2, "NUM_ITEM", "N", 3, 0, true, 2)]
    public Decimal $NumItem;


    ///   Codigo do item (campo 02 do Registro 0200)

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;


    ///   Valor do serviço

    #[SpedCampos(4, "VL_SERV", "N", 0, 2, true, 2)]
    public Decimal $VlServ;


    ///   Outros valores

    #[SpedCampos(5, "VL_OUT", "N", 0, 2, false, 2)]
    public Decimal $VlOut;

    /** 
     * @var RegistroD120[] 
     */
    private array $RegistrosD120 = [];

    public function __construct()
    {
        parent::__construct("D110");
    }
}

<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1925 extends RegistroSped
{
    #[SpedCampos(2, "COD_INF_ADIC", "C", 8, 0, true, 4)]
    public string $CodInfAdic;


    ///     Valor referente à informação adicional

    #[SpedCampos(3, "VL_INF_ADIC", "N", 0, 2, true, 4)]
    public Decimal $VlInfAdic;


    ///     Descrição complementar do ajuste

    #[SpedCampos(4, "DESCR_COMPL_AJ", "C", 1024, 0, false, 4)]
    public string $DescrComplAj;

    public function __construct()
    {
        parent::__construct("1925");
    }
}

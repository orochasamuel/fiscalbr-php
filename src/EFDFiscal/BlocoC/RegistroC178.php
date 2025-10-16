<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC178 extends RegistroSped
{
    #[SpedCampos(2, "CL_ENQ", "C", 5, 0, true, 2)]
    public string $ClEnq;


    ///     Valor por unidade padrão de tributação

    #[SpedCampos(3, "VL_UNID", "N", 0, 2, true, 2)]
    public Decimal $VlUnid;


    ///     Quantidade total de produtos na unidade padrão de tributação

    #[SpedCampos(4, "QUANT_PAD", "N", 0, 3, true, 2)]
    public Decimal $QuantPad;

    public function __construct()
    {
        parent::__construct("C178");
    }
}

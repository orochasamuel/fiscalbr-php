<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC174 extends RegistroSped
{
    #[SpedCampos(2, "IND_ARM", "C", 1, 0, true, 2)]
    public int $IndArm;


    ///     Numeração de série de fabricação da arma

    #[SpedCampos(3, "NUM_ARM", "C", 1024, 0, true, 2)]
    public string $NumArm;


    ///     Descrição da arma, compreendendo: número do cano, calibre, marca, capacidade de cartunhos, tipo de funcionamento,
    ///     quantidade de canos, comprimento, tipo de alma, quantidade e sentido das raias e demais elementos que permitam sua
    ///     perfeita identificação

    #[SpedCampos(4, "DESCR_COMPL", "C", 1024, 0, true, 2)]
    public string $DescrCompl;

    public function __construct()
    {
        parent::__construct("C174");
    }
}

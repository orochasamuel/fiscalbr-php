<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC175 extends RegistroSped
{
    #[SpedCampos(2, "IND_VEIC_OPER", "C", 1, 0, true, 2)]
    public int $IndVeicOper;


    ///     CNPJ da concessionária

    #[SpedCampos(3, "CNPJ", "N", 14, 0, false, 2)]
    public string $Cnpj;


    ///     Sigla da unidade da federação da concessionária

    #[SpedCampos(4, "UF", "C", 2, 0, false, 2)]
    public string $Uf;


    ///     Chassi do veículo

    #[SpedCampos(5, "CHASSI_VEIC", "C", 17, 0, true, 2)]
    public string $ChassiVeic;

    public function __construct()
    {
        parent::__construct("C175");
    }
}

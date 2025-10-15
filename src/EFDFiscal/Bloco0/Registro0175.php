<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0175 extends RegistroSped
{
    #[SpedCampos(2, "DT_ALT", "N", 8, 0, true, 2)]
    public DateTime $DtAlt;

    #[SpedCampos(3, "NR_CAMPO", "C", 2, 0, true, 2)]
    public string $NrCampo;

    #[SpedCampos(4, "CONT_ANT", "C", 100, 0, true, 2)]
    public string $ContAnt;

    public function __construct()
    {
        parent::__construct("0175");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->DtAlt ??= new DateTime();
        $this->NrCampo ??= '';
        $this->ContAnt ??= '';
    }
}

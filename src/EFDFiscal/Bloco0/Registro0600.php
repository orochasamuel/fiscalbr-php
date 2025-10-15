<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0600 extends RegistroSped
{
    #[SpedCampos(2, "DT_ALT", "N", 8, 0, true, 4)]
    public DateTime $DtAlt;

    #[SpedCampos(3, "COD_CCUS", "C", 60, 0, true, 4)]
    public string $CodCcus;

    #[SpedCampos(4, "CCUS", "C", 60, 0, true, 4)]
    public string $Ccus;

    public function __construct()
    {
        parent::__construct("0600");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->DtAlt ??= new DateTime();
        $this->CodCcus ??= '';
        $this->Ccus ??= '';
    }
}

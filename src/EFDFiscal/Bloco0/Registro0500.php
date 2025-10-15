<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0500 extends RegistroSped
{
    #[SpedCampos(2, "DT_ALT", "N", 8, 0, true, 4)]
    public DateTime $DtAlt;

    #[SpedCampos(3, "COD_NAT_CC", "C", 2, 0, true, 4)]
    public string $CodNatCc;

    #[SpedCampos(4, "IND_CTA", "C", 1, 0, true, 4)]
    public string $IndCta;

    #[SpedCampos(5, "NIVEL", "N", 5, 0, true, 4)]
    public int $Nivel;

    #[SpedCampos(6, "COD_CTA", "C", 60, 0, true, 4)]
    public string $CodCta;

    #[SpedCampos(7, "NOME_CTA", "C", 60, 0, true, 4)]
    public string $NomeCta;

    public function __construct()
    {
        parent::__construct("0500");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->DtAlt ??= new DateTime();
        $this->CodNatCc ??= '';
        $this->IndCta ??= '';
        $this->Nivel ??= 0;
        $this->CodCta ??= '';
        $this->NomeCta ??= '';
    }
}

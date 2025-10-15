<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0300 extends RegistroSped
{
    #[SpedCampos(2, "COD_IND_BEM", "C", 60, 0, true, 4)]
    public string $CodIndBem;

    #[SpedCampos(3, "IDENT_MERC", "C", 1, 0, true, 4)]
    public int $IdentMerc;

    #[SpedCampos(4, "DESCR_ITEM", "C", 255, 0, true, 4)]
    public string $DescrItem;

    #[SpedCampos(5, "COD_PRNC", "C", 60, 0, false, 4)]
    public string $CodPrnc;

    #[SpedCampos(6, "COD_CTA", "C", 60, 0, true, 4)]
    public string $CodCta;

    #[SpedCampos(7, "NR_PARC", "N", 3, 0, false, 4)]
    public int $NrParc;

    private ?Registro0305 $Registro0305 = null;

    public function __construct()
    {
        parent::__construct("0300");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->CodIndBem ??= '';
        $this->IdentMerc ??= 0;
        $this->DescrItem ??= '';
        $this->CodPrnc ??= '';
        $this->CodCta ??= '';
        $this->NrParc ??= 0;
    }
}

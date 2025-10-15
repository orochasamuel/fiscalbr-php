<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0305 extends RegistroSped
{
    #[SpedCampos(2, "COD_CCUS", "C", 60, 0, true, 4)]
    public string $CodCcus;

    #[SpedCampos(3, "FUNC", "C", 255, 0, true, 4)]
    public string $Func;

    #[SpedCampos(4, "VIDA_UTIL", "N", 3, 0, false, 4)]
    public int $VidaUtil;

    public function __construct()
    {
        parent::__construct("0305");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->CodCcus ??= '';
        $this->Func ??= '';
        $this->VidaUtil ??= 0;
    }
}

<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0205 extends RegistroSped
{
    #[SpedCampos(2, "DESCR_ANT_ITEM", "C", PHP_INT_MAX, 0, false, 2)]
    public string $DescrAntItem;

    #[SpedCampos(3, "DT_INI", "N", 8, 0, true, 2)]
    public DateTime $DtIni;

    #[SpedCampos(4, "DT_FIM", "N", 8, 0, true, 2)]
    public DateTime $DtFin;

    #[SpedCampos(5, "COD_ANT_ITEM", "C", 60, 0, false, 3)]
    public string $CodAntItem;

    public function __construct()
    {
        parent::__construct("0205");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->DescrAntItem ??= '';
        $this->DtIni ??= new DateTime();
        $this->DtFin ??= new DateTime();
        $this->CodAntItem ??= '';
    }
}

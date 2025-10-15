<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1710 extends RegistroSped
{
    #[SpedCampos(2, "NUM_DOC_INI", "N", 12, 0, true, 3)]
    public string $NumDocIni;


    ///     Número do dispositivo autorizado (inutilizado) final

    #[SpedCampos(3, "NUM_DOC_FIN", "N", 12, 0, true, 3)]
    public string $NumDocFin;

    public function __construct()
    {
        parent::__construct("1710");
    }
}

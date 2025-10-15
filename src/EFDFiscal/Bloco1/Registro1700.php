<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1700 extends RegistroSped
{
    #[SpedCampos(2, "COD_DISP", "C", 2, 0, true, 3)]
    public int $CodDisp;


    ///     Código do modelo do dispositivo autorizado

    #[SpedCampos(3, "COD_MOD", "C", 2, 0, true, 3)]
    public string $CodMod;


    ///     Série do dispositivo autorizado

    #[SpedCampos(4, "SER", "C", 4, 0, false, 3)]
    public string $Ser;


    ///     Subsérie do dispositivo autorizado

    #[SpedCampos(5, "SUB", "C", 3, 0, false, 3)]
    public string $Sub;


    ///     Número do dispositivo autorizado (utilizado) inicial

    #[SpedCampos(6, "NUM_DOC_INI", "N", 12, 0, true, 3)]
    public string $NumDocIni;


    ///     Número do dispositivo autorizado (utilizado) final

    #[SpedCampos(7, "NUM_DOC_FIN", "N", 12, 0, true, 3)]
    public string $NumDocFin;


    ///     Número da autorização, conforme dispositivo autorizado

    #[SpedCampos(8, "NUM_AUT", "N", 60, 0, true, 3)]
    public string $NumAut;

    /** 
     * @var Registro1710[] 
     */
    private array $Registros1710 = [];

    public function __construct()
    {
        parent::__construct("1700");
    }
}

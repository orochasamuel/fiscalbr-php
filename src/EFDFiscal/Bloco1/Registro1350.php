<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1350 extends RegistroSped
{
    #[SpedCampos(2, "SERIE", "C", 255, 0, true, 2)]
    public string $Serie;

    #[SpedCampos(3, "FABRICANTE", "C", 60, 0, true, 2)]
    public string $Fabricante;

    #[SpedCampos(4, "MODELO", "C", 255, 0, true, 2)]
    public string $Modelo;

    #[SpedCampos(5, "TIPO_MEDICAO", "C", 1, 0, true, 2)]
    public string $TipoMedicao;

    /** 
     * @var Registro1360[] 
     */
    private array $Registros1360 = [];

    /** 
     * @var Registro1370[] 
     */
    private array $Registros1370 = [];

    public function __construct()
    {
        parent::__construct("1350");
    }
}

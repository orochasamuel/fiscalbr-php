<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD350 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///   Modelo do equipamento

    #[SpedCampos(3, "ECF_MOD", "C", 20, 0, true, 2)]
    public string $EcfMod;


    ///   Número de série de fabricação do ECF

    #[SpedCampos(4, "ECF_FAB", "C", 21, 0, true, 2)]
    public string $EcfFab;


    ///   Número do caixa atribuído ao ECF

    #[SpedCampos(5, "ECF_CX", "N", 3, 0, true, 2)]
    public string $EcfCx;

    /** 
     * @var RegistroD355[] 
     */
    private array $RegistrosD355 = [];

    public function __construct()
    {
        parent::__construct("D350");
    }
}

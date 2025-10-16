<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD120 extends RegistroSped
{
    #[SpedCampos(2, "COD_MUN_ORIG", "N", 7, 0, true, 2)]
    public Decimal $CodMunOrig;


    ///   Codigo do municipio de destino, conforme a tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(3, "COD_MUN_DEST", "N", 7, 0, true, 2)]
    public Decimal $CodMunDest;


    ///   Placa de identificacao do veiculo

    #[SpedCampos(4, "VEIC_ID", "C", 7, 0, false, 2)]
    public Decimal $VeicId;


    ///   Sigla da UF da placa do veiculo

    #[SpedCampos(5, "UF_ID", "C", 2, 0, false, 2)]
    public Decimal $UfId;

    public function __construct()
    {
        parent::__construct("D120");
    }
}

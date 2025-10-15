<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD365 extends RegistroSped
{
    #[SpedCampos(2, "COD_TOT_PAR", "C", 7, 0, true, 2)]
    public string $CodTotPar;


    ///   Valor acumulado no totalizador, relativo à respectiva Redução Z.

    #[SpedCampos(3, "VLR_ACUM_TOT", "N", 0, 2, true, 2)]
    public string $VlrAcumTot;


    ///   Número do totalizador quando ocorrer mais de uma situação com a mesma carga tributária efetiva.

    #[SpedCampos(4, "NR_TOT", "N", 2, 0, false, 2)]
    public string $NrTot;


    ///   Descrição da situação tributária relativa ao totalizador parcial, 
    ///   <para />
    ///   quando houver mais de um com a mesma carga tributária efetiva.

    #[SpedCampos(5, "DESCR_NR_TOT", "C", 0, 0, false, 2)]
    public string $DescrNrTot;

    /** 
     * @var RegistroD370[] 
     */
    private array $RegistrosD370 = [];

    public function __construct()
    {
        parent::__construct("D365");
    }
}

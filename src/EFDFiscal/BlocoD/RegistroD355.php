<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD355 extends RegistroSped
{

    #[SpedCampos(2, "DT_DOC", "N", 8, 0, true, 2)]
    public string $DtDoc;


    ///   Posição do Contador de Reinício de Operação

    #[SpedCampos(3, "CRO", "N", 3, 0, true, 2)]
    public string $Cro;


    ///   Posição do Contador de Redução Z

    #[SpedCampos(4, "CRZ", "N", 6, 0, true, 2)]
    public string $Crz;


    ///   Número do Contador de Ordem de Operação do último documento emitido no dia. (Número do COO na Redução Z)

    #[SpedCampos(5, "NUM_COO_FIN", "N", 9, 0, true, 2)]
    public string $NumCooFin;


    ///   Valor do Grande Total final

    #[SpedCampos(6, "GT_FIN", "N", 0, 2, true, 2)]
    public string $GtFin;


    ///   Valor da venda bruta

    #[SpedCampos(7, "VL_BRT", "N", 0, 2, true, 2)]
    public string $VlBrt;

    private ?RegistroD360 $RegistroD360 = null;

    /** 
     * @var RegistroD365[] 
     */
    private array $RegistrosD365 = [];
    
    /** 
     * @var RegistroD390[] 
     */
    private array $RegistrosD390 = [];

    public function __construct()
    {
        parent::__construct("D355");
    }
}

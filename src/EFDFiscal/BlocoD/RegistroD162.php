<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD162 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, false, 2)]
    public string $CodMod;


    ///   Série do documento fiscal

    #[SpedCampos(3, "SER", "C", 4, 0, false, 2)]
    public string $Ser;


    ///    Número do documento fiscal

    #[SpedCampos(4, "NUM_DOC", "N", 9, 0, true, 2)]
    public string $NumDoc;


    ///   Data da emissão do documento fiscal

    #[SpedCampos(5, "DT_DOC", "N", 8, 0, false, 2)]
    public string $DtDoc;


    ///   Valor total do documento fiscal 

    #[SpedCampos(6, "VL_DOC", "N", 0, 2, false, 2)]
    public string $VlDoc;


    ///   Valor das mercadorias constantes no documento fiscal

    #[SpedCampos(7, "VL_MERC", "N", 0, 2, false, 2)]
    public string $VlMerc;


    ///  Quantidade de volumes transportados

    #[SpedCampos(8, "QTD_VOL", "N", 0, 0, true, 2)]
    public string $QtdVol;



    ///   Peso bruto dos volumes transportados (em kg)

    #[SpedCampos(9, "PESO_BRT", "N", 0, 2, false, 2)]
    public string $PesoBrt;



    ///    Peso líquido dos volumes transportados (em kg)

    #[SpedCampos(10, "PESO_LIQ", "N", 0, 2, false, 2)]
    public string $PesoLiq;

    public function __construct()
    {
        parent::__construct("D162");
    }
}

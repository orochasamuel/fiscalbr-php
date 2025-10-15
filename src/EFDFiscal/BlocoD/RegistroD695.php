<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD695 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///   Série do documento fiscal

    #[SpedCampos(3, "SER", "C", 4, 0, true, 2)]
    public string $Ser;


    ///     Número de ordem inicial

    #[SpedCampos(4, "NRO_ORD_INI", "N", 9, 0, true, 2)]
    public string $NroOrdIni;


    ///    Número de ordem final

    #[SpedCampos(5, "NRO_ORD_FIN", "N", 9, 0, true, 2)]
    public string $NroOrdFin;


    ///  Data de emissão inicial dos documentos / Data inicial de vencimento da fatura

    #[SpedCampos(6, "DT_DOC_INI", "N", 8, 0, true, 2)]
    public string $DtDocIni;


    ///  Data de emissão final dos documentos / Data final do vencimento da fatura

    #[SpedCampos(7, "DT_DOC_FIN", "N", 8, 0, true, 2)]
    public string $DtDocFin;


    ///  Nome do arquivo Mestre de Documento Fiscal

    #[SpedCampos(8, "NOM_MEST", "C", 33, 0, true, 2)]
    public string $NomMest;


    ///  Chave de codificação digital do arquivo Mestre de Documento Fiscal

    #[SpedCampos(9, "CHV_COD_DIG", "C", 32, 0, true, 2)]
    public string $ChvCodDig;

    /** 
     * @var RegistroD696[] 
     */
    private array $RegistrosD696 = [];

    public function __construct()
    {
        parent::__construct("D695");
    }
}

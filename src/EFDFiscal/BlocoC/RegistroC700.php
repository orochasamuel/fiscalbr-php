<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC700 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Série do documento fiscal

    #[SpedCampos(3, "SER", "C", 4, 0, false, 2)]
    public string $Ser;


    ///     Número de ordem inicial

    #[SpedCampos(4, "NRO_ORD_INI", "N", 9, 0, true, 2)]
    public int $NroOrdIni;


    ///     Número de ordem final

    #[SpedCampos(5, "NRO_ORD_FIN", "N", 9, 0, true, 2)]
    public int $NroOrdFin;


    ///     Data de emissão inicial dos documentos /
    ///     Data inicial de vencimento da fatura

    #[SpedCampos(6, "DT_DOC_INI", "N", 8, 0, true, 2)]
    public DateTime $DtDocIni;


    ///     Data de emissão final dos documentos /
    ///     Data final do vencimento da fatura

    #[SpedCampos(7, "DT_DOC_FIN", "N", 8, 0, true, 2)]
    public DateTime $DtDocFin;


    ///     Nome do arquivo mestre do documento fiscal

    #[SpedCampos(8, "NOM_MEST", "C", 15, 0, true, 2)]
    #[SpedCampos(8, "NOM_MEST", "C", 15, 0, false, 17)]
    public string $Nom_Mest;


    ///     Chave de codificação digital do arquivo mestre de documento fiscal

    #[SpedCampos(9, "CHV_COD_DIG", "C", 32, 0, true, 2)]
    #[SpedCampos(9, "CHV_COD_DIG", "C", 32, 0, false, 17)]
    public string $ChvCodDig;

    /** 
     * @var RegistroC790[] 
     */
    private array $RegistrosC790 = [];

    public function __construct()
    {
        parent::__construct("C700");
    }
}

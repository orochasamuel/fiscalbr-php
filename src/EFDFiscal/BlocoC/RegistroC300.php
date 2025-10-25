<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC300 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public int $CodMod;


    ///     Série do documento fiscal

    #[SpedCampos(3, "SER", "C", 4, 0, true, 2)]
    public string $Ser;


    ///     Subsérie do documento fiscal

    #[SpedCampos(4, "SUB", "C", 3, 0, false, 2)]
    public string $Sub;


    ///     Número do documento fiscal inicial

    #[SpedCampos(5, "NUM_DOC_INI", "N", 6, 0, true, 2)]
    public string $NumDocIni;


    ///     Número do documento fical final

    #[SpedCampos(6, "NUM_DOC_FIN", "N", 6, 0, true, 2)]
    public string $NumDocFin;


    ///     Data da emissão dos documentos fiscais

    #[SpedCampos(7, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;


    ///     Valor total dos documentos

    #[SpedCampos(8, "VL_DOC", "N", 0, 2, true, 2)]
    public Decimal $VlDoc;


    ///     Valor total do PIS

    #[SpedCampos(9, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor total da COFINS

    #[SpedCampos(10, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;


    ///     Código da conta analítica contábil debitada/creditada

    #[SpedCampos(11, "COD_CTA", "C", 999, 0, false, 2)]
    public string $CodCta;

    /** 
     * @var RegistroC310[] 
     */
    public array $RegistrosC310 = [];

    /** 
     * @var RegistroC320[] 
     */
    public array $RegistrosC320 = [];

    public function __construct()
    {
        parent::__construct("C300");
    }
}

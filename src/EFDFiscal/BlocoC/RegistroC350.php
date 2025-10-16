<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC350 extends RegistroSped
{
    #[SpedCampos(2, "SER", "C", 4, 0, false, 2)]
    public string $Ser;


    ///     Subsérie do documento fiscal

    #[SpedCampos(3, "SUB_SER", "C", 3, 0, false, 2)]
    public string $SubSer;


    ///     Número do documento fiscal

    #[SpedCampos(4, "NUM_DOC", "C", 3, 0, true, 2)]
    public string $NumDoc;


    ///     Data da emissão do documento fiscal

    #[SpedCampos(5, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;


    ///     CNPJ ou CPF do destinatário

    #[SpedCampos(6, "CNPJ_CPF", "N", 14, 0, false, 2)]
    public string $CnpjCpf;


    ///     Valor das mercadorias constatnes no documento fiscal

    #[SpedCampos(7, "VL_MERC", "N", 0, 2, true, 2)]
    public Decimal $VlMerc;


    ///     Valor total do documento fiscal

    #[SpedCampos(8, "VL_DOC", "N", 0, 2, true, 2)]
    public Decimal $VlDoc;


    ///     Valor total do desconto

    #[SpedCampos(9, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///     Valor total do PIS

    #[SpedCampos(10, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor total da COFINS

    #[SpedCampos(11, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;


    ///     Código da conta analítica contábil debitada/creditada

    #[SpedCampos(12, "COD_CTA", "C", 999, 0, false, 2)]
    public string $CodCta;

    /** 
     * @var RegistroC370[] 
     */
    private array $RegistrosC370 = [];

    /** 
     * @var RegistroC390[] 
     */
    private array $RegistrosC390 = [];

    public function __construct()
    {
        parent::__construct("C350");
    }
}

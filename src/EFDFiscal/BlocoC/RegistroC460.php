<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC460 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Código de situação do documento fiscal

    #[SpedCampos(3, "COD_SIT", "N", 2, 0, true, 2)]
    public int $CodSit;


    ///     Número do documento fiscal (COO)

    #[SpedCampos(4, "NUM_DOC", "N", 9, 0, true, 2)]
    public string $NumDoc;


    ///     Data da emissão do documento fiscal

    #[SpedCampos(5, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;


    ///     Valor total do documento fiscal

    #[SpedCampos(6, "VL_DOC", "N", 0, 2, true, 2)]
    public Decimal $VlDoc;


    ///     Valor do PIS

    #[SpedCampos(7, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor da COFINS

    #[SpedCampos(8, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;


    ///     CPF ou CNPJ do adquirente

    #[SpedCampos(9, "CPF_CNPJ", "N", 14, 0, false, 2)]
    public string $CpfCnpj;


    ///     Nome do adquirente

    #[SpedCampos(10, "NOM_ADQ", "C", 60, 0, false, 2)]
    public string $NomeAdq;

    private ?RegistroC465 $RegistroC465 = null;
    
    /** 
     * @var RegistroC470[] 
     */
    private array $RegistrosC470 = [];

    public function __construct()
    {
        parent::__construct("C460");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC800 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Código da situação do documento fiscal, conforme a Tabela 4.1.2

    #[SpedCampos(3, "COD_SIT", "N", 2, 0, true, 2)]
    public int $CodSit;


    ///     Número do Cupom Fiscal Eletrônico

    #[SpedCampos(4, "NUM_CFE", "N", 6, 0, true, 2)]
    public int $NumCfe;


    ///     Data da emissão do Cupom Fiscal Eletrônico

    #[SpedCampos(5, "DT_DOC", "N", 8, 0, false, 2)]
    public ?DateTime $DtDoc;


    ///     Valor total do Cupom Fiscal Eletrônico

    #[SpedCampos(6, "VL_CFE", "N", 0, 2, false, 2)]
    public Decimal $VlCfe;


    ///     Valor total do PIS

    #[SpedCampos(7, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor total da COFINS

    #[SpedCampos(8, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;


    ///     CNPJ ou CPF do destinatário

    #[SpedCampos(9, "CNPJ_CPF", "N", 14, 0, false, 2)]
    public string $CnpjCpf;


    ///     Número de série do equipamento SAT

    #[SpedCampos(10, "NR_SAT", "N", 9, 0, true, 2)]
    public string $NrSat;


    ///     Chave da Cupom Fiscal Eletrônico

    #[SpedCampos(11, "CHV_CFE", "N", 44, 0, true, 2)]
    public string $ChvCfe;


    ///     Valor total do desconto

    #[SpedCampos(12, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///     Valor total das mercadorias e serviços

    #[SpedCampos(13, "VL_MERC", "N", 0, 2, false, 2)]
    public Decimal $VlMerc;


    ///     Valor de outras despesas acessórias

    #[SpedCampos(14, "VL_OUT_DA", "N", 0, 2, false, 2)]
    public Decimal $VlOutDa;


    ///     Valor do ICMS 

    #[SpedCampos(15, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;


    ///     Valor total do PIS retido por substituição tributária

    #[SpedCampos(16, "VL_PIS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlPisSt;


    ///     Valor total da COFINS retido por substituição tributária

    #[SpedCampos(17, "VL_COFINS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlCofinsSt;

    /** 
     * @var RegistroC810[] 
     */
    private array $RegistrosC810 = [];

    /** 
     * @var RegistroC850[] 
     */
    private array $RegistrosC850 = [];

    public function __construct()
    {
        parent::__construct("C800");
    }
}

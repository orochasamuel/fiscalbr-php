<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD400 extends RegistroSped
{
    #[SpedCampos(2, "COD_PART", "C", 60, 0, true, 2)]
    public string $CodPart;


    ///   Código do modelo do documento fiscal, conforme a Tabela 4.1.1 

    #[SpedCampos(3, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///   Código da situação do documento fiscal, conforme a Tabela 4.1.2

    #[SpedCampos(4, "COD_SIT", "N", 2, 0, true, 2)]
    public string $CodSit;


    ///    Série do documento fiscal

    #[SpedCampos(5, "SER", "C", 4, 0, false, 2)]
    public string $Ser;


    ///   Subsérie do documento fiscal

    #[SpedCampos(6, "SUB", "N", 3, 0, false, 2)]
    public string $Sub;


    ///   Número do documento fiscal resumo.

    #[SpedCampos(7, "NUM_DOC", "N", 6, 0, true, 2)]
    public string $NumDoc;


    ///   Data da emissão do documento fiscal

    #[SpedCampos(8, "DT_DOC", "N", 8, 0, true, 2)]
    public string $DtDoc;


    ///   Valor total do documento fiscal

    #[SpedCampos(9, "VL_DOC", "N", 0, 2, true, 2)]
    public string $VlDoc;


    ///   Valor acumulado dos descontos

    #[SpedCampos(10, "VL_DESC", "N", 0, 2, false, 2)]
    public string $VlDesc;


    ///   Valor acumulado da prestação de serviço

    #[SpedCampos(11, "VL_SERV", "N", 0, 2, true, 2)]
    public string $VlServ;


    ///   Valor total da base de cálculo do ICMS

    #[SpedCampos(12, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public string $VlBcIcms;


    ///   Valor total do ICMS

    #[SpedCampos(13, "VL_ICMS", "N", 0, 2, false, 2)]
    public string $VlIcms;


    ///   Valor do PIS

    #[SpedCampos(14, "VL_PIS", "N", 0, 2, false, 2)]
    public string $VlPis;


    ///   Valor da COFINS

    #[SpedCampos(15, "VL_COFINS", "N", 0, 2, false, 2)]
    public string $VlOfins;


    ///    Código da conta analítica contábil debitada/creditada

    #[SpedCampos(16, "COD_CTA", "C", 0, 0, false, 2)]
    public string $CodCta;

    /** 
     * @var RegistroD410[] 
     */
    private array $RegistrosD410 = [];

    /** 
     * @var RegistroD420[] 
     */
    private array $RegistrosD420 = [];

    public function __construct()
    {
        parent::__construct("D400");
    }
}

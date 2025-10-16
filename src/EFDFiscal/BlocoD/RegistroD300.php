<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD300 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///   Série do documento fiscal

    #[SpedCampos(3, "SER", "C", 4, 0, true, 2)]
    public string $Ser;


    ///   Subsérie do documento fiscal

    #[SpedCampos(4, "SUB", "N", 4, 0, false, 2)]
    public string $Sub;


    ///    Número do primeiro documento fiscal emitido (mesmo modelo, série e subsérie)

    #[SpedCampos(5, "NUM_DOC_INI", "N", 6, 0, true, 2)]
    public string $NumDocIni;


    ///   Número do último documento fiscal emitido (mesmo modelo, série e subsérie)

    #[SpedCampos(6, "NUM_DOC_FIN", "N", PHP_INT_MAX, 0, true, 2)]
    public int $NumDocFin;


    ///   Código da Situação Tributária, conforme a Tabela indicada no item 4.3.1

    #[SpedCampos(7, "CST_ICMS", "N", 3, 0, true, 2)]
    public string $CstIcms;


    ///   Código Fiscal de Operação e Prestação conforme tabela indicada no item 4.2.2

    #[SpedCampos(8, "CFOP", "N", 4, 0, true, 2)]
    public string $Cfop;


    ///   Alíquota do ICMS

    #[SpedCampos(9, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;


    ///   Data da emissão dos documentos fiscais

    #[SpedCampos(10, "DT_DOC", "N", 8, 0, true, 2)]
    public string $DtDoc;


    ///   Valor total acumulado das operações correspondentes à combinação de CST_ICMS, CFOP
    ///   <para />
    ///   e alíquota do ICMS, incluídas as despesas acessórias e acréscimos. 

    #[SpedCampos(11, "VL_OPR", "N", 0, 2, true, 2)]
    public Decimal $VlOpr;


    ///   Valor total dos descontos

    #[SpedCampos(12, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///   Valor total da prestação de serviço

    #[SpedCampos(13, "VL_SERV", "N", 0, 2, true, 2)]
    public Decimal $VlServ;


    ///   Valor de seguro

    #[SpedCampos(14, "VL_SEG", "N", 0, 2, false, 2)]
    public Decimal $VlSeg;


    ///   Valor de outras despesas

    #[SpedCampos(15, "VL_OUT_DESP", "N", 0, 2, false, 2)]
    public Decimal $VlOutDesp;


    ///   Valor total da base de cálculo do ICMS

    #[SpedCampos(16, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlBcIcms;


    ///   Valor total do ICMS

    #[SpedCampos(17, "VL_ICMS", "N", 0, 2, true, 2)]
    public Decimal $VlIcms;


    ///   Valor não tributado em função da redução da base de cálculo do ICMS, 
    ///   <para />
    ///   referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.

    #[SpedCampos(18, "VL_RED_BC", "N", 0, 2, true, 2)]
    public Decimal $VlRedBc;


    ///   Código da observação do lançamento fiscal (campo 02 do Registro 0460)

    #[SpedCampos(19, "COD_OBS", "C", 6, 0, false, 2)]
    public string $CodObs;


    ///    Código da conta analítica contábil debitada/creditada

    #[SpedCampos(20, "COD_CTA", "C", 255, 0, false, 2)]
    public string $CodCta;

    /** 
     * @var RegistroD301[] 
     */
    private array $RegistrosD301 = [];

    /** 
     * @var RegistroD310[] 
     */
    private array $RegistrosD310 = [];

    public function __construct()
    {
        parent::__construct("D300");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD410 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///   Série do documento fiscal 

    #[SpedCampos(3, "SER", "C", 4, 0, true, 2)]
    public string $Ser;


    ///   Subsérie do documento fisca

    #[SpedCampos(4, "SUB", "N", 3, 0, false, 2)]
    public string $Sub;


    ///   Número do documento fiscal inicial (mesmo modelo, série e subsérie)

    #[SpedCampos(5, "NUM_DOC_INI", "N", 6, 0, true, 2)]
    public string $NumDocIni;


    ///   Número do documento fiscal final(mesmo modelo, série e subsérie)

    #[SpedCampos(6, "NUM_DOC_FIN", "N", 0, 0, true, 2)]
    public string $NumDocFin;


    ///   Data da emissão dos documentos fiscais

    #[SpedCampos(7, "DT_DOC", "N", 8, 0, true, 2)]
    public string $DtDoc;


    ///   Código da Situação Tributária, conforme a Tabela indicada no item 4.3.1

    #[SpedCampos(8, "CST_ICMS", "N", 3, 0, true, 2)]
    public string $CstIcms;


    ///   Código Fiscal de Operação e Prestação

    #[SpedCampos(9, "CFOP", "N", 4, 0, true, 2)]
    public string $Cfop;


    ///   Alíquota do ICMS

    #[SpedCampos(10, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public string $AliqIcms;


    ///   Valor total acumulado das operações correspondentes à combinação de CST_ICMS, CFOP
    ///   <para />
    ///   e alíquota do ICMS,incluídas as despesas acessórias e acréscimos. 

    #[SpedCampos(11, "VL_OPR", "N", 0, 2, true, 2)]
    public string $VlOpr;


    ///   Valor acumulado dos descontos

    #[SpedCampos(12, "VL_DESC", "N", 0, 2, false, 2)]
    public string $VlDesc;


    ///   Valor acumulado da prestação de serviço

    #[SpedCampos(13, "VL_SERV", "N", 0, 2, true, 2)]
    public string $VlServ;


    ///   Valor acumulado da base de cálculo do ICMS

    #[SpedCampos(14, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public string $VlBcIcms;


    ///   Valor acumulado do ICMS

    #[SpedCampos(15, "VL_ICMS", "N", 0, 2, true, 2)]
    public string $VlIcms;

    /** 
     * @var RegistroD411[] 
     */
    private array $RegistrosD411 = [];

    public function __construct()
    {
        parent::__construct("D410");
    }
}

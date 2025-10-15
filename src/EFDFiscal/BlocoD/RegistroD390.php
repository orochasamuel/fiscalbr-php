<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD390 extends RegistroSped
{
    #[SpedCampos(2, "CST_ICMS", "N", 3, 0, true, 2)]
    public string $CstIcms;


    ///   Código Fiscal de Operação e Prestação

    #[SpedCampos(3, "CFOP", "N", 4, 0, true, 2)]
    public string $Cfop;


    ///   Alíquota do ICMS

    #[SpedCampos(4, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public string $AliqIcms;


    ///   Valor da operação correspondente à combinação de CST_ICMS, CFOP, 
    ///   <para />
    ///   e alíquota do ICMS, incluídas as despesas acessórias e acréscimos 

    #[SpedCampos(5, "VL_OPR", "N", 0, 2, true, 2)]
    public string $VlOpr;


    ///   Valor da base de cálculo do ISSQN

    #[SpedCampos(6, "VL_BC_ISSQN", "N", 0, 2, false, 2)]
    public string $VlBcIssqn;


    ///   Alíquota do ISSQN

    #[SpedCampos(7, "ALIQ_ISSQN", "N", 6, 2, false, 2)]
    public string $AliqIssqn;


    ///   Valor do ISSQN

    #[SpedCampos(8, "VL_ISSQN", "N", 0, 2, false, 2)]
    public string $VlIssqn;


    ///   Base de cálculo do ICMS acumulada relativa à alíquota informada

    #[SpedCampos(9, "VL_BC_ICMS", "N", 0, 2, true, 2)]
    public string $VlBcIcms;


    ///   Valor do ICMS acumulado relativo à alíquota informada

    #[SpedCampos(10, "VL_ICMS", "N", 0, 2, true, 2)]
    public string $VlIcms;


    ///   Código da observação do lançamento fiscal (campo 02 do Registro 0460)

    #[SpedCampos(11, "COD_OBS", "C", 6, 0, false, 2)]
    public string $CodObs;

    public function __construct()
    {
        parent::__construct("D390");
    }
}

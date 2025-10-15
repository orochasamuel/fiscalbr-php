<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD161 extends RegistroSped
{
    #[SpedCampos(2, "IND_CARGA", "N", 1, 0, true, 2)]
    public string $IndCarga;


    ///    Número do CNPJ ou CPF do local da coleta.

    #[SpedCampos(3, "CNPJ_CPF_COL", "C", 14, 0, false, 2)]
    public string $CnpjCpfCol;


    ///   Inscrição Estadual do contribuinte do local de coleta.

    #[SpedCampos(4, "IE_Col", "C", 14, 0, false, 2)]
    public string $IeCol;


    ///    Código do Município do local de  coleta, conforme tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(5, "COD_MUN_COL", "N", 7, 0, true, 2)]
    public string $CodMunCol;


    ///   Número do CNPJ ou CPF do local da entrega

    #[SpedCampos(6, "CNPJ_CPF_ENTG", "C", 14, 0, false, 2)]
    public string $CnpjCpfEntg;


    ///   Inscrição  Estadual  do  contribuinte  do  local  de entrega

    #[SpedCampos(7, "IE_ENTG", "C", 14, 0, false, 2)]
    public string $IeEntg;


    ///    Código do Município do local de entrega, conforme tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(8, "COD_MUN_ENTG", "N", 7, 0, true, 2)]
    public string $CodMunEntg;

    public function __construct()
    {
        parent::__construct("D161");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD160 extends RegistroSped
{
    #[SpedCampos(2, "DESPACHO", "C", 0, 0, false, 2)]
    public string $Despacho;


    ///    CNPJ ou CPF do remetente das mercadorias que constam na nota fiscal.

    #[SpedCampos(3, "CNPJ_CPF_REM", "N", 14, 0, false, 2)]
    public string $CnpjCpfRem;


    ///   Inscrição Estadual do remetente das mercadorias que constam na nota fiscal.

    #[SpedCampos(4, "IE_REM", "C", 14, 0, false, 2)]
    public string $IeRem;


    ///    Código do Município de origem, conforme tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(5, "COD_MUN_ORI", "N", 7, 0, true, 2)]
    public string $CodMunOri;


    ///   CNPJ ou CPF do destinatário das mercadorias que constam na nota fiscal.

    #[SpedCampos(6, "CNPJ_CPF_DEST", "N", 14, 0, false, 2)]
    public string $CnpjCpfDest;


    ///   Inscrição Estadual do destinatáriodas mercadorias que constam na nota fiscal.

    #[SpedCampos(7, "IE_DEST", "C", 14, 0, false, 2)]
    public string $IeDest;


    ///   Código do Município de destino, conforme tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(8, "COD_MUN_DEST", "N", 7, 0, true, 2)]
    public string $CodMunDest;

    private ?RegistroD161 $RegistroD161 = null;
    
    /** 
     * @var RegistroD162[] 
     */
    private array $RegistrosD162 = [];

    public function __construct()
    {
        parent::__construct("D160");
    }
}

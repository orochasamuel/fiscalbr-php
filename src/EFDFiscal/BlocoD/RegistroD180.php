<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD180 extends RegistroSped
{
    #[SpedCampos(2, "NUM_SEQ", "N", 0, 0, true, 2)]
    public string $NumSeq;


    ///    Indicador do emitente do documento fiscal:

    /// <remarks>
    ///    0 - Emissão própria;
    ///    <para />
    ///    1 -Terceiros
    /// </remarks>
    #[SpedCampos(3, "IND_EMIT", "C", 1, 0, true, 2)]
    public string $IndEmit;


    ///   CNPJ ou CPF do participante emitente do modal

    #[SpedCampos(4, "CNPJ_CPF_EMIT", "N", 14, 0, true, 2)]
    public string $CnpjCpfEmit;


    ///   Sigla da unidade da federação do participante emitente do modal

    #[SpedCampos(5, "UF_EMIT", "C", 2, 0, true, 2)]
    public string $UfEmit;


    ///    Inscrição Estadual do participante emitente do modal

    #[SpedCampos(6, "IE_EMIT", "C", 14, 0, false, 2)]
    public string $IeEmit;


    ///    Código do município de origem do serviço, conforme a tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(7, "COD_MUN_ORIG", "N", 7, 0, true, 2)]
    public string $CodMunOrig;


    ///    CNPJ/CPF do participante tomador do serviço

    #[SpedCampos(8, "CNPJ_CPF_TOM", "N", 14, 0, true, 2)]
    public string $CnpjCpfTom;


    ///    Sigla da unidade da federação do participante tomador do serviço

    #[SpedCampos(9, "UF_TOM", "C", 2, 0, true, 2)]
    public string $UfTom;


    ///     Inscrição Estadual do participante tomador do serviço

    #[SpedCampos(10, "IE_TOM", "C", 14, 0, false, 2)]
    public string $IeTom;


    ///     Código do município de destino, conforme a tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(11, "COD_MUN_DEST", "N", 7, 0, true, 2)]
    public string $CodMunDest;


    ///    Código do modelo do documento fiscal, conforme a Tabela 4.1.1 

    #[SpedCampos(12, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///    Série do documento fiscal

    #[SpedCampos(13, "SER", "C", 4, 0, true, 2)]
    public string $Ser;


    ///    Subsérie do documento fiscal

    #[SpedCampos(14, "SUB", "N", 3, 0, false, 2)]
    public string $Sub;


    ///    Número do documento fiscal

    #[SpedCampos(15, "NUM_DOC", "N", 9, 0, true, 2)]
    public string $NumDoc;


    ///     Data da emissão do documento fiscal

    #[SpedCampos(16, "DT_DOC", "N", 8, 0, true, 2)]
    public string $DtDoc;


    ///     Valor total do documento fiscal

    #[SpedCampos(17, "VL_DOC", "N", 0, 2, true, 2)]
    public string $VlDoc;

    public function __construct()
    {
        parent::__construct("D180");
    }
}

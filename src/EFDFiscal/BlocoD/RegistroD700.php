<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD700 extends RegistroSped
{
    #[SpedCampos(2, "IND_OPER", "C", 1, 0, true, 17)]
    public int $IndOper;


    ///     Indicador do emitente do documento fiscal:
    ///     0 - Emissão própria;
    ///     1 - Terceiros;

    #[SpedCampos(3, "IND_EMIT", "C", 1, 0, true, 17)]
    public int $IndEmit;


    ///     Código do participante (campo 02 do Registro 0150) do prestador, no caso de entradas.

    #[SpedCampos(4, "COD_PART", "C", 60, 0, true, 17)]
    public string $CodPart;


    ///     Código do modelo do documento fiscal, conforme a Tabela 4.1.1.

    #[SpedCampos(5, "COD_MOD", "C", 2, 0, true, 17)]
    public string $CodMod;


    ///     Código da situação do documento fiscal, conforme a Tabela 4.1.2.

    #[SpedCampos(6, "COD_SIT", "N", 2, 0, true, 17)]
    public int $CodSit;


    ///     Série do documento fiscal.

    #[SpedCampos(7, "SER", "N", 3, 0, false, 17)]
    #[SpedCampos(7, "SER", "N", 3, 0, true, 18)]
    public string $Ser;


    ///     Número do documento fiscal.

    #[SpedCampos(8, "NUM_DOC", "N", 9, 0, true, 17)]
    public string $NumDoc;


    ///     Data da emissão do documento fiscal.

    #[SpedCampos(9, "DT_DOC", "N", 8, 0, true, 17)]
    public DateTime $DtDoc;


    ///     Data da entrada ou da saída.

    #[SpedCampos(10, "DT_E_S", "N", 8, 0, false, 17)]
    public DateTime $DtEs;


    ///     Valor do documento fiscal.

    #[SpedCampos(11, "VL_DOC", "N", 0, 2, true, 17)]
    public Decimal $VlDoc;


    ///     Valor do desconto.

    #[SpedCampos(12, "VL_DESC", "N", 0, 2, false, 17)]
    public Decimal $VlDesc;


    ///     Valor total do serviços tributados pelo ICMS.

    #[SpedCampos(13, "VL_SERV", "N", 0, 2, true, 17)]
    public Decimal $VlServ;


    ///     Valores cobrados em nome do prestador sem destaque de ICMS.

    #[SpedCampos(14, "VL_SERV_NT", "N", 0, 2, false, 17)]
    public Decimal $VlServNt;


    ///     Valores cobrados em nome de terceiros.

    #[SpedCampos(15, "VL_TERC", "N", 0, 0, false, 17)]
    public Decimal $VlTerc;


    ///     Valor de despesas acessórias indicadas no documento fiscal.

    #[SpedCampos(16, "VL_DA", "N", 0, 2, false, 17)]
    public Decimal $VlDa;


    ///     Valor da Base de Cálculo (BC) do ICMS.

    #[SpedCampos(17, "VL_BC_ICMS", "N", 0, 2, false, 17)]
    public Decimal $VlBcIcms;


    ///     Valor do ICMS.

    #[SpedCampos(18, "VL_ICMS", "N", 0, 2, false, 17)]
    public Decimal $VlIcms;


    ///     Código da informação complementar do documento fiscal(campo 02 do Registro 0450).

    #[SpedCampos(19, "COD_INF", "C", 6, 0, false, 17)]
    public string $CodInf;


    ///     Valor do PIS/Pasep.

    #[SpedCampos(20, "VL_PIS", "N", 0, 2, false, 17)]
    public Decimal $VlPis;


    ///     Valor do Cofins.

    #[SpedCampos(21, "VL_COFINS", "N", 0, 2, false, 17)]
    public Decimal $VlCofins;


    ///     Chave da Nota Fiscal Fatura de Serviço de Comunicação Eletrônica.

    #[SpedCampos(22, "CHV_DOCe", "C", 44, 0, false, 17)]
    #[SpedCampos(22, "CHV_DOCe", "C", 44, 0, true, 18)]
    public string $ChvDoce;


    ///     Finalidade da emissão do documento eletrônico:
    ///     0 - NFCom Normal;
    ///     3 - NFCom de Substituição; 
    ///     4 - NFCom de Ajuste;

    #[SpedCampos(23, "FIN_DOCe", "N", 1, 0, true, 17)]
    public int $FinDoce;


    ///     Tipo de faturamento do documento eletrônico:
    ///     0 - Faturamento Normal;
    ///     1 - Faturamento centralizado;
    ///     4 - 2 - Cofaturamento

    #[SpedCampos(24, "TIP_FAT", "N", 1, 0, true, 17)]
    public int $TipFat;


    ///     Código do modelo do documento fiscal referenciado, conforme a Tabela 4.1.1. 

    #[SpedCampos(25, "COD_MOD_DOC_REF", "N", 2, 0, false, 17)]
    public int $CodModDocRef;


    ///     Chave da nota referenciada.

    #[SpedCampos(26, "CHV_DOCe_REF", "N", 44, 0, false, 17)]
    public string $ChvDoceRef;


    ///     Código de autenticação digital do registro, 
    ///     campo 36 do registro do Arquivo tipo mestre de documento fiscal, 
    ///     conforme definido no Convênio 115/2003.

    #[SpedCampos(27, "HASH_DOC_REF", "C", 32, 0, false, 17)]
    public string $HashDocRef;


    ///     Série do documento fiscal referenciado. 

    #[SpedCampos(28, "SER_DOC_REF", "C", 4, 0, false, 17)]
    public string $SerDocRef;


    ///     Número do documento fiscal referenciado.

    #[SpedCampos(29, "NUM_DOC_REF", "N", 9, 0, false, 17)]
    public string $NumDocRef;


    ///     Mês e ano da emissão do documento fiscal referenciado.

    #[SpedCampos(30, "MES_DOC_REF", "N", 6, 0, false, 17)]
    public string $MesDocRef;


    ///     Código do município do destinatário conforme a tabela do IBGE.

    #[SpedCampos(31, "COD_MUN_DEST", "N", 7, 0, true, 17)]
    public string $CodMunDes;


    ///     Deduções.

    #[SpedCampos(32, "DED", "N", PHP_INT_MAX, 2, false, 19)]
    public Decimal $Ded;

    private ?RegistroD730 $RegistroD730 = null;
    private ?RegistroD731 $RegistroD731 = null;
    private ?RegistroD735 $RegistroD735 = null;
    private ?RegistroD737 $RegistroD737 = null;
    private ?RegistroD750 $RegistroD750 = null;
    private ?RegistroD760 $RegistroD760 = null;
    private ?RegistroD761 $RegistroD761 = null;

    public function __construct()
    {
        parent::__construct("D700");
    }
}

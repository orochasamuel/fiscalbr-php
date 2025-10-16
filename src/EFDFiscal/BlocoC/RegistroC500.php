<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC500 extends RegistroSped
{
    #[SpedCampos(2, "IND_OPER", "C", 1, 0, true, 2)]
    public int $IndOper;


    ///     Indicador do emitente do documento fiscal

    /// <remarks>
    ///     0 - Emissão própria
    ///     <para />
    ///     1 - Terceiros
    /// </remarks>
    #[SpedCampos(3, "IND_EMIT", "C", 1, 0, true, 2)]
    public int $IndEmit;


    ///     Código do participante

    /// <remarks>
    ///     - do adquirente, no caso das saídas
    ///     <para />
    ///     - do fornecedor no caso de entradas
    /// </remarks>
    #[SpedCampos(4, "COD_PART", "C", 60, 0, true, 2)]
    public string $CodPart;


    ///     Código do modelo do documento fiscal

    #[SpedCampos(5, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Código da situação do documento fiscal

    #[SpedCampos(6, "COD_SIT", "N", 2, 0, true, 2)]
    public int $CodSit;


    ///     Série do documento fiscal

    #[SpedCampos(7, "SER", "C", 4, 0, false, 2)]
    public string $Ser;


    ///     Subsérie do documento fiscal

    #[SpedCampos(8, "SUB", "N", 3, 0, false, 2)]
    public string $Sub;


    ///     Código de classe de consumo de energia elétrica ou gás

    /// <remarks>
    ///     01 - Comercial
    ///     <para />
    ///     02 - Consumo Próprio
    ///     <para />
    ///     03 - Iluminação Pública
    ///     <para />
    ///     04 - Industrial
    ///     <para />
    ///     05 - Poder Público
    ///     <para />
    ///     06 - Residencial
    ///     <para />
    ///     07 - Rural
    ///     <para />
    ///     08 - Serviço Público
    ///     <para />
    ///     - Código de classe de consumo de fornecimento d'água
    /// </remarks>
    #[SpedCampos(9, "COD_CONS", "C", 2, 0, true, 2)]
    public int $CodCons;


    ///     Número do documento fiscal

    #[SpedCampos(10, "NUM_DOC", "N", 9, 0, true, 2)]
    public string $NumDoc;


    ///     Data da emissão do documento fiscal

    #[SpedCampos(11, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;


    ///     Data da entrada ou da saída

    #[SpedCampos(12, "DT_E_S", "N", 8, 0, true, 2)]
    public DateTime $DtEs;


    ///     Valor total do documento fiscal

    #[SpedCampos(13, "VL_DOC", "N", 0, 2, true, 2)]
    public Decimal $VlDoc;


    ///     Valor total do desconto

    #[SpedCampos(14, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///     Valor total fornecido/consumido

    #[SpedCampos(15, "VL_FORN", "N", 0, 2, true, 2)]
    public Decimal $VlForn;


    ///     Valor total dos serviços não-tributados pelo ICMS

    #[SpedCampos(16, "VL_SERV_NT", "N", 0, 2, false, 2)]
    public Decimal $VlServNt;


    ///     Valor total cobrado em nome de terceiros

    #[SpedCampos(17, "VL_TERC", "N", 0, 2, false, 2)]
    public Decimal $VlTerc;


    ///     Valor total das despesas acessórias indicadas no documento fiscal

    #[SpedCampos(18, "VL_DA", "N", 0, 2, false, 2)]
    public Decimal $VlDa;


    ///     Valor acumulado da base de cálculo do ICMS

    #[SpedCampos(19, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;


    ///     Valor acumulado do ICMS

    #[SpedCampos(20, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;


    ///     Valor acumulado da base de cálculo do ICMS substituição tributária

    #[SpedCampos(21, "VL_BC_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcmsSt;


    ///     Valor acumulado do ICMS retido por substituição tributária

    #[SpedCampos(22, "VL_ICMS_ST", "N", 0, 2, false, 2)]
    public Decimal $VlIcmsSt;


    ///     Código da informação complementar do documento fiscal

    #[SpedCampos(23, "COD_INF", "C", 6, 0, false, 2)]
    public string $CodInf;


    ///     Valor do PIS

    #[SpedCampos(24, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor da COFINS

    #[SpedCampos(25, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;


    ///     Código do tipo de ligação

    /// <remarks>
    ///     1 - Monofásico
    ///     <para />
    ///     2 - Bifásico
    ///     <para />
    ///     3 - Trifásico
    /// </remarks>
    #[SpedCampos(26, "TP_LIGACAO", "C", 1, 0, false, 3)]
    public int $TpLigacao;


    ///     Código do grupo de tensão

    /// <remarks>
    ///     01 - A1 - Alta tensão (230kV ou mais)
    ///     <para />
    ///     02 - A2 - Alta tensão (88 a 138kV)
    ///     <para />
    ///     03 - A3 - Alta tensão (69kV)
    ///     <para />
    ///     04 - A3a - Alta tensão (30kV a 44kV)
    ///     <para />
    ///     05 - A4 - Alta tensão (2,3kV a 25kV)
    ///     <para />
    ///     06 - AS - Alta tensão subterrâneo
    ///     07 - B1 - Residencial
    ///     08 - B1 - Residencial baixa renda
    ///     09 - B2 - Rural
    ///     10 - B2 - Cooperativa de eletrificação rural
    ///     11 - B2 - Serviço público de irrigação
    ///     12 - B3 - Demais classes
    ///     13 - B4a - Iluminação pública - rede de distribuição
    ///     14 - B4b - Iluminação pública - bulbo de lâmpada
    /// </remarks>
    #[SpedCampos(27, "COD_GRUPO_TENSAO", "C", 2, 0, false, 3)]
    public int $CodGrupoTensao;


    ///     Chave da Nota Fiscal de Energia Elétrica Eletrônica

    #[SpedCampos(28, "CHV_DOCe", "C", 44, 0, false, 14)]
    public string $ChvDoce;


    ///     Finalidade da emissão do documento eletrônico

    /// <remarks>
    ///     1 – Normal
    ///     2 – Substituição
    ///     3 – Normal com ajuste
    /// </remarks>
    #[SpedCampos(29, "FIN_DOCe", "C", 1, 0, false, 14)]
    public int $FinDoce;


    ///     Chave da nota referenciada, substituída.

    #[SpedCampos(30, "CHV_DOCe_REF ", "C", 44, 0, false, 14)]
    public string $ChvDoceRef;


    ///     Indicador do Destinatário/Acessante

    /// <remarks>
    ///     1 – Contribuinte do ICMS;
    ///     2 – Contribuinte Isento de Inscrição no Cadastro de Contribuintes do ICMS;
    ///     9 – Não Contribuinte
    /// </remarks>
    #[SpedCampos(31, "IND_DEST", "C", 1, 0, false, 14)]
    public int $IndDest;


    ///     Código do município do destinatário conforme a tabela do IBGE.

    #[SpedCampos(32, "COD_MUN_DEST", "C", 7, 0, false, 14)]
    public string $CodMunDest;


    ///     Código da conta analíica contábil debitada/creditada

    #[SpedCampos(33, "COD_CTA", "C", 99, 0, false, 14)]
    public string $CodCta;


    ///     Código do modelo do documento fiscal referenciado 

    #[SpedCampos(34, "COD_MOD_DOC_REF", "C", 2, 0, false, 16)]
    public string $CodModDocRef;


    ///     Código de autenticação digital do registro (Convênio 115/2003)

    #[SpedCampos(35, "HASH_DOC_REF", "C", 32, 0, false, 16)]
    public string $HashDocRef;


    ///     Série do documento fiscal referenciado.

    #[SpedCampos(36, "SER_DOC_REF", "C", 4, 0, false, 16)]
    public string $SerDocRef;


    ///     Número do documento fiscal referenciado. 

    #[SpedCampos(37, "NUM_DOC_REF", "N", 9, 0, false, 16)]
    public string $NumDocRef;


    ///     Mês e ano da emissão do documento fiscal referenciado. 

    #[SpedCampos(38, "MES_DOC_REF", "MA", 6, 0, false, 16)]
    public ?DateTime $MesDocRef;


    ///     Energia injetada. 

    #[SpedCampos(39, "ENER_INJET", "N", 15, 2, false, 16)]
    public Decimal $EnerInjet;


    ///     Outras deduções. 

    #[SpedCampos(40, "OUTRAS_DED", "N", 15, 2, false, 16)]
    public Decimal $OutrDed;

    /** 
     * @var RegistroC510[] 
     */
    private array $RegistrosC510 = [];

    /** 
     * @var RegistroC590[] 
     */
    private array $RegistrosC590 = [];

    /** 
     * @var RegistroC595[] 
     */
    private array $RegistrosC595 = [];


    public function __construct()
    {
        parent::__construct("C500");
    }
}

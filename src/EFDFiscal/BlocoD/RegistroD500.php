<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD500 extends RegistroSped
{
    #[SpedCampos(2, "IND_OPER", "C", 1, 0, true, 2)]
    public int $IndOper;


    ///     Indicador do emitente do documento fiscal:
    ///     <para />
    ///     0 - Emissao própria;
    ///     <para />
    ///     1 - Terceiros;

    #[SpedCampos(3, "IND_EMIT", "C", 1, 0, true, 2)]
    public int $IndEmit;


    ///     Código do participante (campo 02 do Registro 0150);
    ///     <para />
    ///     -do prestador do serviço, no caso de aquisição;
    ///     <para />
    ///     -do tomador do serviço, no caso de prestação;

    #[SpedCampos(4, "COD_PART", "C", 60, 0, true, 2)]
    public string $CodPart;


    ///     Código do modelo do documento fiscal, conforme a Tabela 4.1.1

    #[SpedCampos(5, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Código da situação do documento fiscal, conforme a Tabela 4.1.2

    #[SpedCampos(6, "COD_SIT", "N", 2, 0, true, 2)]
    public int $CodSit;


    ///     Série do documento fiscal

    #[SpedCampos(7, "SER", "C", 4, 0, false, 2)]
    public string $Ser;


    ///     Subsérie do documento fiscal

    #[SpedCampos(8, "SUB", "C", 3, 0, false, 2)]
    public string $Sub;


    ///     Número do documento fiscal

    #[SpedCampos(9, "NUM_DOC", "N", 9, 0, true, 2)]
    public Decimal $NumDoc;


    ///     Data da emissão do documento fiscal

    #[SpedCampos(10, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;


    ///     Data da entrada(aquisição) ou da saida(prestação do serviço)

    #[SpedCampos(11, "DT_A_P", "N", 8, 0, false, 2)]
    public DateTime $DtAP;


    ///     Valor total do documento fiscal

    #[SpedCampos(12, "VL_DOC", "N", 0, 2, true, 2)]
    public Decimal $VlDoc;


    ///     Valor total do desconto

    #[SpedCampos(13, "VL_DESC", "N", 0, 2, false, 2)]
    public Decimal $VlDesc;


    ///     Valor da prestação de serviços

    #[SpedCampos(14, "VL_SERV", "N", 0, 2, true, 2)]
    public Decimal $VlServ;


    ///     Valor total dos serviços não-tributados pelo ICMS

    #[SpedCampos(15, "VL_SERV_NT", "N", 0, 2, false, 2)]
    public Decimal $VlServNt;


    ///     Valores cobrados em nome de terceiros

    #[SpedCampos(16, "VL_TERC", "N", 0, 2, false, 2)]
    public Decimal $VlTerc;


    ///     Valor de outras despesas indicadas no documento fiscal

    #[SpedCampos(17, "VL_DA", "N", 0, 2, false, 2)]
    public Decimal $VlDa;


    ///     Valor da base de cálculo do ICMS

    #[SpedCampos(18, "VL_BC_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlBcIcms;


    ///     Valor do ICMS

    #[SpedCampos(19, "VL_ICMS", "N", 0, 2, false, 2)]
    public Decimal $VlIcms;


    ///     Código da informação complementar (campo 02 do Registro 0450)

    #[SpedCampos(20, "COD_INF", "C", 6, 0, false, 2)]
    public string $CodInf;


    ///     Valor do PIS

    #[SpedCampos(21, "VL_PIS", "N", 0, 2, false, 2)]
    public Decimal $VlPis;


    ///     Valor da COFINS

    #[SpedCampos(22, "VL_COFINS", "N", 0, 2, false, 2)]
    public Decimal $VlCofins;


    ///     Código da conta analítica contábil debitada/creditada

    #[SpedCampos(23, "COD_CTA", "C", 0, 0, false, 2)]
    public string $CodCta;


    ///     Código do Tipo de Assinante:
    ///     <para />
    ///     1 - Comercial/Industrial
    ///     <para />
    ///     2 - Poder Público
    ///     <para />
    ///     3 - Residencial/Pessoa física
    ///     <para />
    ///     4 - Público
    ///     <para/>
    ///     5 - Semi-Público
    ///     <para />
    ///     6 - Outros

    #[SpedCampos(24, "TP_ASSINANTE", "N", 1, 0, false, 3)]
    public string $TpAssinante;

    /** 
     * @var RegistroD510[] 
     */
    private array $RegistrosD510 = [];

    /** 
     * @var RegistroD530[] 
     */
    private array $RegistrosD530 = [];

    /** 
     * @var RegistroD590[] 
     */
    private array $RegistrosD590 = [];

    public function __construct()
    {
        parent::__construct("D500");
    }
}

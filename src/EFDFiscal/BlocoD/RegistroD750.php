<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD750 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 17)]
    public string $CodMod;


    ///     Série do documento fiscal

    #[SpedCampos(3, "SER", "C", 3, 0, true, 17)]
    #[SpedCampos(3, "SER", "N", 3, 0, true, 18)]
    public string $Ser;


    ///     Data da emissão dos documentos

    #[SpedCampos(4, "DT_DOC", "N", 8, 0, true, 17)]
    public DateTime $DtDoc;

    // <summary>
    ///     Quantidade de documentos consolidados neste registro

    #[SpedCampos(5, "QTD_CONS", "N", 0, 0, true, 17)]
    public Decimal $QtdCons;

    // <summary>
    ///     Forma de pagamento: 
    ///     0 – pré pago
    ///     1 – pós pago

    #[SpedCampos(6, "IND_PREPAGO", "N", 1, 0, true, 17)]
    public int $IndPrepago;


    ///     Valor total dos documentos

    #[SpedCampos(7, "VL_DOC", "N", 0, 2, true, 17)]
    public Decimal $VlDoc;


    ///     Valor dos serviços tributados pelo ICMS.

    #[SpedCampos(8, "VL_SERV", "N", 0, 2, true, 17)]
    public Decimal $VlServ;


    ///     Valores cobrados em nome do prestador sem destaque de ICMS.

    #[SpedCampos(9, "VL_SERV_NT", "N", 0, 2, true, 17)]
    public Decimal $VlServNt;


    ///     Valor total cobrado em nome de terceiros.

    #[SpedCampos(10, "VL_TERC", "N", 0, 2, true, 17)]
    public Decimal $VlTerc;


    ///     Valor total dos descontos.

    #[SpedCampos(11, "VL_DESC", "N", 0, 2, true, 17)]
    public Decimal $VlDes;


    ///     Valor total das despesas acessórias.

    #[SpedCampos(12, "VL_DA", "N", 0, 2, true, 17)]
    public Decimal $VlDa;


    ///     Valor total da base de cálculo do ICMS.

    #[SpedCampos(13, "VL_BC_ICMS", "N", 0, 2, true, 17)]
    public Decimal $VlBcIcms;


    ///     Valor total do ICMS.

    #[SpedCampos(14, "VL_ICMS", "N", 0, 2, true, 17)]
    public Decimal $VlIcms;


    ///     Valor total do PIS.

    #[SpedCampos(15, "VL_PIS", "N", 0, 2, false, 17)]
    public Decimal $VlPis;


    ///     Valor total da COFINS.

    #[SpedCampos(16, "VL_COFINS", "N", 0, 2, false, 17)]
    public Decimal $VlCofins;


    ///     Deduções.

    #[SpedCampos(17, "DED", "N", PHP_INT_MAX, 2, false, 19)]
    public Decimal $Ded;

    public function __construct()
    {
        parent::__construct("D750");
    }
}

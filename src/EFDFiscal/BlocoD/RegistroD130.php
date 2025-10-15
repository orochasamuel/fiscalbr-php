<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD130 extends RegistroSped
{
    #[SpedCampos(2, "COD_PART_CONSG", "C", 60, 0, false, 2)]
    public string $CodPartConsg;



    ///    Código do participante (campo 02 do Registro 0150):

    /// <remarks>
    ///    -redespachado, se houver
    /// </remarks>
    #[SpedCampos(3, "COD_PART_RED", "C", 60, 0, false, 2)]
    public string $CodPartRed;


    ///    Indicador do tipo do frete da operação de redespacho:

    /// <remarks>
    ///    0 – Sem redespacho;
    ///    <para />
    ///    1 - Por conta do emitente;
    ///    <para />
    ///    2 - Por conta do destinatário;
    ///    <para />
    ///    9 –Outros.
    /// </remarks>
    #[SpedCampos(4, "IND_FRT_RED", "C", 1, 0, true, 2)]
    public int $IntFrtRed;


    ///    Código do município de origem do serviço, conforme a tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(5, "COD_MUN_ORIG", "N", 7, 0, true, 2)]
    public string $CodMunOrig;


    ///    Código do município de destino, conforme a tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(6, "COD_MUN_DEST", "N", 7, 0, true, 2)]
    public string $CodMunDest;


    ///    Placa de identificação do veículo

    #[SpedCampos(7, "VEIC_ID", "C", 7, 0, false, 2)]
    public string $VeicId;


    ///    Valor líquido do frete 

    #[SpedCampos(8, "VL_LIQ_FRT", "N", 0, 2, true, 2)]
    public string $VlLiqFrt;


    ///     Soma de valores de Sec/Cat (serviços de coleta/custo adicional de transporte) 

    #[SpedCampos(9, "VL_SEC_CAT", "N", 0, 2, false, 2)]
    public string $VlSecCat;


    ///     Soma de valores de despacho

    #[SpedCampos(10, "VL_DESP", "N", 0, 2, false, 2)]
    public string $VlDesp;


    ///     Soma dos valores de pedágio

    #[SpedCampos(11, "VL_PEDG", "N", 0, 2, false, 2)]
    public string $VlPedg;


    ///    Outros valores 

    #[SpedCampos(12, "VL_OUT", "N", 0, 2, false, 2)]
    public string $VlOut;


    ///     Valor total do frete

    #[SpedCampos(13, "VL_FRT", "N", 0, 2, true, 2)]
    public string $VlFrt;


    ///     Sigla da UF da placa do veículo

    #[SpedCampos(14, "UF_ID", "C", 2, 0, false, 2)]
    public string $UfId;

    public function __construct()
    {
        parent::__construct("D130");
    }
}

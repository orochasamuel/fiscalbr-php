<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD150 extends RegistroSped
{
    #[SpedCampos(2, "COD_MUN_ORIG", "N", 7, 0, true, 2)]
    public string $CodMunOrig;


    ///    Código do município de destino, conforme a tabela IBGE (Preencher com 9999999, se Exterior)

    #[SpedCampos(3, "COD_MUN_DEST", "N", 7, 0, true, 2)]
    public string $CodMunDest;


    ///    Identificação da aeronave (DAC)

    #[SpedCampos(4, "VEIC_ID", "C", 0, 0, false, 2)]
    public string $VeicId;


    ///    Número do vôo.

    #[SpedCampos(5, "VIAGEM", "N", 0, 0, false, 2)]
    public string $Viagem;


    ///    Indicador do tipo de tarifa aplicada:

    /// <remarks>
    ///     0- Exp.;
    ///     <para />
    ///     1- Enc.;
    ///     <para />
    ///     2- C.I.;
    ///     <para />
    ///     9-Outra
    /// </remarks>
    #[SpedCampos(6, "IND_TFA", "C", 1, 0, true, 2)]
    public string $IndTfa;


    ///   Peso taxado

    #[SpedCampos(7, "VL_PESO_TX", "N", 0, 2, true, 2)]
    public string $VlPesoTx;


    ///   Valor da taxa terrestre

    #[SpedCampos(8, "VL_TX_TERR", "N", 0, 2, false, 2)]
    public string $VlTxTerr;



    ///    Valor da taxa de redespacho

    #[SpedCampos(9, "VL_TX_RED", "N", 0, 2, false, 2)]
    public string $VlTxRed;



    ///    Outros valores

    #[SpedCampos(10, "VL_OUT", "N", 0, 2, false, 2)]
    public string $VlOut;


    ///    Valor da taxa "ad valorem"

    #[SpedCampos(11, "VL_TX_ADV", "N", 0, 2, false, 2)]
    public string $VlTxAdv;

    public function __construct()
    {
        parent::__construct("D150");
    }
}

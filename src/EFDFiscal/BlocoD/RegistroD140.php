<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD140 extends RegistroSped
{
    #[SpedCampos(2, "COD_PART_CONSG", "C", 60, 0, false, 2)]
    public string $CodPartConsg;



    ///   Código do município de origem do serviço, conforme a tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(3, "COD_MUN_ORIG", "N", 7, 0, true, 2)]
    public string $CodMunOrig;


    ///   Código do município de destino, conforme a tabela IBGE(Preencher com 9999999, se Exterior)

    #[SpedCampos(4, "COD_MUN_DEST", "N", 7, 0, true, 2)]
    public string $CodMunDest;



    ///       Indicador do tipo do veículo transportador:

    /// <remarks>
    ///      0- Embarcação;
    ///      <para />
    ///      1-Empurrador/rebocador
    /// </remarks>
    #[SpedCampos(5, "IND_VEIC", "C", 1, 0, true, 2)]
    public string $IndVeic;


    ///   Identificação da embarcação (IRIM ou Registro CPP)

    #[SpedCampos(6, "VEIC_ID", "C", 0, 0, false, 2)]
    public string $VeicId;


    ///      Indicador do tipo da navegação:

    /// <remarks>
    ///      0- Interior;
    ///      <para />
    ///      1-Cabotagem
    /// </remarks>
    #[SpedCampos(7, "IND_NAV", "C", 1, 0, true, 2)]
    public string $IndNav;


    ///  Número da viagem

    #[SpedCampos(8, "VIAGEM", "N", 0, 0, false, 2)]
    public string $Viagem;


    ///  Valor líquido do frete

    #[SpedCampos(9, "VL_FRT_LIQ", "N", 0, 2, true, 2)]
    public string $VlFrtLiq;


    ///  Valor das despesas portuárias 

    #[SpedCampos(10, "VL_DESP_PORT", "N", 0, 2, false, 2)]
    public string $VlDespPort;


    ///  Valor das despesas com carga e descarga 

    #[SpedCampos(11, "VL_DESP_CAR_DESC", "N", 0, 2, false, 2)]
    public string $VlDespCarDesC;


    ///   Outros valores

    #[SpedCampos(12, "VL_OUT", "N", 0, 2, false, 2)]
    public string $VlOut;


    ///  Valor brutodo frete

    #[SpedCampos(13, "VL_FRT_BRT", "N", 0, 2, true, 2)]
    public string $VlFrtBrt;


    /// Valor adicional do frete para renovação da Marinha Mercante

    #[SpedCampos(14, "VL_FRT_MM", "N", 0, 2, false, 2)]
    public string $VlFrtMm;

    public function __construct()
    {
        parent::__construct("D140");
    }
}

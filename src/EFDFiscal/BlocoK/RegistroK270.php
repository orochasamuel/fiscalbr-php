<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK270 extends RegistroSped
{
    /// <summary>
    ///     Data inicial do período de apuração em que ocorreu o apontamento que está sendo corrigido
    /// </summary>
    #[SpedCampos(2, "DT_INI_AP", "N", 8, 0, false, 11)]
    public ?DateTime $DtIniAP;

    /// <summary>
    ///     Data final do período de apuração em que ocorreu o apontamento que está sendo corrigido
    /// </summary>
    #[SpedCampos(3, "DT_FIN_AP", "N", 8, 0, false, 11)]
    public ?DateTime $DtFinAP;

    /// <summary>
    ///     Código de identificação da ordem de produção ou da ordem de serviço que está sendo corrigida
    /// </summary>
    #[SpedCampos(4, "COD_OP_OS", "C", 30, 0, false, 11)]
    public string $CodOpOs;

    /// <summary>
    ///     Código da mercadoria que está sendo corrigido (campo 02 do Registro 0200)
    /// </summary>
    #[SpedCampos(5, "COD_ITEM", "C", 60, 0, true, 11)]
    public string $CodItem;

    /// <summary>
    ///     Quantidade de correção positiva de apontamento ocorrido em período de apuração anterior
    /// </summary>
    #[SpedCampos(6, "QTD_COR_POS", "N", 0, 3, false, 11)]
    public Decimal $QtdCorPos;

    /// <summary>
    ///     Quantidade de correção negativa de apontamento ocorrido em período de apuração anterior
    /// </summary>
    #[SpedCampos(7, "QTD_COR_NEG", "N", 0, 3, false, 11)]
    public Decimal $QtdCorNeg;

    /// <summary>
    ///     1 - correção de apontamento de produção e/ou consumo relativo aos Registros K230/K235;
    ///     2 - correção de apontamento de produção e/ou consumo relativo aos Registros K250/K255;
    ///     3 - correção de apontamento de desmontagem e/ou consumo relativo aos Registros K210/K215;
    ///     4 - correção de apontamento de reprocessamento/reparo e/ou consumo relativo aos Registros K260/K265;
    ///     5 - correção de apontamento de movimentação interna relativo ao Registro K220.
    ///     6 – correção de apontamento de produção relativo ao Registro K291; 
    ///     7 – correção de apontamento de consumo relativo ao Registro K292;
    ///     8 – correção de apontamento de produção relativo ao Registro K301;
    ///     9 – correção de apontamento de consumo relativo ao Registro K302.
    /// </summary>
    #[SpedCampos(8, "ORIGEM", "C", 1, 0, true, 11)]
    public string $Origem;

    /** 
     * @var RegistroK275[]
     */
    private array $RegistrosK275 = [];

    public function __construct()
    {
        parent::__construct("K270");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK260 extends RegistroSped
{
    /// <summary>
    ///     Código de identificação da ordem de produção, no reprocessamento, ou da ordem de serviço, no reparo
    /// </summary>
    #[SpedCampos(2, "COD_OP_OS", "C", 30, 0, false, 11)]
    public string $CodOpOS;

    /// <summary>
    ///     Código do produto/insumo a ser reprocessado/reparado ou já reprocessado/reparado(campo 02 do Registro 0200)
    /// </summary>
    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 11)]
    public string $CodItem;

    /// <summary>
    ///     Data de saída do estoque
    /// </summary>
    #[SpedCampos(4, "DT_SAiDA", "N", 8, 0, true, 11)]
    public DateTime $DtSaida;

    /// <summary>
    ///    Quantidade de saída do estoque
    /// </summary>
    #[SpedCampos(5, "QTD_SAIDA", "N", 0, 3, true, 11)]
    public Decimal $QtdSaida;

    /// <summary>
    ///     Data de retorno ao estoque (entrada) 
    /// </summary>
    #[SpedCampos(6, "DT_RET", "N", 8, 0, false, 11)]
    public ?DateTime $DtReg;

    /// <summary>
    ///    Quantidade de retorno ao estoque (entrada)
    /// </summary>
    #[SpedCampos(7, "QTD_RET", "N", 0, 3, false, 11)]
    public Decimal $QtdRet;

    /** 
     * @var RegistroK265[]
     */
    private array $RegistrosK265 = [];

    public function __construct()
    {
        parent::__construct("K260");
    }
}

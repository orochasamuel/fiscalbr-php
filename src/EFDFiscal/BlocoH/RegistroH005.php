<?php

namespace FiscalBr\EFDFiscal\BlocoH;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroH005 extends RegistroSped
{
    /// <summary>
    ///     Data do inventário
    /// </summary>
    #[SpedCampos(2, "DT_INV", "N", 8, 0, true, 2)]
    public DateTime $DtInv;

    /// <summary>
    ///     Valor total do estoque
    /// </summary>
    #[SpedCampos(3, "VL_INV", "N", 0, 2, true, 2)]
    public Decimal $VlInv;

    /// <summary>
    ///     Informe o motivo do Inventário:
    ///     01 – No final no período;
    ///     02 – Na mudança de forma de tributação da mercadoria (ICMS);
    ///     03 – Na solicitação da baixa cadastral, paralisação temporária e outras situações;
    ///     04 – Na alteração de regime de pagamento – condição do contribuinte;
    ///     05 – Por determinação dos fiscos.
    /// </summary>
    #[SpedCampos(4, "MOT_INV", "C", 2, 0, true, 6)]
    public int $MotInv;

    /** 
     * @var RegistroH010[]
     */
    private array $RegistrosH010 = [];

    public function __construct()
    {
        parent::__construct("H005");
    }
}

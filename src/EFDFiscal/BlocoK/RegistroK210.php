<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK210 extends RegistroSped
{
    /// <summary>
    ///     Data de início da ordem de serviço
    /// </summary>
    #[SpedCampos(2, "DT_INI_OS", "N", 8, 0, false, 11)]
    public ?DateTime $DtIniOS;

    /// <summary>
    ///     Data de conclusão da ordem de serviço
    /// </summary>
    #[SpedCampos(3, "DT_FIN_OS", "N", 8, 0, false, 11)]
    public ?DateTime $DtFinOS;

    /// <summary>
    ///     Código de identificação da ordem de serviço
    /// </summary>
    #[SpedCampos(4, "COD_DOC_OS", "C", 30, 0, false, 11)]
    public string $CodDocOS;

    /// <summary>
    ///     Código do item de origem (campo 02 do Registro 0200)
    /// </summary>
    #[SpedCampos(5, "COD_ITEM_ORI", "C", 60, 0, true, 11)]
    public string $CodItemOri;

    /// <summary>
    ///    Quantidade de origem – saída do estoque
    /// </summary>
    #[SpedCampos(6, "QTD_ORI", "N", 0, 3, true, 11)]
    public Decimal $QtdOri;

    /** 
     * @var RegistroK215[]
     */
    private array $RegistrosK215 = [];

    public function __construct()
    {
        parent::__construct("K210");
    }
}

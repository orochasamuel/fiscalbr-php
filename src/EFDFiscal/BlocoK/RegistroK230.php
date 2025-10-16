<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK230 extends RegistroSped
{
    /// <summary>
    ///     Data de início da ordem de produção
    /// </summary>
    #[SpedCampos(2, "DT_INI_OP", "N", 8, 0, false, 10)]
    public DateTime $DtIniOp;

    /// <summary>
    ///     Data de conclusão da ordem de produção
    /// </summary>
    #[SpedCampos(3, "DT_FIN_OP", "N", 8, 0, false, 10)]
    public ?DateTime $DtFinOp;

    /// <summary>
    ///     Código de identificação da ordem de produção
    /// </summary>
    #[SpedCampos(4, "COD_DOC_OP", "C", 30, 0, false, 10)]
    public string $CodDocOp;

    /// <summary>
    ///     Código do item produzido
    /// </summary>
    #[SpedCampos(5, "COD_ITEM", "C", 60, 0, true, 10)]
    public string $CodItem;

    /// <summary>
    ///     Quantidade de produção acabada
    /// </summary>
    #[SpedCampos(6, "QTD_ENC", "N", 0, 3, true, 10)]
    public Decimal $QtdEnc;

    /** 
     * @var RegistroK235[]
     */
    private array $RegistrosK235 = [];

    public function __construct()
    {
        parent::__construct("K230");
    }
}

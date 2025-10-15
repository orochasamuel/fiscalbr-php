<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK290 extends RegistroSped
{
    /// <summary>
    ///     Data de início da ordem de produção
    /// </summary>
    #[SpedCampos(2, "DT_INI_OP", "N", 8, 0, false, 13)]
    public ?DateTime $DtIniOp;

    /// <summary>
    ///     Data de conclusão da ordem de produção
    /// </summary>
    #[SpedCampos(3, "DT_FIN_OP", "N", 8, 0, false, 13)]
    public ?DateTime $DtFinOp;

    /// <summary>
    ///     Código de identificação da ordem de produção
    /// </summary>
    #[SpedCampos(3, "COD_DOC_OP", "C", 30, 0, false, 13)]
    public string $CodDocOp;

    /** 
     * @var RegistroK291[]
     */
    private array $RegistrosK291 = [];

    /** 
     * @var RegistroK292[]
     */
    private array $RegistrosK292 = [];

    public function __construct()
    {
        parent::__construct("K290");
    }
}

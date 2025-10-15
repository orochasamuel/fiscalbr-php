<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE112 extends RegistroSped
{
    /// <summary>
    ///     Número do documento de arrecadação estadual, se houver
    /// </summary>
    #[SpedCampos(2, "NUM_DA", "C", 100, 0, false, 2)]
    public string $NumDa;

    /// <summary>
    ///     Número do processo ao qual o ajuste está vinculado, se houver
    /// </summary>
    #[SpedCampos(3, "NUM_PROC", "C", 15, 0, false, 2)]
    #[SpedCampos(3, "NUM_PROC", "C", 60, 0, false, 17)]
    public string $NumProc;

    /// <summary>
    ///     Indicador de origem do processo
    /// </summary>
    /// <remarks>
    ///     0 - Sefaz
    ///     1 - Justiça Federal
    ///     2 - Justiça Estadual
    ///     9 - Outros
    /// </remarks>
    #[SpedCampos(4, "IND_PROC", "C", 1, 0, false, 2)]
    public ?int $IndProc;

    /// <summary>
    ///     Descrição resumida do processo que embasou o lançamento
    /// </summary>
    #[SpedCampos(5, "PROC", "C", 1024, 0, false, 2)]
    public string $Proc;

    /// <summary>
    ///     Descrição complementar
    /// </summary>
    #[SpedCampos(6, "TXT_COMPL", "C", 1024, 0, false, 2)]
    public string $TxtCompl;

    public function __construct()
    {
        parent::__construct("E112");
    }
}

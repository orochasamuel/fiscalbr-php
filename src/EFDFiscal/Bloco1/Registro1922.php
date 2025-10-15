<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1922 extends RegistroSped
{
    #[SpedCampos(2, "NUM_DA", "C", 100, 0, false, 4)]
    public string $NumDa;


    ///     Número do processo ao qual o ajuste está vinculado, se houver

    #[SpedCampos(3, "NUM_PROC", "C", 15, 0, false, 4)]
    #[SpedCampos(3, "NUM_PROC", "C", 60, 0, false, 17)]
    public string $NumProc;


    ///     Indicador da origem do processo

    /// <remarks>
    ///     0 - SEFAZ
    ///     1 - Justiça Federal
    ///     2 - Justiça Estadual
    ///     9 - Outros
    /// </remarks>
    #[SpedCampos(4, "IND_PROC", "C", 1, 0, false, 4)]
    public int $IndProc;


    ///     Descrição resumida do processo que embasou o lançamento

    #[SpedCampos(5, "PROC", "C", 9999, 0, false, 4)]
    public string $Proc;


    ///     Descrição complementar

    #[SpedCampos(6, "TXT_COMPL", "C", 1024, 0, false, 4)]
    public string $TxtCompl;

    public function __construct()
    {
        parent::__construct("1922");
    }
}

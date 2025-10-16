<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1926 extends RegistroSped
{
    #[SpedCampos(2, "COD_OR", "C", 3, 0, true, 4)]
    public string $CodOr;


    ///     Valor da obrigação a recolher

    #[SpedCampos(3, "VL_OR", "N", 0, 2, true, 4)]
    public Decimal $VlOr;


    ///     Data de vencimento da obrigação

    #[SpedCampos(4, "DT_VCTO", "N", 8, 0, true, 4)]
    public DateTime $DtVcto;


    ///     Código de receita referente à obrigação, próprio da unidade da federação, conforme legislação estadual

    #[SpedCampos(5, "COD_REC", "C", 100, 0, true, 4)]
    public string $CodRec;


    ///     Número do processo ou auto de infração ao qual a obrigação está vinculada, se houver

    #[SpedCampos(6, "NUM_PROC", "C", 15, 0, false, 4)]
    #[SpedCampos(6, "NUM_PROC", "C", 60, 0, false, 17)]
    public string $NumProc;


    ///     Indicador da orgiem do processo

    /// <remarks>
    ///     0 - SEFAZ
    ///     1 - Justiça Federal
    ///     2 - Justiça Estadual
    ///     9 - Outros
    /// </remarks>
    #[SpedCampos(7, "IND_PROC", "C", 1, 0, false, 4)]
    public int $IndProc;


    ///     Descrição resumida do processo que embasou o lançamento

    #[SpedCampos(8, "PROC", "C", 1024, 0, false, 4)]
    public string $Proc;


    ///     Descrição complementar das obrigações a recolher

    #[SpedCampos(9, "TXT_COMPL", "C", 1024, 0, false, 4)]
    public string $TxtCompl;


    ///     Mês de referência

    #[SpedCampos(10, "MES_REF", "MA", 6, 0, true, 4)]
    public DateTime $MesRef;

    public function __construct()
    {
        parent::__construct("1926");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE316 extends RegistroSped
{
    /// <summary>
    ///     Código da obrigação recolhida ou a recolher
    /// </summary>
    #[SpedCampos(2, "COD_OR", "C", 3, 0, true, 2)]
    public string $CodOr;

    /// <summary>
    ///     Valor da obrigação recolhida ou a recolher
    /// </summary>
    #[SpedCampos(3, "VL_OR", "N", 0, 2, true, 2)]
    public Decimal $VlOr;

    /// <summary>
    ///     Data de vencimento da obrigação
    /// </summary>
    #[SpedCampos(4, "DT_VCTO", "N", 8, 0, true, 2)]
    public DateTime $DtVcto;

    /// <summary>
    ///     Código da receita referente à obrigação, próprio da unidade da federação da origem/destino, conforme legislação
    ///     estadual
    /// </summary>
    #[SpedCampos(5, "COD_REC", "C", 100, 0, true, 2)]
    public string $CodRec;

    /// <summary>
    ///     Número do processou ou auto de infração ao qual a obrigação está vinculada, se houver
    /// </summary>
    #[SpedCampos(6, "NUM_PROC", "C", 15, 0, false, 2)]
    #[SpedCampos(6, "NUM_PROC", "C", 60, 0, false, 17)]
    public string $NumProc;

    /// <summary>
    ///     Indicador de origem do processo
    /// </summary>
    /// <remarks>
    ///     0 - SEFAZ
    ///     1 - Justiça Federal
    ///     2 - Justiça Estadual
    ///     9 - Outros
    /// </remarks>
    #[SpedCampos(7, "IND_PROC", "C", 1, 0, false, 2)]
    public ?int $IndProc;

    /// <summary>
    ///     Descrição resumida do processo que embasou o lançamento
    /// </summary>
    #[SpedCampos(8, "PROC", "C", 1024, 0, false, 2)]
    public string $Proc;

    /// <summary>
    ///     Descrição complementar das obrigações recolhidas ou a recolher
    /// </summary>
    #[SpedCampos(9, "TXT_COMPL", "C", 1024, 0, false, 2)]
    public string $TxtCompl;

    /// <summary>
    ///     Informe o mês de referência
    /// </summary>
    #[SpedCampos(10, "MES_REF", "MA", 6, 0, true, 2)]
    public DateTime $MesRef;

    public function __construct()
    {
        parent::__construct("E316");
    }
}

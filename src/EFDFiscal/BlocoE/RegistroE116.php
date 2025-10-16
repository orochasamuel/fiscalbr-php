<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE116 extends RegistroSped
{
    /// <summary>
    ///     Código da obrigação a recolher, conforme a Tabela 5.4
    /// </summary>
    #[SpedCampos(2, "COD_OR", "C", 3, 0, true, 2)]
    public string $CodOr;

    /// <summary>
    ///     Valor da obrigação a recolher
    /// </summary>
    #[SpedCampos(3, "VL_OR", "N", 0, 2, true, 2)]
    public Decimal $VlOr;

    /// <summary>
    ///     Data de vencimento da obrigação
    /// </summary>
    #[SpedCampos(4, "DT_VCTO", "N", 8, 0, true, 2)]
    public DateTime $DtVcto;

    /// <summary>
    ///     Código de receita referente à obrigação, próprio da unidade da federação, conforme legislação estadual.
    /// </summary>
    #[SpedCampos(5, "COD_REC", "C", PHP_INT_MAX, 0, true, 2)]
    public string $CodRec;

    /// <summary>
    ///     Número do processo ou auto de infração ao qual a obrigação está vinculada, se houver.
    /// </summary>
    #[SpedCampos(6, "NUM_PROC", "C", 15, 0, false, 2)]
    #[SpedCampos(6, "NUM_PROC", "C", 60, 0, false, 17)]
    public string $NumProc;

    /// <summary>
    ///     Indicador da origem do processo:
    ///     0- SEFAZ;
    ///     1- Justiça Federal;
    ///     2- Justiça Estadual;
    ///     9- Outros
    /// </summary>
    #[SpedCampos(7, "IND_PROC", "C", 1, 0, false, 2)]
    public ?int $IndProc;

    /// <summary>
    ///     Descrição resumida do processo que embasou o lançamento
    /// </summary>
    #[SpedCampos(8, "PROC", "C", PHP_INT_MAX, 0, false, 2)]
    public string $Proc;

    /// <summary>
    ///     Descrição complementar das obrigações a recolher.
    /// </summary>
    #[SpedCampos(9, "TXT_COMPL", "C", 0, 0, false, 2)]
    public string $TxtCompl;

    /// <summary>
    ///     Informe o mês de referência no formato "mmaaaa"
    /// </summary>
    #[SpedCampos(10, "MES_REF", "MA", 6, 0, true, 4)]
    public DateTime $MesRef;

    public function __construct()
    {
        parent::__construct("E116");
    }
}

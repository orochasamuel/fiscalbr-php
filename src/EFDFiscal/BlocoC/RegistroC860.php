<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC860 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Número de série do equipamento SAT

    #[SpedCampos(3, "NR_SAT", "N", 9, 0, true, 2)]
    public string $NrSat;


    ///     Data da emissão do documento fiscal

    /// <remarks>
    ///     Preenchimento: Informar a data de emissão do documento, no formato "ddmmaaaa".
    /// </remarks>
    #[SpedCampos(4, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;


    ///     Número do documento inicial

    /// <remarks>
    ///     Preenchimento: informar o número do primeiro CF-e-SAT emitido, mesmo que cancelado, no período, pelo equipamento.
    /// </remarks>
    #[SpedCampos(5, "DOC_INI", "N", 6, 0, true, 2)]
    public int $NumDocIni;


    ///     Número do documento final

    /// <remarks>
    ///     Preenchimento: informar o número do último CF-e-SAT emitido, mesmo que cancelado, no período, pelo equipamento.
    /// </remarks>
    #[SpedCampos(6, "DOC_FIM", "N", 6, 0, true, 2)]
    public int $NumDocFin;

    /** 
     * @var RegistroC870[] 
     */
    private array $RegistrosC870 = [];

    /** 
     * @var RegistroC890[] 
     */
    private array $RegistrosC890 = [];

    public function __construct()
    {
        parent::__construct("C860");
    }
}

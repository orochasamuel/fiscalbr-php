<?php

namespace FiscalBr\EFDFiscal\BlocoE;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroE530 extends RegistroSped
{
    /// <summary>
    ///     Indicador do tipo de ajuste
    /// </summary>
    /// <remarks>
    ///     0 - Ajuste a débito
    ///     1 - Ajuste a crédito
    /// </remarks>
    #[SpedCampos(2, "IND_AJ", "C", 1, 0, true, 2)]
    public int $IndAj;

    /// <summary>
    ///     Valor do ajuste
    /// </summary>
    #[SpedCampos(3, "VL_AJ", "N", 0, 2, true, 2)]
    public Decimal $VlAj;

    /// <summary>
    ///     Código do ajuste da apuração
    /// </summary>
    #[SpedCampos(4, "COD_AJ", "C", 3, 0, true, 2)]
    public string $CodAj;

    /// <summary>
    ///     Indicador da origem do documento vinculado ao ajuste
    /// </summary>
    /// <remarks>
    ///     0 - Processo Judicial
    ///     1 - Processo Administrativo
    ///     2 - PER/DCOMP
    ///     9 - Outros
    /// </remarks>
    #[SpedCampos(5, "IND_DOC", "C", 1, 0, false, 2)]
    public ?int $IndDoc;

    /// <summary>
    ///     Número do documento/processo/declaração ao qual o ajuste está vinculado, se houver
    /// </summary>
    #[SpedCampos(6, "NUM_DOC", "C", 1024, 0, false, 2)]
    public string $NumDoc;

    /// <summary>
    ///     Descrição detalhada do ajuste, com citação dos documentos fiscais
    /// </summary>
    #[SpedCampos(7, "DESCR_AJ", "C", 1024, 0, true, 2)]
    public string $DescrAj;

    /** 
     * @var RegistroE531[]
     */
    private array $RegistrosE531 = [];

    public function __construct()
    {
        parent::__construct("E530");
    }
}

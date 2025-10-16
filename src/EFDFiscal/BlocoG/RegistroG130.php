<?php

namespace FiscalBr\EFDFiscal\BlocoG;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroG130 extends RegistroSped
{
    /// <summary>
    ///     Indicador do emitente do documento fiscal
    /// </summary>
    /// <remarks>
    ///     0 - Emissão própria
    ///     1 - Terceiros
    /// </remarks>
    #[SpedCampos(2, "IND_EMIT", "C", 1, 0, true, 4)]
    public int $IndEmit;

    /// <summary>
    ///     Código do participante
    /// </summary>
    /// <remarks>
    ///     - do emitente do documento ou do remetente das mercadorias no caso das entradas;
    ///     - do adquirente, no caso de saídas
    /// </remarks>
    #[SpedCampos(3, "COD_PART", "C", 60, 0, true, 4)]
    public string $CodPart;

    /// <summary>
    ///     Código do modelo de documento fiscal
    /// </summary>
    #[SpedCampos(4, "COD_MOD", "C", 2, 0, true, 4)]
    public string $CodMod;

    /// <summary>
    ///     Série do documento fiscal
    /// </summary>
    #[SpedCampos(5, "SERIE", "C", 3, 0, false, 4)]
    public string $Serie;

    /// <summary>
    ///     Número do documento fiscal
    /// </summary>
    #[SpedCampos(6, "NUM_DOC", "N", 9, 0, true, 4)]
    public string $NumDoc;

    /// <summary>
    ///     Chave do documento fiscal eletrônico
    /// </summary>
    #[SpedCampos(7, "CHV_NFE_CTE", "N", 44, 0, false, 4)]
    public string $ChvNfeCte;

    /// <summary>
    ///     Data da emissão do documento fiscal
    /// </summary>
    #[SpedCampos(8, "DT_DOC", "N", 8, 0, true, 4)]
    public DateTime $DtDoc;

    /// <summary>
    ///     Número do documento de arrecadação estadual, se houver
    /// </summary>
    #[SpedCampos(9, "NUM_DA", "C", 99, 0, false, 4)]
    public string $NumDa;

    /** 
     * @var RegistroG140[]
     */
    private array $RegistrosG140 = [];

    public function __construct()
    {
        parent::__construct("G130");
    }
}

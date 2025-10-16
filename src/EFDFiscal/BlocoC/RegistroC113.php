<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC113 extends RegistroSped
{
    #[SpedCampos(2, "IND_OPER", "C", 1, 0, true, 2)]
    public int $IndOper;


    ///     Indicador do emitente do título:
    ///     0 - Emissão própria
    ///     1 - Terceiros

    #[SpedCampos(3, "IND_EMIT", "C", 1, 0, true, 2)]
    public int $IndEmit;


    ///     Código do participante emitente do documento referenciado

    #[SpedCampos(4, "COD_PART", "C", 60, 0, true, 2)]
    public string $CodPart;


    ///     Código do documento fiscal

    #[SpedCampos(5, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Série do documento fiscal

    #[SpedCampos(6, "SER", "C", 4, 0, false, 2)]
    public string $Ser;


    ///     Subsérie do documento fiscal

    #[SpedCampos(7, "SUB", "C", 3, 0, false, 2)]
    public string $Sub;


    ///     Número do documento fiscal

    #[SpedCampos(8, "NUM_DOC", "N", 9, 0, true, 2)]
    public string $NumDoc;


    ///     Data da emissão do documento fiscal

    #[SpedCampos(9, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;


    ///     Chave de acesso do documento fiscal

    #[SpedCampos(10, "CHV_DOCe", "C", 44, 0, false, 2)]
    public string $ChvDoc;

    public function __construct()
    {
        parent::__construct("C113");
    }
}

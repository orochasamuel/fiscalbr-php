<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC116 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;


    ///     Número de série do equipamento SAT

    #[SpedCampos(3, "NR_SAT", "N", 9, 0, true, 2)]
    public string $NrSat;


    ///     Chave do cupom fiscal eletrônico

    #[SpedCampos(4, "CHV_CFE", "N", 44, 0, true, 2)]
    public string $ChvCfe;


    ///     Número do cupom fiscal eletrônico

    #[SpedCampos(5, "NUM_CFE", "N", 6, 0, true, 2)]
    public int $NumCfe;


    ///     Data da emissão do documento fiscal

    /// <remarks>
    ///     Preenchimento: Informar a data de emissão do documento, no formato "ddmmaaaa".
    /// </remarks>
    #[SpedCampos(6, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;

    public function __construct()
    {
        parent::__construct("C116");
    }
}

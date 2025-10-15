<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC173 extends RegistroSped
{
    #[SpedCampos(4, "LOTE_MED", "C", 1024, 0, true, 2)]
    public string $LoteMed;


    ///     Quantidade de item por lote

    #[SpedCampos(4, "QTD_ITEM", "N", 0, 3, true, 2)]
    public Decimal $QtdItem;


    ///     Data de fabricação do medicamento

    #[SpedCampos(4, "DT_FAB", "N", 8, 0, true, 2)]
    public DateTime $DtFab;


    ///     Data de expiração da validade do medicamento

    #[SpedCampos(4, "DT_VAL", "N", 8, 0, true, 2)]
    public DateTime $DtVal;


    ///     Indicador de tipo de refer~encia da base de cálculo do ICMS (ST) do produto farmacêutico

    /// <remarks>
    ///     0 - Base de cálculo referente ao preço tabelado ou preço máximo sugerido
    ///     1 - Base cálculo - Margem de valor agregado
    ///     2 - Base de cálculo referente à Lista Negativa
    ///     3 - Base de cálculo referente à Lista Positiva
    ///     4 - Base de cálculo referente à Lista Neutra
    /// </remarks>
    #[SpedCampos(4, "IND_MED", "C", 1, 0, true, 2)]
    public int $IndMed;


    ///     Tipo de produto

    /// <remarks>
    ///     0 - Similar
    ///     1 - Genérico
    ///     2 - Ético ou de marca
    /// </remarks>
    #[SpedCampos(4, "TP_PROD", "C", 1, 0, true, 2)]
    public int $TpProd;


    ///     Valor do preço tabelado ou valor do preço máximo

    #[SpedCampos(4, "VL_TAB_MAX", "N", 0, 2, true, 2)]
    public Decimal $VlTabMax;

    public function __construct()
    {
        parent::__construct("C173");
    }
}

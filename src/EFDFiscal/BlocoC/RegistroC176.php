<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC176 extends RegistroSped
{
    #[SpedCampos(2, "COD_MOD_ULT_E", "C", 2, 0, true, 2)]
    public string $CodModUltE;


    ///     Número do documento fiscal relativa a última entrada

    #[SpedCampos(3, "NUM_DOC_ULT_E", "N", 9, 0, true, 2)]
    public string $NumDocUltE;


    ///     Série do documento fiscal relativa a última entrada

    #[SpedCampos(4, "SER_ULT_E", "C", 3, 0, false, 2)]
    public string $SerUltE;


    ///     Data relativa a última entrada da mercadoria

    #[SpedCampos(5, "DT_ULT_E", "N", 8, 0, true, 2)]
    public DateTime $DtUltE;


    ///     Código do participante (do emitente do documento relativa a última entrada)

    #[SpedCampos(6, "COD_PART_ULT_E", "C", 60, 0, true, 2)]
    public string $CodPartUltE;


    ///     Quantidade do item relativa a última entrada

    #[SpedCampos(7, "QUANT_ULT_E", "N", 0, 3, true, 2)]
    public Decimal $QuantUltE;


    ///     Valor unitário da mercadoria constante na NF relativa a última entrada inclusive despesas acessórias

    #[SpedCampos(8, "VL_UNIT_ULT_E", "N", 0, 3, true, 2)]
    public Decimal $VlUnitUltE;


    ///     Valor unitário da base de cálculo do imposto pago por substituição

    #[SpedCampos(9, "VL_UNIT_BC_ST", "N", 0, 3, true, 2)]
    public Decimal $VlUnitBcSt;

    public function __construct()
    {
        parent::__construct("C176");
    }
}

<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC160 extends RegistroSped
{
    #[SpedCampos(2, "COD_PART", "C", 60, 0, false, 2)]
    public string $CodPart;


    ///     Placa de identificação do veículo automotor

    #[SpedCampos(3, "VEIC_ID", "C", 7, 0, false, 2)]
    public string $VeicId;


    ///     Quantidade de volumes transportados

    #[SpedCampos(4, "QTD_VOL", "N", PHP_INT_MAX, 0, true, 2)]
    public int $QtdVol;


    ///     Peso bruto dos volumes transportados (em Kg)

    #[SpedCampos(5, "PESO_BRT", "N", 0, 2, true, 2)]
    public Decimal $PesoBrt;


    ///     Peso líquido dos volumes transportados (em Kg)

    #[SpedCampos(6, "PESO_LIQ", "N", 0, 2, true, 2)]
    public Decimal $PesoLiq;


    ///     Sigla da UF da placa do veículo

    #[SpedCampos(7, "UF_ID", "C", 2, 0, false, 2)]
    public string $UfId;

    public function __construct()
    {
        parent::__construct("C160");
    }
}

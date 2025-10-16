<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1601 extends RegistroSped
{
    ///     Identificação da instituição que efetuou o pagamento

    #[SpedCampos(2, "COD_PART_IP", "C", 60, 0, true, 16)]
    public string $CodPartIp;


    ///     Identificação do intermediador da transação

    #[SpedCampos(3, "COD_PART_IT", "C", 60, 0, false, 16)]
    public string $CodPartIt;


    ///     Valor total bruto das vendas e/ou prestações de serviços no campo de incidência do ICMS, incluindo operações com imunidade do imposto

    #[SpedCampos(4, "TOT_VS", "N", 15, 2, true, 16)]
    public Decimal $TotVs;


    ///     Valor total bruto das prestações de serviços no campo de incidência do ISS

    #[SpedCampos(5, "TOT_ISS", "N", 15, 2, true, 16)]
    public Decimal $TotIss;


    ///     Valor total de operações deduzido dos valores dos campos TOT_VS e TOT_ISS

    #[SpedCampos(6, "TOT_OUTROS", "N", 15, 2, true, 16)]
    public Decimal $TotOutros;

    public function __construct()
    {
        parent::__construct("1601");
    }
}

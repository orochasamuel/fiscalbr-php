<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC115 extends RegistroSped
{
    #[SpedCampos(2, "IND_CARGA", "N", 1, 0, true, 2)]
    public int $IndCarga;


    ///     Número do CNPJ do contribuinte do local de coleta

    #[SpedCampos(3, "CNPJ_COL", "N", 14, 0, false, 2)]
    public string $CnpjCol;


    ///     Inscrição estadual do contribuinte do local de coleta

    #[SpedCampos(4, "IE_COL", "C", 14, 0, false, 2)]
    public string $IeCol;


    ///     CPF do contribuinte do local de coleta das mercadorias

    #[SpedCampos(5, "CPF_COL", "N", 11, 0, false, 2)]
    public string $CpfCol;


    ///     Código do município do local de coleta

    #[SpedCampos(6, "COD_MUN_COL", "N", 7, 0, false, 2)]
    public string $CodMunCol;


    ///     Número do CNPJ do contribuinte do local de entrega

    #[SpedCampos(7, "CNPJ_ENTG", "N", 14, 0, false, 2)]
    public string $CnpjEntg;


    ///     Inscrição estadual do contribuinte do local de entrega

    #[SpedCampos(8, "IE_ENTG", "C", 14, 0, false, 2)]
    public string $IeEntg;


    ///     CPF do contribuinte do local de entrega

    #[SpedCampos(9, "CPF_ENTG", "N", 11, 0, false, 2)]
    public string $CpfEntg;


    ///     Código do município do local de entrega

    #[SpedCampos(10, "COD_MUN_ENTG", "N", 7, 0, false, 2)]
    public string $CodMunEntg;

    public function __construct()
    {
        parent::__construct("C115");
    }
}

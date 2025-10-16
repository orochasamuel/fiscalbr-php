<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC112 extends RegistroSped
{
    #[SpedCampos(2, "COD_DA", "C", 1, 0, true, 2)]
    public int $CodDa;


    ///     Unidade federada beneficiária do recolhimento

    #[SpedCampos(3, "UF", "C", 2, 0, true, 2)]
    public string $Uf;


    ///     Número do documento de arrecadação

    #[SpedCampos(4, "NUM_DA", "C", 999, 0, false, 2)]
    public string $NumDa;


    ///     Código completo da autenticação bancária

    #[SpedCampos(5, "COD_AUT", "C", 999, 0, false, 2)]
    public string $Cod_Aut;


    ///     Valor do total do documento de arrecadação (principal, atualização monetária, juros e multa)

    #[SpedCampos(6, "VL_DA", "N", 0, 2, true, 2)]
    public Decimal $VlDa;


    ///     Data de vencimento do documento de arrecadação

    #[SpedCampos(6, "DT_VCTO", "N", 8, 0, true, 2)]
    public DateTime $DtVcto;


    ///     Data de pagamento do documento de arrecadação ou data do vencimento, no caso de ICMS antecipado a recolher.

    #[SpedCampos(7, "DT_PGTO", "N", 8, 0, true, 2)]
    public DateTime $DtPgto;

    public function __construct()
    {
        parent::__construct("C112");
    }
}

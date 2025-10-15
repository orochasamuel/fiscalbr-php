<?php

namespace FiscalBr\EFDFiscal\Bloco1;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro1320 extends RegistroSped
{
    #[SpedCampos(2, "NUM_BICO", "N", PHP_INT_MAX, 0, true, 2)]
    public string $NumBico;

    #[SpedCampos(3, "NR_INTERV", "N", PHP_INT_MAX, 0, false, 2)]
    public string $NrInterv;

    #[SpedCampos(4, "MOT_INTERV", "C", 50, 0, false, 2)]
    public string $MotInterv;

    #[SpedCampos(5, "NOM_INTERV", "C", 30, 0, false, 2)]
    public string $NomInterv;

    #[SpedCampos(6, "CNPJ_INTERV", "N", 14, 0, false, 2)]
    public string $CnpjInterv;

    #[SpedCampos(7, "CPF_INTERV", "N", 11, 0, false, 2)]
    public string $CpfInterv;

    #[SpedCampos(8, "VAL_FECHA", "N", PHP_INT_MAX, 3, true, 2)]
    public Decimal $ValFecha;

    #[SpedCampos(9, "VAL_ABERT", "N", PHP_INT_MAX, 3, true, 2)]
    public Decimal $ValAbert;

    #[SpedCampos(10, "VOL_AFERI", "N", PHP_INT_MAX, 3, false, 2)]
    public Decimal $VolAferi;

    #[SpedCampos(11, "VOL_VENDAS", "N", PHP_INT_MAX, 3, true, 2)]
    public Decimal $VolVendas;

    public function __construct()
    {
        parent::__construct("1320");
    }
}

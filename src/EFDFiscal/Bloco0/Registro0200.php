<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0200 extends RegistroSped
{
    #[SpedCampos(2, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;

    #[SpedCampos(3, "DESCR_ITEM", "C", PHP_INT_MAX, 0, true, 2)]
    public string $DescrItem;

    #[SpedCampos(4, "COD_BARRA", "C", 99, 0, false, 2)]
    public string $CodBarra;

    #[SpedCampos(5, "COD_ANT_ITEM", "C", 60, 0, false, 2)]
    public string $CodAntItem = '';

    #[SpedCampos(6, "UNID_INV", "C", 6, 0, true, 2)]
    public string $UnidInv;

    #[SpedCampos(7, "TIPO_ITEM", "N", 2, 0, true, 2)]
    public int $TipoItem;

    #[SpedCampos(8, "COD_NCM", "C", 8, 0, false, 2)]
    public string $CodNcm;

    #[SpedCampos(9, "EX_IPI", "C", 3, 0, false, 2)]
    public string $ExIpi;

    #[SpedCampos(10, "COD_GEN", "N", 2, 0, false, 2)]
    public string $CodGen;

    #[SpedCampos(11, "COD_LST", "C", 5, 0, false, 2)]
    public string $CodLst;

    #[SpedCampos(12, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public ?Decimal $AliqIcms;

    #[SpedCampos(13, "CEST", "C", 7, 0, false, 2)]
    public string $Cest;

    /** 
     * @var Registro0205[]
     */
    private array $Registros0205 = [];

    private ?Registro0206 $Registro0206 = null;

    /** 
     * @var Registro0210[]
     */
    private array $Registros0210 = [];

    /** 
     * @var Registro0220[]
     */
    private array $Registros0220 = [];

    /** 
     * @var Registro0221[]
     */
    private array $Registros0221 = [];

    public function __construct()
    {
        parent::__construct("0200");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->CodItem ??= '';
        $this->DescrItem ??= '';
        $this->CodBarra ??= '';
        $this->UnidInv ??= '';
        $this->TipoItem ??= 0;
        $this->CodNcm ??= '';
        $this->ExIpi ??= '';
        $this->CodGen ??= '';
        $this->CodLst ??= '';
        $this->AliqIcms ??= null;
        $this->Cest ??= '';
    }
}

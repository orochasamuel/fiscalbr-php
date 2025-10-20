<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;
use FiscalBr\Core\Sped\SpedOrdemRegistro;

//#[SpedOrdemRegistro(170)]
class RegistroC170 extends RegistroSped
{
    #[SpedCampos(2, "NUM_ITEM", "N", 3, 0, true, 2)]
    public int $NumItem;

    #[SpedCampos(3, "COD_ITEM", "C", 60, 0, true, 2)]
    public string $CodItem;

    #[SpedCampos(4, "DESCR_COMPL", "C", 999, 0, false, 2)]
    public string $DescrCompl;

    #[SpedCampos(5, "QTD", "N", 15, 5, true, 2)]
    public Decimal $Qtd;

    #[SpedCampos(6, "UNID", "C", 6, 0, true, 2)]
    public string $Unid;

    #[SpedCampos(7, "VL_ITEM", "N", 15, 2, true, 2)]
    public Decimal $VlItem;

    #[SpedCampos(8, "VL_DESC", "N", 15, 2, false, 2)]
    public Decimal $VlDesc;

    #[SpedCampos(9, "IND_MOV", "C", 1, 0, true, 2)]
    public int $IndMov;

    #[SpedCampos(10, "CST_ICMS", "N", 3, 0, true, 2)]
    public string $CstIcms;

    #[SpedCampos(11, "CFOP", "N", 4, 0, true, 2)]
    public string $Cfop;

    #[SpedCampos(12, "COD_NAT", "C", 10, 0, false, 2)]
    public string $CodNat;

    #[SpedCampos(13, "VL_BC_ICMS", "N", 15, 2, false, 2)]
    public Decimal $VlBcIcms;

    #[SpedCampos(14, "ALIQ_ICMS", "N", 6, 2, false, 2)]
    public Decimal $AliqIcms;

    #[SpedCampos(15, "VL_ICMS", "N", 15, 2, false, 2)]
    public Decimal $VlIcms;

    #[SpedCampos(16, "VL_BC_ICMS_ST", "N", 15, 2, false, 2)]
    public Decimal $VlBcIcmsSt;

    #[SpedCampos(17, "ALIQ_ST", "N", 15, 2, false, 2)]
    public Decimal $AliqSt;

    #[SpedCampos(18, "VL_ICMS_ST", "N", 15, 2, false, 2)]
    public Decimal $VlIcmsSt;

    #[SpedCampos(19, "IND_APUR", "C", 1, 0, false, 2)]
    public int $IndApur;

    #[SpedCampos(20, "CST_IPI", "C", 2, 0, false, 2)]
    public string $CstIpi;

    #[SpedCampos(21, "COD_ENQ", "C", 3, 0, false, 2)]
    public string $CodEnq;

    #[SpedCampos(22, "VL_BC_IPI", "N", 15, 2, false, 2)]
    public Decimal $VlBcIpi;

    #[SpedCampos(23, "ALIQ_IPI", "N", 6, 2, false, 2)]
    public Decimal $AliqIpi;

    #[SpedCampos(24, "VL_IPI", "N", 15, 2, false, 2)]
    public Decimal $VlIpi;

    #[SpedCampos(25, "CST_PIS", "N", 2, 0, false, 2)]
    public string $CstPis;

    #[SpedCampos(26, "VL_BC_PIS", "N", 15, 2, false, 2)]
    public Decimal $VlBcPis;

    #[SpedCampos(27, "ALIQ_PIS", "N", 8, 4, false, 2)]
    public Decimal $AliqPis;

    #[SpedCampos(28, "QUANT_BC_PIS", "N", 15, 3, false, 2)]
    public Decimal $QuantBcPis;

    #[SpedCampos(29, "ALIQ_PIS", "N", 8, 4, false, 2)]
    public Decimal $AliqPisReais;

    #[SpedCampos(30, "VL_PIS", "N", 15, 2, false, 2)]
    public Decimal $VlPis;

    #[SpedCampos(31, "CST_COFINS", "N", 2, 0, false, 2)]
    public string $CstCofins;

    #[SpedCampos(32, "VL_BC_COFINS", "N", 15, 2, false, 2)]
    public Decimal $VlBcCofins;

    #[SpedCampos(33, "ALIQ_COFINS", "N", 8, 4, false, 2)]
    public Decimal $AliqCofins;

    #[SpedCampos(34, "QUANT_BC_COFINS", "N", 15, 3, false, 2)]
    public Decimal $QuantBcCofins;

    #[SpedCampos(35, "ALIQ_COFINS", "N", 8, 4, false, 2)]
    public Decimal $AliqCofinsReais;

    #[SpedCampos(36, "VL_COFINS", "N", 15, 2, false, 2)]
    public Decimal $VlCofins;

    #[SpedCampos(37, "COD_CTA", "C", 999, 0, false, 2)]
    public string $CodCta;

    #[SpedCampos(38, "VL_ABAT_NT", "N", 15, 2, false, 2)]
    public Decimal $VlAbatNt;

    /** 
     * @var RegistroC171[] 
     */
    private array $RegistrosC171 = [];

    /** 
     * @var RegistroC172[] 
     */
    private array $RegistrosC172 = [];

    /** 
     * @var RegistroC173[] 
     */
    private array $RegistrosC173 = [];

    /** 
     * @var RegistroC174[] 
     */
    private array $RegistrosC174 = [];

    /** 
     * @var RegistroC175[] 
     */
    private array $RegistrosC175 = [];

    /** 
     * @var RegistroC176[] 
     */
    private array $RegistrosC176 = [];

    /** 
     * @var RegistroC177[] 
     */
    private array $RegistrosC177 = [];

    /** 
     * @var RegistroC178[] 
     */
    private array $RegistrosC178 = [];

    /** 
     * @var RegistroC179[] 
     */
    private array $RegistrosC179 = [];

    /** 
     * @var RegistroC180[] 
     */
    private array $RegistrosC180 = [];

    /** 
     * @var RegistroC181[] 
     */
    private array $RegistrosC181 = [];

    public function __construct()
    {
        parent::__construct("C170");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->NumItem = 0;
        $this->CodItem = '';
        $this->DescrCompl = '';
        $this->Qtd = new Decimal(0);
        $this->Unid = '';
        $this->VlItem = new Decimal(0);
        $this->VlDesc = new Decimal(0);
        $this->IndMov = 0;
        $this->CstIcms = 0;
        $this->Cfop = 0;
        $this->CodNat = '';
        $this->VlBcIcms = new Decimal(0);
        $this->AliqIcms = new Decimal(0);
        $this->VlIcms = new Decimal(0);
        $this->VlBcIcmsSt = new Decimal(0);
        $this->AliqSt = new Decimal(0);
        $this->VlIcmsSt = new Decimal(0);
        $this->IndApur = 0;
        $this->CstIpi = '';
        $this->CodEnq = '';
        $this->VlBcIpi = new Decimal(0);
        $this->AliqIpi = new Decimal(0);
        $this->VlIpi = new Decimal(0);
        $this->CstPis = '';
        $this->VlBcPis = new Decimal(0);
        $this->AliqPis = new Decimal(0);
        $this->QuantBcPis = new Decimal(0);
        $this->AliqPisReais = new Decimal(0);
        $this->VlPis = new Decimal(0);
        $this->CstCofins = '';
        $this->VlBcCofins = new Decimal(0);
        $this->AliqCofins = new Decimal(0);
        $this->QuantBcCofins = new Decimal(0);
        $this->AliqCofinsReais = new Decimal(0);
        $this->VlCofins = new Decimal(0);
        $this->CodCta = '';
        $this->VlAbatNt = new Decimal(0);
    }

    public function comNumeroItem(int $value): self
    {
        $this->NumItem = $value;
        return $this;
    }

    public function getNumItem(): int
    {
        return $this->NumItem;
    }

    public function comCodigoItem(string $value): self
    {
        $this->CodItem = $value;
        return $this;
    }

    public function getCodItem(): int
    {
        return $this->CodItem;
    }

    public function comDescricaoComplementar(string $value): self
    {
        $this->DescrCompl = $value;
        return $this;
    }

    public function getDescrCompl(): int
    {
        return $this->DescrCompl;
    }

    public function comQuantidade(Decimal|float|string $value): self
    {
        $newValue = new Decimal($value);
        $this->Qtd = $newValue;
        return $this;
    }

    public function getQtd(): Decimal
    {
        return $this->Qtd;
    }

    public function comUnidadeMedida(string $value): self
    {
        $this->Unid = $value;
        return $this;
    }

    public function getUnid(): int
    {
        return $this->Unid;
    }

    public function comValorItem(Decimal|float|string $value): self
    {
        $newValue = new Decimal($value);
        $this->VlItem = $newValue;
        return $this;
    }

    public function getVlItem(): Decimal
    {
        return $this->VlItem;
    }

    public function comValorDesconto(Decimal|float|string $value): self
    {
        $newValue = new Decimal($value);
        $this->VlDesc = $newValue;
        return $this;
    }

    public function getDesc(): Decimal
    {
        return $this->VlDesc;
    }

    public function comIndicadorMovimento(int $value): self
    {
        $this->IndMov = $value;
        return $this;
    }

    public function getIndMov(): int
    {
        return $this->IndMov;
    }

    public function comCSTIcms(string $value): self
    {
        $this->CstIcms = $value;
        return $this;
    }

    public function getCSTIcms(): string
    {
        return $this->CstIcms;
    }

    public function comCFOP(string $value): self
    {
        $this->Cfop = $value;
        return $this;
    }

    public function getCFOP(): string
    {
        return $this->Cfop;
    }

    public function comAliqIcms(Decimal|float|string $value): self
    {
        $newValue = new Decimal($value);
        $this->AliqIcms = $newValue;
        return $this;
    }

    public function getAliqIcms(): Decimal
    {
        return $this->AliqIcms;
    }
}

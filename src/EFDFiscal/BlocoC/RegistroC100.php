<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;
use FiscalBr\Core\Sped\SpedOrdemRegistro;

//#[SpedOrdemRegistro(100)]
class RegistroC100 extends RegistroSped
{
    #[SpedCampos(2, "IND_OPER", "C", 1, 0, true, 2)]
    public int $IndOper;

    #[SpedCampos(3, "IND_EMIT", "C", 1, 0, true, 2)]
    public int $IndEmit;

    #[SpedCampos(4, "COD_PART", "C", 60, 0, false, 2)]
    public string $CodPart;

    #[SpedCampos(5, "COD_MOD", "C", 2, 0, true, 2)]
    public string $CodMod;

    #[SpedCampos(6, "COD_SIT", "N", 2, 0, true, 2)]
    public int $CodSit;

    #[SpedCampos(7, "SER", "C", 3, 0, false, 2)]
    public string $Ser;

    #[SpedCampos(8, "NUM_DOC", "N", 9, 0, true, 2)]
    public string $NumDoc;

    #[SpedCampos(9, "CHV_NFE", "N", 44, 0, false, 2)]
    public string $ChvNfe;

    #[SpedCampos(10, "DT_DOC", "N", 8, 0, false, 2)]
    public ?DateTime $DtDoc;

    #[SpedCampos(11, "DT_E_S", "N", 8, 0, false, 2)]
    public ?DateTime $DtEs;

    #[SpedCampos(12, "VL_DOC", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlDoc;

    #[SpedCampos(13, "IND_PGTO", "C", 1, 0, false, 2)]
    public int $IndPgto;

    #[SpedCampos(14, "VL_DESC", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlDesc;

    #[SpedCampos(15, "VL_ABAT_NT", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlAbatNt;

    #[SpedCampos(16, "VL_MERC", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlMerc;

    #[SpedCampos(17, "IND_FRT", "C", 1, 0, false, 2)]
    public int $IndFrt;

    #[SpedCampos(18, "VL_FRT", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlFrt;

    #[SpedCampos(19, "VL_SEG", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlSeg;

    #[SpedCampos(20, "VL_OUT_DA", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlOutDa;

    #[SpedCampos(21, "VL_BC_ICMS", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlBcIcms;

    #[SpedCampos(22, "VL_ICMS", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlIcms;

    #[SpedCampos(23, "VL_BC_ICMS_ST", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlBcIcmsSt;

    #[SpedCampos(24, "VL_ICMS_ST", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlIcmsSt;

    #[SpedCampos(25, "VL_IPI", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlIpi;

    #[SpedCampos(26, "VL_PIS", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlPis;

    #[SpedCampos(27, "VL_COFINS", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlCofins;

    #[SpedCampos(28, "VL_PIS_ST", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlPisSt;

    #[SpedCampos(29, "VL_COFINS_ST", "N", PHP_INT_MAX, 2, false, 2)]
    public ?Decimal $VlCofinsSt;

    /** 
     * @var RegistroC170[] 
     */
    private array $RegistrosC170 = [];

    /** 
     * @var RegistroC190[] 
     */
    private array $RegistrosC190 = [];

    public function __construct()
    {
        parent::__construct("C100");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->IndOper ??= 0;
        $this->IndEmit ??= 0;
        $this->CodPart ??= '';
        $this->CodMod ??= '';
        $this->CodSit ??= 0;
        $this->Ser ??= '';
        $this->NumDoc ??= '';
        $this->ChvNfe ??= '';
        $this->DtDoc ??= null;
        $this->DtEs ??= null;
        $this->VlDoc ??= null;
        $this->IndPgto ??= 0;
        $this->VlDesc ??= null;
        $this->VlAbatNt ??= null;
        $this->VlMerc ??= null;
        $this->IndFrt ??= 0;
        $this->VlFrt ??= null;
        $this->VlSeg ??= null;
        $this->VlOutDa ??= null;
        $this->VlBcIcms ??= null;
        $this->VlIcms ??= null;
        $this->VlBcIcmsSt ??= null;
        $this->VlIcmsSt ??= null;
        $this->VlIpi ??= null;
        $this->VlPis ??= null;
        $this->VlCofins ??= null;
        $this->VlPisSt ??= null;
        $this->VlCofinsSt ??= null;
    }

    public function comIndicadorOperacao(int $value): self
    {
        $this->IndOper = $value;
        return $this;
    }

    public function getIndOper(): int
    {
        return $this->IndOper;
    }

    public function comIndicadorEmitente(int $value): self
    {
        $this->IndEmit = $value;
        return $this;
    }

    public function getIndEmit(): int
    {
        return $this->IndEmit;
    }

    public function comCodigoParticipante(string $value): self
    {
        $this->CodPart = $value;
        return $this;
    }

    public function getCodPart(): string
    {
        return $this->CodPart;
    }

    public function comCodigoModelo(string $value): self
    {
        $this->CodMod = $value;
        return $this;
    }

    public function getCodMod(): string
    {
        return $this->CodMod;
    }

    public function comCodigoSituacao(int $value): self
    {
        $this->CodSit = $value;
        return $this;
    }

    public function getCodSit(): int
    {
        return $this->CodSit;
    }

    public function comSerie(string $value): self
    {
        $this->Ser = $value;
        return $this;
    }

    public function getSer(): string
    {
        return $this->Ser;
    }

    public function comNumeroDocumento(string $value): self
    {
        $this->NumDoc = $value;
        return $this;
    }

    public function getNumDoc(): string
    {
        return $this->NumDoc;
    }

    public function comChaveNfe(string $value): self
    {
        $this->ChvNfe = $value;
        return $this;
    }

    public function getChvNfe(): string
    {
        return $this->ChvNfe;
    }

    public function comDataDocumento(?DateTime $value): self
    {
        $this->DtDoc = $value;
        return $this;
    }

    public function getDtDoc(): ?DateTime
    {
        return $this->DtDoc;
    }

    public function comDataEntradaSaida(?DateTime $value): self
    {
        $this->DtEs = $value;
        return $this;
    }

    public function getDtEs(): ?DateTime
    {
        return $this->DtEs;
    }

    public function comValorDocumento(float|string $value): self
    {
        $newValue = new Decimal($value);
        $this->VlDoc = $newValue;
        return $this;
    }

    public function getVlDoc(): Decimal
    {
        return $this->VlDoc;
    }

    public function comIndicadorPagamento(int $value): self
    {
        $this->IndPgto = $value;
        return $this;
    }

    public function getIndPgto(): int
    {
        return $this->IndPgto;
    }

    public function comValorDesconto(?Decimal $value): self
    {
        $this->VlDesc = $value;
        return $this;
    }

    public function getVlDesc(): ?Decimal
    {
        return $this->VlDesc;
    }

    public function comValorAbatimentoNaoTributado(?Decimal $value): self
    {
        $this->VlAbatNt = $value;
        return $this;
    }

    public function getVlAbatNt(): ?Decimal
    {
        return $this->VlAbatNt;
    }

    public function comValorMercadoria(?Decimal $value): self
    {
        $this->VlMerc = $value;
        return $this;
    }

    public function getVlMerc(): ?Decimal
    {
        return $this->VlMerc;
    }

    public function comIndicadorFrete(int $value): self
    {
        $this->IndFrt = $value;
        return $this;
    }

    public function getIndFrt(): int
    {
        return $this->IndFrt;
    }

    public function comValorFrete(?Decimal $value): self
    {
        $this->VlFrt = $value;
        return $this;
    }

    public function getVlFrt(): ?Decimal
    {
        return $this->VlFrt;
    }

    public function comValorSeguro(?Decimal $value): self
    {
        $this->VlSeg = $value;
        return $this;
    }

    public function getVlSeg(): ?Decimal
    {
        return $this->VlSeg;
    }

    public function comValorOutrasDespesasAcessorias(?Decimal $value): self
    {
        $this->VlOutDa = $value;
        return $this;
    }

    public function getVlOutDa(): ?Decimal
    {
        return $this->VlOutDa;
    }

    public function comValorBaseCalculoIcms(?Decimal $value): self
    {
        $this->VlBcIcms = $value;
        return $this;
    }

    public function getVlBcIcms(): ?Decimal
    {
        return $this->VlBcIcms;
    }

    public function comValorIcms(?Decimal $value): self
    {
        $this->VlIcms = $value;
        return $this;
    }

    public function getVlIcms(): ?Decimal
    {
        return $this->VlIcms;
    }

    public function comValorBaseCalculoIcmsSt(?Decimal $value): self
    {
        $this->VlBcIcmsSt = $value;
        return $this;
    }

    public function getVlBcIcmsSt(): ?Decimal
    {
        return $this->VlBcIcmsSt;
    }

    public function comValorIcmsSt(?Decimal $value): self
    {
        $this->VlIcmsSt = $value;
        return $this;
    }

    public function getVlIcmsSt(): ?Decimal
    {
        return $this->VlIcmsSt;
    }

    public function comValorIpi(?Decimal $value): self
    {
        $this->VlIpi = $value;
        return $this;
    }

    public function getVlIpi(): ?Decimal
    {
        return $this->VlIpi;
    }

    public function comValorPis(?Decimal $value): self
    {
        $this->VlPis = $value;
        return $this;
    }

    public function getVlPis(): ?Decimal
    {
        return $this->VlPis;
    }

    public function comValorCofins(?Decimal $value): self
    {
        $this->VlCofins = $value;
        return $this;
    }

    public function getVlCofins(): ?Decimal
    {
        return $this->VlCofins;
    }

    public function comValorPisSt(?Decimal $value): self
    {
        $this->VlPisSt = $value;
        return $this;
    }

    public function getVlPisSt(): ?Decimal
    {
        return $this->VlPisSt;
    }

    public function comValorCofinsSt(?Decimal $value): self
    {
        $this->VlCofinsSt = $value;
        return $this;
    }

    public function getVlCofinsSt(): ?Decimal
    {
        return $this->VlCofinsSt;
    }

    public function obterTodosRegistrosC170(): array
    {
        return $this->RegistrosC170;
    }

    public function adicionarUmRegistroC170(RegistroC170 $value, string $sequencial): void
    {
        $this->RegistrosC170[$sequencial] = $value;
    }

    public function removerUmRegistroC170(string $sequencial): void
    {
        unset($this->RegistrosC170[$sequencial]);
    }

    /**
     * @param RegistroC170[] $RegistrosC170
     */
    public function adicionarVariosRegistrosC170(array $values): void
    {
        foreach ($values as $value) {
            if ($value instanceof RegistroC170) {
                $this->adicionarUmRegistroC170($value, $value->getNumItem());
            }
        }
    }

    /**
     * @param string[] $values
     */
    public function removerVariosRegistrosC170(array $values): void
    {
        foreach ($values as $value) {
            $this->removerUmRegistroC170($value);
        }
    }

    public function obterTodosRegistrosC190(): array
    {
        return $this->RegistrosC190;
    }

    public function adicionarUmRegistroC190(RegistroC190 $value, string $sequencial): void
    {
        $this->RegistrosC190[$sequencial] = $value;
    }

    public function removerUmRegistroC190(string $sequencial): void
    {
        unset($this->RegistrosC190[$sequencial]);
    }

    /**
     * @param RegistroC190[] $RegistrosC190
     */
    public function adicionarVariosRegistrosC190(array $values): void
    {
        $sequencial = 1;
        foreach ($values as $value) {
            if ($value instanceof RegistroC190) {
                $this->adicionarUmRegistroC190($value, $sequencial);
            }
            $sequencial++;
        }
    }

    /**
     * @param string[] $values
     */
    public function removerVariosRegistrosC190(array $values): void
    {
        foreach ($values as $value) {
            $this->removerUmRegistroC190($value);
        }
    }
}

<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0001 extends RegistroSped
{
    #[SpedCampos(2, "IND_MOV", "N", 1, 0, true, 2)]
    public int $IndMov;

    private ?Registro0002 $registro0002 = null;
    private ?Registro0005 $registro0005 = null;

    /** 
     * @var Registro0015[] 
     */
    private array $Registros0015 = [];

    /** 
     * @var Registro0100[] 
     */
    private array $Registros0100 = [];

    /** 
     * @var Registro0150[] 
     */
    private array $Registros0150 = [];

    /** 
     * @var Registro0190[] 
     */
    private array $Registros0190 = [];

    /** 
     * @var Registro0200[] 
     */
    private array $Registros0200 = [];

    /** 
     * @var Registro0300[] 
     */
    private array $Registros0300 = [];

    /** 
     * @var Registro0400[] 
     */
    private array $Registros0400 = [];

    /** 
     * @var Registro0450[] 
     */
    private array $Registros0450 = [];

    /** 
     * @var Registro0460[] 
     */
    private array $Registros0460 = [];

    /** 
     * @var Registro0500[] 
     */
    private array $Registros0500 = [];

    /** 
     * @var Registro0600[] 
     */
    private array $Registros0600 = [];

    public function __construct(bool $temMovimento = false)
    {
        parent::__construct("0001");
        $this->IndMov = $temMovimento === false ? 1 : 0;
    }

    public function comIndicadorMovimento(int $value): self
    {
        $this->IndMov = $value;
        return $this;
    }

    public function temMovimento(bool $temMovimento): void
    {
        $this->IndMov = $temMovimento === false ? 1 : 0;
    }

    public function getIndMov(): int
    {
        return $this->IndMov;
    }

    public function setIndMov(int $value): void
    {
        $this->IndMov = $value;
    }

    public function verificaSeBlocoPossuiDados(): bool
    {
        return
            !is_null($this->registro0002) ||
            !is_null($this->registro0005) ||
            count($this->Registros0015) > 0 ||
            count($this->Registros0100) > 0 ||
            count($this->Registros0150) > 0 ||
            count($this->Registros0190) > 0 ||
            count($this->Registros0200) > 0 ||
            count($this->Registros0300) > 0 ||
            count($this->Registros0400) > 0 ||
            count($this->Registros0450) > 0 ||
            count($this->Registros0460) > 0 ||
            count($this->Registros0500) > 0 ||
            count($this->Registros0600) > 0;
    }

    public function adicionarUmRegistro0002(Registro0002 $value): void
    {
        $this->registro0002 = $value;

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function adicionarUmRegistro0005(Registro0005 $value): void
    {
        $this->registro0005 = $value;

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function adicionarUmRegistro0150(Registro0150 $value, string $chave): void
    {
        $this->Registros0150[$chave] = $value;

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function removerUmRegistro0150(string $chave): void
    {
        unset($this->Registros0150[$chave]);

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function adicionarUmRegistro0190(Registro0190 $value, string $chave): void
    {
        $this->Registros0190[$chave] = $value;

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function removerUmRegistro0190(string $chave): void
    {
        unset($this->Registros0190[$chave]);

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function adicionarUmRegistro0200(Registro0200 $value, string $chave): void
    {
        $this->Registros0200[$chave] = $value;

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }

    public function removerUmRegistro0200(string $chave): void
    {
        unset($this->Registros0200[$chave]);

        $this->temMovimento($this->verificaSeBlocoPossuiDados());
    }
}

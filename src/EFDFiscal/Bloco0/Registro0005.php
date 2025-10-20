<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0005 extends RegistroSped
{
    #[SpedCampos(2, "FANTASIA", "C", 60, 0, true, 2)]
    public string $Fantasia;

    #[SpedCampos(3, "CEP", "N", 8, 0, true, 2)]
    public string $Cep;

    #[SpedCampos(4, "END", "C", 60, 0, true, 2)]
    public string $End;

    #[SpedCampos(5, "NUM", "C", 10, 0, false, 2)]
    public string $Num;

    #[SpedCampos(6, "COMPL", "C", 60, 0, false, 2)]
    public string $Compl;

    #[SpedCampos(7, "BAIRRO", "C", 60, 0, true, 2)]
    public string $Bairro;

    #[SpedCampos(8, "FONE", "C", 11, 0, false, 2)]
    public string $Fone;

    #[SpedCampos(9, "FAX", "C", 11, 0, false, 2)]
    public string $Fax;

    #[SpedCampos(10, "EMAIL", "C", PHP_INT_MAX, 0, false, 2)]
    public string $Email;

    public function __construct()
    {
        parent::__construct("0005");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->Fantasia ??= '';
        $this->Cep ??= '';
        $this->End ??= '';
        $this->Num ??= '';
        $this->Compl ??= '';
        $this->Bairro ??= '';
        $this->Fone ??= '';
        $this->Fax ??= '';
        $this->Email ??= '';
    }

    public function comNomeFantasia(string $valor): self
    {
        $this->Fantasia = $valor;
        return $this;
    }

    public function getNomeFantasia(): string
    {
        return $this->Fantasia;
    }

    // CEP
    public function comCep(string $valor): self
    {
        $this->Cep = $valor;
        return $this;
    }

    public function getCep(): string
    {
        return $this->Cep;
    }

    // Endereço
    public function comEndereco(string $valor): self
    {
        $this->End = $valor;
        return $this;
    }

    public function getEndereco(): string
    {
        return $this->End;
    }

    // Número
    public function comNumero(string $valor): self
    {
        $this->Num = $valor;
        return $this;
    }

    public function getNumero(): string
    {
        return $this->Num;
    }

    // Complemento
    public function comComplemento(string $valor): self
    {
        $this->Compl = $valor;
        return $this;
    }

    public function getComplemento(): string
    {
        return $this->Compl;
    }

    // Bairro
    public function comBairro(string $valor): self
    {
        $this->Bairro = $valor;
        return $this;
    }

    public function getBairro(): string
    {
        return $this->Bairro;
    }

    // Telefone
    public function comFone(string $valor): self
    {
        $this->Fone = $valor;
        return $this;
    }

    public function getFone(): string
    {
        return $this->Fone;
    }

    // Fax
    public function comFax(string $valor): self
    {
        $this->Fax = $valor;
        return $this;
    }

    public function getFax(): string
    {
        return $this->Fax;
    }

    // E-mail
    public function comEmail(string $valor): self
    {
        $this->Email = $valor;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }
}

<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0100 extends RegistroSped
{
    #[SpedCampos(2, "NOME", "C", 100, 0, true, 2)]
    public string $Nome;

    #[SpedCampos(3, "CPF", "N", 11, 0, true, 2)]
    public string $Cpf;

    #[SpedCampos(4, "CRC", "C", 15, 0, true, 2)]
    public string $Crc;

    #[SpedCampos(5, "CNPJ", "N", 14, 0, false, 2)]
    public string $Cnpj;

    #[SpedCampos(6, "CEP", "N", 8, 0, false, 2)]
    public string $Cep;

    #[SpedCampos(7, "END", "C", 60, 0, false, 2)]
    public string $End;

    #[SpedCampos(8, "NUM", "C", 10, 0, false, 2)]
    public string $Num;

    #[SpedCampos(9, "COMPL", "C", 60, 0, false, 2)]
    public string $Compl;

    #[SpedCampos(10, "BAIRRO", "C", 60, 0, false, 2)]
    public string $Bairro;

    #[SpedCampos(11, "FONE", "C", 11, 0, false, 2)]
    public string $Fone;

    #[SpedCampos(12, "FAX", "C", 11, 0, false, 2)]
    public string $Fax;

    #[SpedCampos(13, "EMAIL", "C", PHP_INT_MAX, 0, true, 2)]
    public string $Email;

    #[SpedCampos(14, "COD_MUN", "N", 7, 0, true, 2)]
    public string $CodMun;

    public function __construct()
    {
        parent::__construct("0100");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->Nome ??= '';
        $this->Cpf ??= '';
        $this->Crc ??= '';
        $this->Cnpj ??= '';
        $this->Cep ??= '';
        $this->End ??= '';
        $this->Num ??= '';
        $this->Compl ??= '';
        $this->Bairro ??= '';
        $this->Fone ??= '';
        $this->Fax ??= '';
        $this->Email ??= '';
        $this->CodMun ??= '';
    }

    public function comNome(string $valor): self
    {
        $this->Nome = $valor;
        return $this;
    }

    public function getNome(): string
    {
        return $this->Nome;
    }

    // CPF
    public function comCpf(string $valor): self
    {
        $this->Cpf = $valor;
        return $this;
    }

    public function getCpf(): string
    {
        return $this->Cpf;
    }

    // CRC
    public function comCrc(string $valor): self
    {
        $this->Crc = $valor;
        return $this;
    }

    public function getCrc(): string
    {
        return $this->Crc;
    }

    // CNPJ
    public function comCnpj(string $valor): self
    {
        $this->Cnpj = $valor;
        return $this;
    }

    public function getCnpj(): string
    {
        return $this->Cnpj;
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

    // Código do Município
    public function comCodigoMunicipio(string $valor): self
    {
        $this->CodMun = $valor;
        return $this;
    }

    public function getCodigoMunicipio(): string
    {
        return $this->CodMun;
    }
}

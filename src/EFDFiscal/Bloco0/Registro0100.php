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
}

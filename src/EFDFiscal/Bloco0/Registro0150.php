<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0150 extends RegistroSped
{
    #[SpedCampos(2, "COD_PART", "C", 60, 0, true, 2)]
    public string $CodPart;

    #[SpedCampos(3, "NOME", "C", 100, 0, true, 2)]
    public string $Nome;

    #[SpedCampos(4, "COD_PAIS", "N", 5, 0, true, 2)]
    public string $CodPais;

    #[SpedCampos(5, "CNPJ", "N", 14, 0, false, 2)]
    public string $Cnpj;

    #[SpedCampos(6, "CPF", "N", 11, 0, false, 2)]
    public string $Cpf;

    #[SpedCampos(7, "IE", "C", 14, 0, false, 2)]
    public string $Ie;

    #[SpedCampos(8, "COD_MUN", "N", 7, 0, false, 2)]
    public string $CodMun;

    #[SpedCampos(9, "SUFRAMA", "C", 9, 0, false, 2)]
    public string $Suframa;

    #[SpedCampos(10, "END", "C", 60, 0, true, 2)]
    public string $End;

    #[SpedCampos(11, "NUM", "C", 10, 0, false, 2)]
    public string $Num;

    #[SpedCampos(12, "COMPL", "C", 60, 0, false, 2)]
    public string $Compl;

    #[SpedCampos(13, "BAIRRO", "C", 60, 0, false, 2)]
    public string $Bairro;

    /** 
     * @var Registro0175[]
     */
    private array $Registros0175 = [];

    public function __construct()
    {
        parent::__construct("0150");

        $this->inicializar();
    }

    private function inicializar(): void
    {
        $this->CodPart ??= '';
        $this->Nome ??= '';
        $this->CodPais ??= '1058';
        $this->Cnpj ??= '';
        $this->Cpf ??= '';
        $this->Ie ??= '';
        $this->CodMun ??= '';
        $this->Suframa ??= '';
        $this->End ??= '';
        $this->Num ??= '';
        $this->Compl ??= '';
        $this->Bairro ??= '';
    }
}

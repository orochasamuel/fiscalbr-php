<?php

namespace FiscalBr\EFDFiscal\Bloco0;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class Registro0000 extends RegistroSped
{
    #[SpedCampos(2, "COD_VER", "N", 3, 0, true, 2)]
    public int $CodVer;

    #[SpedCampos(3, "COD_FIN", "N", 1, 0, true, 2)]
    public int $CodFin;

    #[SpedCampos(4, "DT_INI", "N", 8, 0, true, 2)]
    public DateTime $DtIni;

    #[SpedCampos(5, "DT_FIN", "N", 8, 0, true, 2)]
    public DateTime $DtFin;

    #[SpedCampos(6, "NOME", "C", 100, 0, true, 2)]
    public string $Nome;

    #[SpedCampos(7, "CNPJ", "N", 14, 0, false, 2)]
    public string $Cnpj;

    #[SpedCampos(8, "CPF", "N", 11, 0, false, 2)]
    public string $Cpf;

    #[SpedCampos(9, "UF", "C", 2, 0, true, 2)]
    public string $Uf;

    // IE - Inscrição Estadual
    #[SpedCampos(10, "IE", "C", 14, 0, true, 2)]
    public string $Ie;

    #[SpedCampos(11, "COD_MUN", "N", 7, 0, true, 2)]
    public string $CodMun;

    // IM - Inscrição Municipal
    #[SpedCampos(12, "IM", "C", 14, 0, false, 2)]
    public string $Im;

    #[SpedCampos(13, "SUFRAMA", "C", 9, 0, false, 2)]
    public string $Suframa;

    #[SpedCampos(14, "IND_PERFIL", "LE", 1, 0, true, 2)]
    public string $IndPerfil;

    #[SpedCampos(15, "IND_ATIV", "N", 1, 0, true, 2)]
    public int $IndAtiv;

    // Construtor
    public function __construct(
        int $versao,
        int $finalidade,
        DateTime $dtInicial,
        DateTime $dtFinal,
        string $nome,
        string $cnpj,
        string $uf,
        string $inscricaoEstadual,
        string $codigoMunicipio,
        string $indicadorPerfil,
        int $indicadorAtividade
    )
    {
        parent::__construct("0000"); // chama o construtor da classe pai
        
        // inicializa as propriedades para evitar erro de acesso
        $this->CodVer = $versao; // Versão do leiaute
        $this->CodFin = $finalidade;
        $this->DtIni = $dtInicial;
        $this->DtFin = $dtFinal;
        $this->Nome = $nome;
        $this->Cnpj = $cnpj;
        $this->Cpf = '';
        $this->Uf = $uf;
        $this->Ie = $inscricaoEstadual;
        $this->CodMun = $codigoMunicipio;
        $this->Im = '';
        $this->Suframa = '';
        $this->IndPerfil = $indicadorPerfil;
        $this->IndAtiv = $indicadorAtividade;
    }

    private function inicializar(): void
    {
        $this->CodVer ??= 1; // Versão do leiaute
        $this->CodFin ??= 0;
        $this->DtIni ??= new DateTime('first day of last month');
        $this->DtFin ??= new DateTime('last day of last month');
        $this->Nome ??= '';
        $this->Cnpj ??= '';
        $this->Cpf ??= '';
        $this->Uf ??= '';
        $this->Ie ??= '';
        $this->CodMun ??= '';
        $this->Im ??= '';
        $this->Suframa ??= '';
        $this->IndPerfil ??= 'A';
        $this->IndAtiv ??= 0;
    }

    // Builder para CodVer
    public function comVersaoLayout(int $value): self
    {
        $this->CodVer = $value;
        return $this;
    }

    // Getter para CodVer
    public function getCodVer(): int
    {
        return $this->CodVer;
    }

    // Setter para CodVer
    public function setCodVer(int $value): void
    {
        $this->CodVer = $value;
    }

    public function comFinalidade(int $value): self
    {
        $this->CodFin = $value;
        return $this;
    }

    public function getCodFin(): int
    {
        return $this->CodFin;
    }

    public function setCodFin(int $value): void
    {
        $this->CodFin = $value;
    }

    public function comDataInicial(DateTime $value): self
    {
        $this->DtIni = $value;
        return $this;
    }

    public function comDataFinal(DateTime $value): self
    {
        $this->DtFin = $value;
        return $this;
    }

    public function comNome(string $value): self
    {
        $this->Nome = $value;
        return $this;
    }

    public function comCnpj(string $value): self
    {
        $this->Cnpj = $value;
        return $this;
    }

    public function comCpf(string $value): self
    {
        $this->Cpf = $value;
        return $this;
    }

    public function comUf(string $value): self
    {
        $this->Uf = $value;
        return $this;
    }

    public function comInscricaoEstadual(string $value): self
    {
        $this->Ie = $value;
        return $this;
    }

    public function comCodigoMunicipio(string $value): self
    {
        $this->CodMun = $value;
        return $this;
    }

    public function comInscricaoMunicipal(string $value): self
    {
        $this->Im = $value;
        return $this;
    }

    public function comSuframa(string $value): self
    {
        $this->Suframa = $value;
        return $this;
    }

    public function comIndicadorPerfil(string $value): self
    {
        $this->IndPerfil = $value;
        return $this;
    }

    public function comIndicadorAtividade(int $value): self
    {
        $this->IndAtiv = $value;
        return $this;
    }
}
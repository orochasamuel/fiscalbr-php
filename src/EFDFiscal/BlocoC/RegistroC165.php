<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC165 extends RegistroSped
{
    #[SpedCampos(2, "COD_PART", "C", 60, 0, false, 2)]
    public string $CodPart;


    ///     Placa de identificação do veículo

    #[SpedCampos(3, "VEIC_ID", "C", 7, 0, true, 2)]
    public string $VeicId;


    ///     Código de autorização fornecido pela SEFAZ (combustíveis)

    #[SpedCampos(4, "COD_AUT", "C", 999, 0, false, 2)]
    public string $CodAut;


    ///     Número do passe fiscal

    #[SpedCampos(5, "NR_PASSE", "C", 999, 0, false, 2)]
    public string $NrPasse;


    ///     Hora da saída das mercadorias

    #[SpedCampos(6, "HORA", "H", 6, 0, true, 2)]
    public DateTime $Hora;


    ///     Temperatura em graus Celsius utilizada para quantificação do volume de combustível

    #[SpedCampos(7, "TEMPER", "N", 0, 1, false, 2)]
    public Decimal $Temper;


    ///     Quantidade de volumes transportados

    #[SpedCampos(8, "QTD_VOL", "N", 0, 0, true, 2)]
    public int $QtdVol;


    ///     Peso bruto dos volumes transportados (em Kg)

    #[SpedCampos(9, "PESO_BRT", "N", 0, 2, true, 2)]
    public Decimal $PesoBrt;


    ///     Peso líquido dos volumes transportados (em Kg)

    #[SpedCampos(10, "PESO_LIQ", "N", 0, 2, true, 2)]
    public Decimal $PesoLiq;


    ///     Nome do motorista

    #[SpedCampos(11, "NOM_MOT", "C", 60, 0, false, 2)]
    public string $NomMot;


    ///     CPF do motorista

    #[SpedCampos(12, "CPF", "N", 11, 0, false, 2)]
    public string $Cpf;


    ///     Sigla da UF da placa do veículo

    #[SpedCampos(13, "UF_ID", "C", 2, 0, false, 2)]
    public string $UfId;

    public function __construct()
    {
        parent::__construct("C165");
    }
}

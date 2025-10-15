<?php

namespace FiscalBr\EFDFiscal\BlocoD;

use DateTime;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroD530 extends RegistroSped
{
    #[SpedCampos(2, "IND_SERV", "C", 1, 0, true, 2)]
    public string $IndServ;


    ///     Data em que se iniciou a prestação do serviço

    #[SpedCampos(3, "DT_INI_SERV", "N", 8, 0, false, 2)]
    public DateTime $DtIniServ;


    ///     Data em que se encerrou a prestação do serviço

    #[SpedCampos(4, "DT_FIN_SERV", "N", 8, 0, false, 2)]
    public DateTime $DtFinServ;


    ///     Período fiscal da prestação do serviço (MMAAAA)

    #[SpedCampos(5, "PER_FISCAL", "MA", 6, 0, true, 2)]
    public DateTime $PerFiscal;


    ///     Código de área do terminal faturado

    #[SpedCampos(6, "COD_AREA", "C", PHP_INT_MAX, 0, false, 2)]
    public string $CodArea;


    ///     Identificação do terminal faturado

    #[SpedCampos(7, "TERMINAL", "N", PHP_INT_MAX, 0, false, 2)]
    public string $Terminal;

    public function __construct()
    {
        parent::__construct("D530");
    }
}

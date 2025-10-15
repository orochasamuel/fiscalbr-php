<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC110 extends RegistroSped
{
    #[SpedCampos(2, "COD_INF", "C", 6, 0, true, 2)]
    public string $CodInf;


    ///     Descrição complementar do código de referência

    #[SpedCampos(3, "TXT_COMPL", "C", 999, 0, false, 2)]
    public string $TxtCompl;

    /** 
     * @var RegistroC111[] 
     */
    private array $RegistrosC111 = [];

    /** 
     * @var RegistroC112[] 
     */
    private array $RegistrosC112 = [];

    /** 
     * @var RegistroC113[] 
     */
    private array $RegistrosC113 = [];

    /** 
     * @var RegistroC114[] 
     */
    private array $RegistrosC114 = [];

    /** 
     * @var RegistroC115[] 
     */
    private array $RegistrosC115 = [];

    /** 
     * @var RegistroC116[] 
     */
    private array $RegistrosC116 = [];

    public function __construct()
    {
        parent::__construct("C110");
    }
}

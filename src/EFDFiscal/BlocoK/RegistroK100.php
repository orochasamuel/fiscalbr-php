<?php

namespace FiscalBr\EFDFiscal\BlocoK;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroK100 extends RegistroSped
{
    /// <summary>
    ///     Data inicial a que a apuração se refere
    /// </summary>
    #[SpedCampos(2, "DT_INI", "N", 8, 0, true, 10)]
    public DateTime $DtIni;

    /// <summary>
    ///     Data final a que a apuração se refere
    /// </summary>
    #[SpedCampos(3, "DT_FIN", "N", 8, 0, true, 10)]
    public DateTime $DtFin;

    /** 
     * @var RegistroK200[]
     */
    private array $RegistrosK200 = [];

    /** 
     * @var RegistroK210[]
     */
    private array $RegistrosK210 = [];

    /** 
     * @var RegistroK220[]
     */
    private array $RegistrosK220 = [];

    /** 
     * @var RegistroK230[]
     */
    private array $RegistrosK230 = [];

    /** 
     * @var RegistroK250[]
     */
    private array $RegistrosK250 = [];

    /** 
     * @var RegistroK260[]
     */
    private array $RegistrosK260 = [];

    /** 
     * @var RegistroK270[]
     */
    private array $RegistrosK270 = [];

    /** 
     * @var RegistroK280[]
     */
    private array $RegistrosK280 = [];

    /** 
     * @var RegistroK290[]
     */
    private array $RegistrosK290 = [];

    /** 
     * @var RegistroK300[]
     */
    private array $RegistrosK300 = [];

    public function __construct()
    {
        parent::__construct("K100");
    }
}

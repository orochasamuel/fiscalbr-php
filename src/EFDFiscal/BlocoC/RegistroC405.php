<?php

namespace FiscalBr\EFDFiscal\BlocoC;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroC405 extends RegistroSped
{
    #[SpedCampos(2, "DT_DOC", "N", 8, 0, true, 2)]
    public DateTime $DtDoc;


    ///     Posição do Contador de Reinício de Operação

    #[SpedCampos(3, "CRO", "N", 3, 0, true, 2)]
    public int $Cro;


    ///     Posição do Contador de Redução Z

    #[SpedCampos(4, "CRZ", "N", 6, 0, true, 2)]
    public int $Crz;


    ///     Número do Contador de Ordem de Operação do último documento emitido no dia (Número do COO na Redução Z)

    #[SpedCampos(5, "NUM_COO_FIN", "N", 9, 0, true, 2)]
    public string $NumCoofin;


    ///     Valor do Grante Total Final

    #[SpedCampos(6, "GT_FIN", "N", 0, 2, true, 2)]
    public Decimal $GtFin;


    ///     Valor da venda bruta

    #[SpedCampos(7, "VL_BRT", "N", 0, 2, true, 2)]
    public Decimal $VlBrt;

    private ?RegistroC410 $RegistroC410 = null;

    /** 
     * @var RegistroC420[] 
     */
    private array $RegistrosC420 = [];

    /** 
     * @var RegistroC460[] 
     */
    private array $RegistrosC460 = [];

    /** 
     * @var RegistroC490[] 
     */
    private array $RegistrosC490 = [];

    public function __construct()
    {
        parent::__construct("C405");
    }
}

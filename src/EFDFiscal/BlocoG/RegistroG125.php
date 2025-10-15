<?php

namespace FiscalBr\EFDFiscal\BlocoG;

use DateTime;
use Decimal;
use FiscalBr\Core\Sped\SpedCampos;
use FiscalBr\Core\Sped\RegistroSped;

class RegistroG125 extends RegistroSped
{
    /// <summary>
    ///     Código individualizado do bem ou componente adotado no controle patrimonial do estabelecimento informante
    /// </summary>
    #[SpedCampos(2, "COD_IND_BEM", "C", 60, 0, true, 4)]
    public string $CodIndBem;

    /// <summary>
    ///     Data da movimentação ou do saldo inicial
    /// </summary>
    #[SpedCampos(3, "DT_MOV", "N", 8, 0, true, 4)]
    public DateTime $DtMov;

    /// <summary>
    ///     Tipo de movimentação do bem ou componente.
    /// </summary>
    /// <remarks>
    ///     SI = Saldo inicial de bens imobilizados
    ///     IM = Imobilização de bem individual
    ///     IA = Imobilização em andamento - componente
    ///     CI = Conclusão de imobilização em andamento - bem resultante
    ///     MC = Imobilização oriunda do ativo circulante
    ///     BA = Baixa do bem - fim do período de apropriação
    ///     AT = Alienação ou Transferência
    ///     PE = Perecimento, Extravio ou Deterioração
    ///     OT = Outras Saídas do Imobilizado
    /// </remarks>
    #[SpedCampos(4, "TIPO_MOV", "C", 2, 0, true, 4)]
    public string $TipoMov;

    /// <summary>
    ///     Valor do ICMS da operação própria na entrada do bem ou componente
    /// </summary>
    #[SpedCampos(5, "VL_IMOB_ICMS_OP", "N", 15, 2, false, 4)]
    public Decimal $VlImobIcmsOp;

    /// <summary>
    ///     Valor do ICMS da operação por sub. tributária na entrada do bem ou componente
    /// </summary>
    #[SpedCampos(6, "VL_IMOB_ICMS_ST", "N", 15, 2, false, 4)]
    public Decimal $VlImobIcmsSt;

    /// <summary>
    ///     Valor do ICMS sobre frete do conhecimento de transporte na entrada do bem ou componente
    /// </summary>
    #[SpedCampos(7, "VL_IMOB_ICMS_FRT", "N", 15, 2, false, 4)]
    public Decimal $VlImobIcmsFrt;

    /// <summary>
    ///     Valor do ICMS - diferencial de alíquota, conforme doc. de arrecação, na entrada do bem ou componente
    /// </summary>
    #[SpedCampos(8, "VL_IMOB_ICMS_DIF", "N", 15, 2, false, 4)]
    public Decimal $VlImobIcmsDif;

    /// <summary>
    ///     Número da parcela do ICMS
    /// </summary>
    #[SpedCampos(9, "NUM_PARC", "N", 3, 0, false, 4)]
    public int $NumParc;

    /// <summary>
    ///     Valor da parcela do ICMS passível de apropriação (antes da aplicação da participação percentual do valor das saídas
    ///     tributadas/exportação sobre as saídas totais)
    /// </summary>
    #[SpedCampos(10, "VL_PARC_PASS", "N", 15, 2, false, 4)]
    public Decimal $VlParcPass;

    /** 
     * @var RegistroG126[]
     */
    private array $RegistrosG126 = [];

    /** 
     * @var RegistroG130[]
     */
    private array $RegistrosG130 = [];

    public function __construct()
    {
        parent::__construct("G125");
    }
}

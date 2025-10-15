<?php

namespace FiscalBr\Core\Sped;

use FiscalBr\Core\Sped\Interfaces\RegistroSpedInterface;
use FiscalBr\Core\Sped\SpedCampos;

abstract class RegistroSped implements RegistroSpedInterface
{
    #[SpedCampos(1, "REG", "C", 4, 0, true, 2)]
    protected string $reg;

    /**
     * Inicializa o registro SPED
     *
     * @param string $reg
     */
    public function __construct(string $reg)
    {
        $this->reg = $reg;
    }

    /**
     * Getter equivalente a Reg { get; }
     *
     * @return string
     */
    public function getReg(): string
    {
        return $this->reg;
    }

    /**
     * Obtém dinamicamente o valor de uma propriedade via Reflection.
     *
     * @param RegistroSpedInterface $src
     * @param string $propName
     * @return mixed|null
     */
    public static function getPropValue(RegistroSpedInterface $src, string $propName)
    {
        $reflection = new \ReflectionClass($src);

        if ($reflection->hasProperty($propName)) {
            $property = $reflection->getProperty($propName);
            $property->setAccessible(true);
            $value = $property->getValue($src);

            // Aqui poderia entrar a lógica equivalente a TypeHelpers (enums, etc.)
            /*
             * TODO: Falta verificar se é enum
             */
            return $value;
        }

        return null;
    }

    /**
     * Implementação padrão de validar.
     *
     * @return bool
     */
    public function validar(): bool
    {
        return true;
    }
}
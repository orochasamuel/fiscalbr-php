<?php

namespace FiscalBr\Core\Sped\Interfaces;

interface RegistroSpedInterface
{
    /**
     * Deve retornar o código do registro (equivalente à propriedade Reg do C#).
     *
     * @return string
     */
    public function getReg(): string;

    /**
     * Deve validar o registro (equivalente ao metodo Validar do C#).
     *
     * @return bool
     */
    public function validar(): bool;
}
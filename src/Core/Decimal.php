<?php

/**
 * Classe para representar valores decimais com precisão
 */
class Decimal
{
    private string $value;
    private int $precision;
    private int $scale;

    /**
     * @param string|int|float $value Valor inicial
     * @param int $precision Total de dígitos (padrão: 9)
     * @param int $scale Casas decimais (padrão: 2)
     */
    public function __construct($value, int $precision = 9, int $scale = 2)
    {
        $this->precision = $precision;
        $this->scale = $scale;
        $this->value = $this->normalize($value);
    }

    /**
     * Normaliza o valor para string com precisão correta
     */
    private function normalize($value): string
    {
        // Converte para string se necessário
        if (is_int($value) || is_float($value)) {
            $value = (string) $value;
        }

        // Remove espaços
        $value = trim($value);

        // Usa bcmath se disponível, senão usa number_format
        if (function_exists('bcadd')) {
            $normalized = bcadd($value, '0', $this->scale);
        } else {
            $normalized = number_format((float) $value, $this->scale, '.', '');
        }

        // Valida se não excede a precisão
        $parts = explode('.', $normalized);
        $integerPart = ltrim($parts[0], '-0') ?: '0';

        $maxIntegerDigits = $this->precision - $this->scale;
        if (strlen($integerPart) > $maxIntegerDigits) {
            throw new InvalidArgumentException(
                "Valor excede a precisão permitida. " .
                "Máximo de {$maxIntegerDigits} dígitos inteiros."
            );
        }

        return $normalized;
    }

    /**
     * Retorna o valor como string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Retorna o valor como float (pode perder precisão)
     */
    public function toFloat(): float
    {
        return (float) $this->value;
    }

    /**
     * Retorna a precisão total
     */
    public function getPrecision(): int
    {
        return $this->precision;
    }

    /**
     * Retorna as casas decimais
     */
    public function getScale(): int
    {
        return $this->scale;
    }

    /**
     * Soma dois decimais
     */
    public function add(Decimal $other): Decimal
    {
        $result = function_exists('bcadd')
            ? bcadd($this->value, $other->value, max($this->scale, $other->scale))
            : (string) ($this->toFloat() + $other->toFloat());

        return new Decimal($result, $this->precision, $this->scale);
    }

    /**
     * Subtrai dois decimais
     */
    public function subtract(Decimal $other): Decimal
    {
        $result = function_exists('bcsub')
            ? bcsub($this->value, $other->value, max($this->scale, $other->scale))
            : (string) ($this->toFloat() - $other->toFloat());

        return new Decimal($result, $this->precision, $this->scale);
    }

    /**
     * Multiplica dois decimais
     */
    public function multiply(Decimal $other): Decimal
    {
        $result = function_exists('bcmul')
            ? bcmul($this->value, $other->value, max($this->scale, $other->scale))
            : (string) ($this->toFloat() * $other->toFloat());

        return new Decimal($result, $this->precision, $this->scale);
    }

    /**
     * Divide dois decimais
     */
    public function divide(Decimal $other): Decimal
    {
        if ($other->value === '0' || $other->value === '0.00') {
            throw new DivisionByZeroError("Divisão por zero");
        }

        $result = function_exists('bcdiv')
            ? bcdiv($this->value, $other->value, $this->scale)
            : (string) ($this->toFloat() / $other->toFloat());

        return new Decimal($result, $this->precision, $this->scale);
    }

    /**
     * Compara com outro decimal
     * @return int -1 se menor, 0 se igual, 1 se maior
     */
    public function compare(Decimal $other): int
    {
        if (function_exists('bccomp')) {
            return bccomp($this->value, $other->value, max($this->scale, $other->scale));
        }

        $diff = $this->toFloat() - $other->toFloat();
        if (abs($diff) < PHP_FLOAT_EPSILON) {
            return 0;
        }
        return $diff > 0 ? 1 : -1;
    }

    /**
     * Verifica se é igual a outro decimal
     */
    public function equals(Decimal $other): bool
    {
        return $this->compare($other) === 0;
    }

    /**
     * Formata o valor para exibição
     */
    public function format(string $decimalSeparator = ',', string $thousandsSeparator = '.'): string
    {
        return number_format($this->toFloat(), $this->scale, $decimalSeparator, $thousandsSeparator);
    }

    /**
     * Converte para string
     */
    public function __toString(): string
    {
        return $this->value;
    }

    /**
     * Retorna definição SQL para migration
     */
    public function toSqlDefinition(): string
    {
        return "DECIMAL({$this->precision}, {$this->scale})";
    }

    /**
     * Factory method para criar a partir de string
     */
    public static function fromString(string $value, int $precision = 8, int $scale = 2): self
    {
        return new self($value, $precision, $scale);
    }

    /**
     * Retorna o valor absoluto
     */
    public function abs(): Decimal
    {
        $absValue = function_exists('bcmul')
            ? (strpos($this->value, '-') === 0 ? bcmul($this->value, '-1', $this->scale) : $this->value)
            : (string) abs($this->toFloat());

        return new Decimal($absValue, $this->precision, $this->scale);
    }
}
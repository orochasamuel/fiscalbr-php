<?php

namespace FiscalBr\Core\Sped;

use FiscalBr\Core\Utils\Decimal;
use FiscalBr\Core\Constantes;
use FiscalBr\Core\Sped\SpedCampos;

class EscreverCamposSped
{
    private static function escreverCampo(string $valorEscrever, array $info): string
    {
        [$tipoAttr, $tipoProp, $isRequired, $fieldLength, $decimalPlaces] = $info;

        //$hasValue = !empty($valorEscrever); // PEGADINHA: empty considera "0" como vazio
        $hasValue = $valorEscrever !== null && trim($valorEscrever) !== '';
        $decimalPlacesStr = str_repeat("0", $decimalPlaces);
        //$cultura = new \NumberFormatter("pt_BR", \NumberFormatter::DECIMAL);

        $propertyLength = $hasValue ? strlen($valorEscrever) : 0;

        // Exemplo de tratamento: números tipo código (CST)
        $isCodeOrNumberAndHasLength = $tipoProp === "CodeOrNumber" && ($fieldLength > 0 && $fieldLength <= 4);

        if (!$hasValue && $isRequired) {
            return '';
            //return Constantes::CAMPO_OBRIGATORIO_NAO_INFORMADO;
        }

        if ($isRequired && $tipoProp === "Decimal" && ($valorEscrever === '' || (float)$valorEscrever == 0)) {
            return number_format(Constantes::VALOR_ZERO, $decimalPlaces, ",", "");
        }

        if (($tipoProp === "Decimal" || $tipoProp === "NullableDecimal") && $hasValue) {
            //return number_format((float)$valorEscrever, $decimalPlaces, ",", ""); // Original -> Problema de precisão
            $valorAtualEmDecimal = new Decimal($valorEscrever, $fieldLength, $decimalPlaces);
            // SE NÃO É OBRIGATÓRIO INFORMAR NÃO DEVE RETORNAR VALOR PARA NÃO "SUJAR" O ARQUIVO
            // if (!$isRequired && $valorAtualEmDecimal->equals(new Decimal(0)))
            // {
            //     return '';
            // }
            return $valorAtualEmDecimal->format(",", "");
        }

        if ($tipoProp === "NullableDateTime" && $hasValue) {
            return date("dmY", strtotime($valorEscrever));
        }

        if ($tipoProp === "DateTime" && $hasValue && $tipoAttr === "Hour") {
            return date("His", strtotime($valorEscrever));
        }

        if ($tipoProp === "DateTime" && $hasValue && $tipoAttr === "MonthAndYear") {
            return date("mY", strtotime($valorEscrever));
        }

        if ($tipoProp === "DateTime" && $hasValue) {
            return date("dmY", strtotime($valorEscrever));
        }

        if (($isCodeOrNumberAndHasLength && $hasValue) || ($tipoAttr === "LiteralEnum" && $hasValue)) {
            return str_pad($valorEscrever, $fieldLength, "0", STR_PAD_LEFT);
        }

        if ($propertyLength > 0 && $propertyLength > $fieldLength) {
            return substr($valorEscrever, 0, $fieldLength);
        }

        return $valorEscrever ?? "";
    }

    public static function obterAtributosRegistroAtual($type): ?object
    {
        // via PHP 8 Attributes ou via docblock parsing
        return null; // Placeholder
    }

    private static function obtemListaComPropriedadesOrdenadas(\ReflectionClass $tipoAtual): array
    {
        $properties = $tipoAtual->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED);

        usort($properties, function (\ReflectionProperty $a, \ReflectionProperty $b) {
            $attrsA = $a->getAttributes(SpedCampos::class);
            $attrsB = $b->getAttributes(SpedCampos::class);

            $ordemA = $attrsA ? $attrsA[0]->newInstance()->Ordem : PHP_INT_MAX;
            $ordemB = $attrsB ? $attrsB[0]->newInstance()->Ordem : PHP_INT_MAX;

            return $ordemA <=> $ordemB;
        });

        return $properties;
    }

    public static function escreverCampos(object $source, ?\DateTime $competenciaDeclaracao = null, bool $tryTrim = false): string
    {
        $tipoAtual = new \ReflectionClass($source);
        $registroAtual = substr($tipoAtual->getShortName(), -4);

        // Aqui assumo que você tem atributos como no C# (precisa mapear via PHP 8 Attributes ou via docblock)
        // $spedRegistroAttr = ...;
        //$spedRegistroAttr = obterAtributosRegistroAtual($type);

        if ($competenciaDeclaracao === null) {
            $competenciaDeclaracao = new \DateTime("first day of this month");
        } else {
            $competenciaDeclaracao = new \DateTime($competenciaDeclaracao->format("Y-m-01"));
        }

        $sb = "";

        //$properties = $tipoAtual->getProperties();
        $properties = self::obtemListaComPropriedadesOrdenadas($tipoAtual);
        foreach ($properties as $propriedadeAtual) {

            $sb .= "|";

            // Pegar atributos SPED definidos na propriedade
            // $spedCampoAttr = ...;
            // Para simplificação
            $spedCampoAttr = (object)[
                "IsObrigatorio" => false,
                "Tamanho" => 10,
                "QtdCasas" => 0,
                "Tipo" => "N"
            ];

            $attributes = $propriedadeAtual->getAttributes();

            foreach ($attributes as $atributoAtual) {
                $valorAtributoAtual = $atributoAtual->newInstance();
                $spedCampoAttr->IsObrigatorio = $valorAtributoAtual->getEhObrigatorio();
                $spedCampoAttr->Tamanho = $valorAtributoAtual->getTamanho();
                $spedCampoAttr->QtdCasas = $valorAtributoAtual->getQtdCasas();
                $spedCampoAttr->Tipo = $valorAtributoAtual->getTipo();
            }

            $value = $propriedadeAtual->isInitialized($source) ? $propriedadeAtual->getValue($source) : null;
            if ($value instanceof \DateTime) {
                $value = $value->format("dmY");
            }

            $valueStr = trim((string)$value);

            $campoEscrito = self::escreverCampo($valueStr, [
                self::obtemTipoDoAtributo($spedCampoAttr),
                self::obtemTipoDaPropriedade($propriedadeAtual),
                $spedCampoAttr->IsObrigatorio,
                $spedCampoAttr->Tamanho,
                $spedCampoAttr->QtdCasas
            ]);

            // if ($campoEscrito === Constantes::STRUCTURAL_ERROR) {
            //     throw new \Exception("O campo {$propriedadeAtual->getName()} no Registro {$registroAtual} é obrigatório e não foi informado!");
            // }

            $sb .= $campoEscrito;
        }

        $sb .= "|" . PHP_EOL;

        return $tryTrim ? trim($sb) : $sb;
    }

    private static function obtemTipoDoAtributo($attribute): string
    {
        switch ($attribute->Tipo) {
            case "LE":
                return "LiteralEnum";
            case "C":
            case "N":
                return "CodeOrNumber";
            case "H":
                return "Hour";
            case "MA":
                return "MonthAndYear";
        }
        return "Generic";
    }

    private static function obtemTipoDaPropriedade(\ReflectionProperty $property): string
    {
        $type = (string)$property->getType();
        if ($type === "FiscalBr\Core\Utils\Decimal") return "Decimal";
        if ($type === "?FiscalBr\Core\Utils\Decimal") return "NullableDecimal";
        if ($type === "float") return "Decimal";
        if ($type === "?float") return "NullableDecimal";
        if ($type === "\DateTime") return "DateTime";
        if ($type === "?\DateTime") return "NullableDateTime";
        if ($type === "int" || $type === "?int") return "CodeOrNumber";
        return "Generic";
    }
}

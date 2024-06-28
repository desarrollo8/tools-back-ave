<?php

namespace Aveonline\ToolsAve;

use Carbon\Carbon;

class ToolsAve
{


    #--------------------------╔═════════════════════════════════╗--------------------------#
    #--------------------------║    validar formato de fecha     ║--------------------------#
    #--------------------------╚═════════════════════════════════╝--------------------------#
    public static function formatDateValidate($date)
    {
        $formats = ['d/m/Y H:i:s', 'd/m/Y H:i', 'Y-m-d\TH:i:sP', 'Y-m-d H:i:s'];

        foreach ($formats as $format) {
            try {
                $d = Carbon::createFromFormat($format, $date);
                // Verifica que la fecha formateada coincida con la fecha de entrada
                if ($d && $d->format($format) === $date) {
                    return $format;
                }
            } catch (\Exception $e) {
                // Continúa con el siguiente formato
            }
        }

        // Manejo de ISO 8601
        try {
            $d = Carbon::parse($date);
            if ($d && $d->toIso8601String() === $date) {
                return 'ISO 8601';
            }
        } catch (\Exception $e) {
            // Si no es válido, retorna false
        }

        return false;
    }

    #--------------------------╔═════════════════════════════════╗--------------------------#
    #--------------------------║  quitar caracteres esoecuakes   ║--------------------------#
    #--------------------------╚═════════════════════════════════╝--------------------------#
    public static function specialCharacterClear(String $string)
    {
        if (is_string($string)) {
            $x = preg_replace("/\s+/", "", trim($string));
            $x = str_replace('«', '', $x);
            $x = str_replace('»', '', $x);
            $x = str_replace('±', '', $x);
            $x = str_replace('×', '', $x);
            $x = str_replace('≠', '', $x);
            $x = str_replace('∫', '', $x);
            $x = str_replace('¼', '', $x);
            $x = str_replace(',', '', $x);
            $x = str_replace('€', '', $x);
            $x = str_replace('₣', '', $x);
            $x = str_replace('₧', '', $x);
            $x = str_replace('·', '', $x);
            $x = str_replace('÷', '', $x);
            $x = str_replace('√', '', $x);
            $x = str_replace('‰', '', $x);
            $x = str_replace('½', '', $x);
            $x = str_replace('£', '', $x);
            $x = str_replace('₤', '', $x);
            $x = str_replace('°', '', $x);
            $x = str_replace('á', 'a', $x);
            $x = str_replace('é', 'e', $x);
            $x = str_replace('í', 'i', $x);
            $x = str_replace('ó', 'o', $x);
            $x = str_replace('ú', 'u', $x);
            $x = str_replace('ñ', 'n', $x);
            $x = str_replace('Á', 'A', $x);
            $x = str_replace('É', 'E', $x);
            $x = str_replace('Í', 'I', $x);
            $x = str_replace('Ó', 'O', $x);
            $x = str_replace('Ú', 'U', $x);
            $x = str_replace('Ñ', 'N', $x);
            $x = str_replace('¨', '', $x);
            $x = str_replace('’', '', $x);
            $x = str_replace('ñ', 'n', $x);
            $x = str_replace('Ñ', 'N', $x);
            $x = str_replace('À', 'A', $x);
            $x = str_replace('Á', 'A', $x);
            $x = str_replace('Â', 'A', $x);
            $x = str_replace('Ã', 'A', $x);
            $x = str_replace('Ä', 'A', $x);
            $x = str_replace('Å', 'A', $x);
            $x = str_replace('Æ', 'A', $x);
            $x = str_replace('Ç', 'C', $x);
            $x = str_replace('È', 'E', $x);
            $x = str_replace('É', 'E', $x);
            $x = str_replace('Ê', 'E', $x);
            $x = str_replace('Œ', 'E', $x);
            $x = str_replace('Ë', 'E', $x);
            $x = str_replace('Ì', 'I', $x);
            $x = str_replace('Í', 'I', $x);
            $x = str_replace('Î', 'I', $x);
            $x = str_replace('Ï', 'I', $x);
            $x = str_replace('Ð', 'D', $x);
            $x = str_replace('Ñ', 'N', $x);
            $x = str_replace('Ò', 'O', $x);
            $x = str_replace('Ó', 'O', $x);
            $x = str_replace('Ô', 'O', $x);
            $x = str_replace('Õ', 'O', $x);
            $x = str_replace('Ö', 'O', $x);
            $x = str_replace('Ø', 'O', $x);
            $x = str_replace('Ù', 'U', $x);
            $x = str_replace('Ú', 'U', $x);
            $x = str_replace('Û', 'U', $x);
            $x = str_replace('Ü', 'U', $x);
            $x = str_replace('Ý', 'Y', $x);
            $x = str_replace('Þ', '', $x);
            $x = str_replace('ß', '', $x);
            $x = str_replace('à', 'a', $x);
            $x = str_replace('á', 'a', $x);
            $x = str_replace('â', 'a', $x);
            $x = str_replace('ã', 'a', $x);
            $x = str_replace('ä', 'a', $x);
            $x = str_replace('å', 'a', $x);
            $x = str_replace('æ', 'a', $x);
            $x = str_replace('ç', 'c', $x);
            $x = str_replace('è', 'e', $x);
            $x = str_replace('é', 'e', $x);
            $x = str_replace('ê', 'e', $x);
            $x = str_replace('ë', 'e', $x);
            $x = str_replace('ì', 'i', $x);
            $x = str_replace('í', 'i', $x);
            $x = str_replace('î', 'i', $x);
            $x = str_replace('ï', 'i', $x);
            $x = str_replace('ð', 'd', $x);
            $x = str_replace('ñ', 'n', $x);
            $x = str_replace('ò', 'o', $x);
            $x = str_replace('ó', 'o', $x);
            $x = str_replace('ô', 'o', $x);
            $x = str_replace('õ', 'o', $x);
            $x = str_replace('ö', 'o', $x);
            $x = str_replace('ø', 'o', $x);
            $x = str_replace('ù', 'u', $x);
            $x = str_replace('ú', 'u', $x);
            $x = str_replace('û', 'u', $x);
            $x = str_replace('ü', 'u', $x);
            $x = str_replace('ý', 'y', $x);
            $x = str_replace('þ', '', $x);
            $x = str_replace('ÿ', 'y', $x);
            $x = str_replace('Ć', 'C', $x);
            $x = str_replace('Č', 'C', $x);
            $x = str_replace('Đ', 'D', $x);
            $x = str_replace('Š', 'S', $x);
            $x = str_replace('Ž', 'S', $x);
            $x = str_replace('ć', 'c', $x);
            $x = str_replace('č', 'c', $x);
            $x = str_replace('đ', 'd', $x);
            $x = str_replace('š', 's', $x);
            $x = str_replace('ž', 'ž', $x);
            $x = str_replace('Α', 'A', $x);
            $x = str_replace('Β', 'B', $x);
            $x = str_replace('Γ', '', $x);
            $x = str_replace('Δ', '', $x);
            $x = str_replace('Ε', 'E', $x);
            $x = str_replace('Ζ', 'Z', $x);
            $x = str_replace('Η', 'H', $x);
            $x = str_replace('Θ', 'O', $x);
            $x = str_replace('Κ', 'K', $x);
            $x = str_replace('Μ', 'M', $x);
            $x = str_replace('Ν', 'N', $x);
            $x = str_replace('Ξ', '', $x);
            $x = str_replace('Ο', 'O', $x);
            $x = str_replace('Π', '', $x);
            $x = str_replace('Ρ', 'P', $x);
            $x = str_replace('Σ', '', $x);
            $x = str_replace('Τ', 'T', $x);
            $x = str_replace('Υ', 'Y', $x);
            $x = str_replace('Φ', '', $x);
            $x = str_replace('Χ', 'X', $x);
            $x = str_replace('Ψ', '', $x);
            $x = str_replace('Ω', '', $x);
            $x = str_replace('α', 'a', $x);
            $x = str_replace('β', '', $x);
            $x = str_replace('γ', 'y', $x);
            $x = str_replace('δ', '', $x);
            $x = str_replace('ε', 'e', $x);
            $x = str_replace('ζ', '', $x);
            $x = str_replace('η', '', $x);
            $x = str_replace('θ', '', $x);
            $x = str_replace('ι', '', $x);
            $x = str_replace('λ', '', $x);
            $x = str_replace('μ', '', $x);
            $x = str_replace('ν', 'v', $x);
            $x = str_replace('ξ', '', $x);
            $x = str_replace('ο', 'o', $x);
            $x = str_replace('π', '', $x);
            $x = str_replace('ρ', 'p', $x);
            $x = str_replace('σ', 'o', $x);
            $x = str_replace('τ', 't', $x);
            $x = str_replace('υ', 'u', $x);
            $x = str_replace('φ', '', $x);
            $x = str_replace('χ', '', $x);
            $x = str_replace('ψ', '', $x);
            $x = str_replace('ω', 'w', $x);
            $x = str_replace(' ', '', $x);
            $x = preg_replace("/[!\"\/#%&.`~:;_<>=*¡'”+\-?^\{\}()|[\]\\]]/", "", trim($x));
            return $x;
        }
        return $string;
    }
}

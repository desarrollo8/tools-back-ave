<?php

namespace Aveonline\ToolsAve;

use Carbon\Carbon;

class ToolsAve
{


    #--------------------------╔═════════════════════════════════╗--------------------------#
    #--------------------------║    validar formato de fecha     ║--------------------------#
    #--------------------------╚═════════════════════════════════╝--------------------------#
    public static function formatDateValidate($format)
    {
        $formats = ['d/m/Y H:i:s', 'd/m/Y H:i', 'Y-m-d\TH:i:sP'];

        foreach ($formats as $format) {
            try {
                $d = Carbon::createFromFormat($format, $format);
                // Verifica que la fecha formateada coincida con la fecha de entrada
                if ($d && $d->format($format) === $format) {
                    return $format;
                }
            } catch (\Exception $e) {
                // Continúa con el siguiente formato
            }
        }

        return false;
    }
}

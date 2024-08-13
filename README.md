# ToolsAve de (LARAVEL)

## Características

- Todos los tools disponibles para meter logica y funciones dinamicas.

# Instalación

## _Instalación a través de Composer_

```console
composer require aveonline/toolsave
```

## Metodos

| LLAMADO METODOS CLASE            | DESCRIPCIÓN METODO                                                                                                                                                                                                                              |
| -------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `ToolsAve::formatDateValidate('2024-07-05T11:12:55-05:00')` | le ingresas cualquier fecha en cualquier formato y te retornara un formato por defecto(util cuando no puedes controlar el formato de fecha que viene de base de datos) retorna `Y-m-d\\TH:i:sP`, si hay un formato invalido retornara un `false` los formatos aceptados son: `d/m/Y H:i:s`,`d/m/Y H:i`,`Y-m-d\TH:i:sP`,`Y-m-d H:i:s`, `d M Y`,`d F Y`,`F d, Y`,`l, d F Y`,`l, F d, Y`,`D, d M Y H:i:s O`,`l, d-M-y H:i:s T`,`l, d-M-Y H:i:s T`, `Y-m-d\TH:i:sP`, `Y-m-d H:i:s.u`, `Y/m/d h:i:s a`, `Y/m/d H:i:s` |
| `ToolsAve::specialCharacterClear('ho»la')` | limpiar caracteres especiales retorna `hola`. |

## Mantenedores

- Aveonline, (desarrollo8@aveonline.co)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

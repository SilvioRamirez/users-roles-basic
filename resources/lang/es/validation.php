<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => ":attribute debe ser aceptado.",
    "active_url"       => ":attribute no es una URL válida.",
    "after"            => ":attribute debe ser una fecha posterior a :date.",
    "alpha"            => ":attribute solo debe contener letras.",
    "alpha_dash"       => ":attribute solo debe contener letras, números y guiones.",
    "alpha_num"        => ":attribute solo debe contener letras y números.",
    "array"            => ":attribute debe ser un conjunto.",
    "before"           => ":attribute debe ser una fecha anterior a :date.",
    "between"          => [
        "numeric" => ":attribute tiene que estar entre :min - :max.",
        "file"    => ":attribute debe pesar entre :min - :max kilobytes.",
        "string"  => ":attribute tiene que tener entre :min - :max caracteres.",
        "array"   => ":attribute tiene que tener entre :min - :max ítems.",
    ],
    "boolean"          => "El campo :attribute debe tener un valor verdadero o falso.",
    "confirmed"        => "La confirmación de :attribute no coincide.",
    "date"             => ":attribute no es una fecha válida.",
    "date_format"      => ":attribute no corresponde al formato :format.",
    "different"        => ":attribute y :other deben ser diferentes.",
    "digits"           => ":attribute debe tener :digits dígitos.",
    "digits_between"   => ":attribute debe tener entre :min y :max dígitos.",
    "email"            => ":attribute no es un correo válido",
    "exists"           => ":attribute es inválido.",
    "filled"           => "El campo :attribute es obligatorio.",
    "image"            => ":attribute debe ser una imagen.",
    "in"               => ":attribute es inválido.",
    "integer"          => ":attribute debe ser un número entero.",
    "ip"               => ":attribute debe ser una dirección IP válida.",
    "max"              => [
        "numeric" => ":attribute no debe ser mayor a :max.",
        "file"    => ":attribute no debe ser mayor que :max kilobytes.",
        "string"  => ":attribute no debe ser mayor que :max caracteres.",
        "array"   => ":attribute no debe tener más de :max elementos.",
    ],
    "mimes"            => ":attribute debe ser un archivo con formato: :values.",
    "min"              => [
        "numeric" => "El tamaño de :attribute debe ser de al menos :min.",
        "file"    => "El tamaño de :attribute debe ser de al menos :min kilobytes.",
        "string"  => ":attribute debe contener al menos :min caracteres.",
        "array"   => ":attribute debe tener al menos :min elementos.",
    ],
    "not_in"           => ":attribute es inválido.",
    "numeric"          => ":attribute debe ser numérico.",
    "regex"            => "El formato de :attribute es inválido.",
    "required"         => "El campo :attribute es obligatorio.",
    "required_if"      => "El campo :attribute es obligatorio cuando :other es :value.",
    "required_with"    => "El campo :attribute es obligatorio cuando :values está presente.",
    "required_with_all" => "El campo :attribute es obligatorio cuando :values está presente.",
    "required_without" => "El campo :attribute es obligatorio cuando :values no está presente.",
    "required_without_all" => "El campo :attribute es obligatorio cuando ninguno de :values estén presentes.",
    "same"             => ":attribute y :other deben coincidir.",
    "size"             => [
        "numeric" => "El tamaño de :attribute debe ser :size.",
        "file"    => "El tamaño de :attribute debe ser :size kilobytes.",
        "string"  => ":attribute debe contener :size caracteres.",
        "array"   => ":attribute debe contener :size elementos.",
    ],
    "string"           => "El :attribute debe ser texto.",
    "timezone"         => "El :attribute debe ser una zona válida.",
    "unique"           => ":attribute ya ha sido registrado.",
    "url"              => "El formato :attribute es inválido.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'   => 'Nombres y Apellidos',
        'email' => 'Correo',
        'password' => 'Contraseña',
        'nombres'   => 'Nombres',
        'apellidos' => 'Apellidos',
        'cedula'    => 'Cedula',
        'f_nacimiento'    => 'Fecha de Nacimiento',
        'edad'    => 'Edad',
        'c_comunal'    => 'Consejo Comunal',
        'telefono_1'    => 'Telefono Celular',
        'telefono_2'    => 'Telefono Fijo',
        'direccion'    => 'Dirección',
        'municipio'    => 'Municipio',
        'parroquia'    => 'Parroquia',
        'facebook'    => 'Facebook',
        'instagram'    => 'Instagram',
        'twitter'    => 'Twitter',
        'whatsapp'    => 'Whatsapp',
        'pin'    => 'Pin',
        'snapchat'    => 'Snapchat',
        'responsabilidad'    => 'Responsabilidad',
        'estructura'        => 'Estructura JPSUV',
        'centro_votacion'  => 'Centro de Votación',
        'vocero_comunal'    => 'Vinculado al Consejo Comunal',
        'vocero_comunal_descripcion'    => 'Responsabilidad en el Consejo Comunal',
        'beneficiario_mision'           => 'Beneficiario de alguna Misión',
        'beneficiario_mision_descripcion' => 'Misiones por las que ha sido beneficiad@',
        'embarazo'                      => 'Embarazo',
        'vivienda'                      => 'Vivienda',
        'vivienda_tipo'                 => 'Tipo de Vivienda',
        'deporte'                       => 'Deporte',
        'actividad_extra'               => 'Actividad extra',
        'enfermedad'                    => 'Enfermedad',
        'campismo'                      => 'Campismo',
        'cultura'                       => 'Cultura',
        'cultura_descripcion'           => 'Actividades Culturales',
        'grado_instruccion'             => 'Grado de Instrucción',
        'liceo_universidad'             => 'Liceo o Universidad',
        'carrera'                       => 'Carrera o Mención',
        'trabajo'                       => 'Trabajo',
        'lugar_trabajo'                 => 'Lugar de Trabajo',
        'votantes_centro'               => 'Votantes Centro',
        'votantes_centro_descripcion'   => 'Numero de Votantes del Centro',
        'conoce_centro'                 => 'Conoce el Centro de Votación',
        'conoce_centro_descripcion'     => 'Indique que vinculaciones tiene su centro de votación',
        'responsables_ubch'             => 'Conoce a los resonsables de la UBCH',
        'responsables_ubch_descripcion' => 'Indique cuales son los responsables de UBCH',
        'entrenamiento_especial'        => 'Le motiva recibir entrenamientoe special',
        'entrenamiento_especial_descripcion' => 'Observación - Entrenamiento especial',
        'leer'                          => 'Leer',
        'leer_descripcion'              => 'Observación - Leer',
        'conoce_lineas'                 => 'Conoce las 5 Lienas del PSUV',
        'conoce_estructura'             => 'Conoce la estructura de la JPSUV',
        'recuerda_intervencion'         => 'Recuerda la última intervención del Comandante Chávez',
        'banco'                         => 'Nombre del Banco',
        'cuenta'                        => 'Número de Cuenta',
        'cuenta_tipo'                   => 'Tipo de Cuenta',
        'imagen'                        => 'Fotografia',

    ],

];

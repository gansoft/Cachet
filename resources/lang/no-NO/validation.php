<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'   => ':attribute må være godkjent.',
    'active_url' => ':attribute er ikke en gyldig URL.',
    'after'      => ':attribute må være en dato etter :date.',
    'alpha'      => ':attribute kan kun inneholde bokstaver.',
    'alpha_dash' => ':attribute kan kun inneholde bokstaver, tall og bindestreker.',
    'alpha_num'  => ':attribute kan bare inneholde bokstaver og tall.',
    'array'      => ':attribute må være en matrise.',
    'before'     => ':attribute må være en dato før :date.',
    'between'    => [
        'numeric' => ':attribute må være en dato før :date.',
        'file'    => ':attribute må være mellom :min og :max.',
        'string'  => ':attribute må være mellom :min og :max kilobytes.',
        'array'   => ':attribute må være mellom :min og :max elementer.',
    ],
    'boolean'        => ':attribute må være mellom :min og :max elementer.',
    'confirmed'      => ':attribute feltet må være true eller false.',
    'date'           => ':attribute bekreftelsen samsvarer ikke.',
    'date_format'    => ':attribute er ikke en gyldig dato.',
    'different'      => ':attribute passer ikke med formatet :format.',
    'digits'         => ':attribute og :other må være forskjellige.',
    'digits_between' => ':attribute må være :digits sifre.',
    'email'          => ':attribute må være mellom :min og :max sifre.',
    'exists'         => ':attribute må være en gyldig e-postadresse.',
    'distinct'       => ':attribute har en duplikat verdi.',
    'filled'         => ':attribute formatet er ugyldig.',
    'image'          => ':attribute må være et bilde.',
    'in'             => ':attribute må være et bilde.',
    'in_array'       => ':attribute feltet finnes ikke i :other.',
    'integer'        => 'Valgte :attribute er ugyldig.',
    'ip'             => ':attribute må være et heltall.',
    'json'           => ':attribute må være en gyldig JSON streng.',
    'max'            => [
        'numeric' => ':attribute må være en gyldig IP-adresse.',
        'file'    => ':attribute kan ikke være større enn :max.',
        'string'  => ':attribute kan ikke være større enn :max kilobyte.',
        'array'   => ':attribute kan ikke har mer enn :max elementer.',
    ],
    'mimes' => ':attribute kan ikke har mer enn :max elementer.',
    'min'   => [
        'numeric' => ':attribute må være en fil av typen: :values.',
        'file'    => ':attribute må være minst :min kilobyte.',
        'string'  => ':attribute må være minst :min kilobyte.',
        'array'   => ':attribute må ha minst :min tegn.',
    ],
    'not_in'               => ':attribute må ha minst :min elementer.',
    'numeric'              => 'Valgte :attribute er ugyldig.',
    'present'              => ':attribute må finnes.',
    'regex'                => ':attribute må være et nummer.',
    'required'             => ':attribute formatet er ugyldig.',
    'required_if'          => 'Feltet :attribute er påkrevd.',
    'required_unless'      => 'Feltet :attribute kreves med mindre :other er :values.',
    'required_with'        => ':attribute er påkrevd når :other er :value.',
    'required_with_all'    => ':attribute feltet kreves når :values er til stede.',
    'required_without'     => ':attribute feltet kreves når :values er til stede.',
    'required_without_all' => ':attribute er påkrevd når :values ikke er tilstede.',
    'same'                 => ':attribute kreves når ingen av :values er tilstede.',
    'size'                 => [
        'numeric' => ':attribute og :other må være like.',
        'file'    => ':attribute må være :size kilobyte.',
        'string'  => ':attribute må være :size tegn.',
        'array'   => ':attribute må være :size tegn.',
    ],
    'string'   => ':attribute må inneholde :size elementer.',
    'timezone' => ':attribute må være en gyldig tidssone.',
    'unique'   => ':attribute er allerede tatt.',
    'url'      => ':attribute formatet er ugyldig.',

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
            'rule-name' => 'tilpasset melding',
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

    'attributes' => [],

];

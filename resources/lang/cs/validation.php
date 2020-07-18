<?php

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

    'accepted' => ':attribute musí být akceptován.',
    'active_url' => ':attribute není validní URL.',
    'after' => ':attribute musí být datum po :date.',
    'after_or_equal' => ':attribute musí být datum po nebo musí být roven :date.',
    'alpha' => ':attribute může obshaovat znaky.',
    'alpha_dash' => ':attribute může obsahovat pouze písmena, čísla, čárky a podtržítko.',
    'alpha_num' => ':attribute může obsahovat pouze písmena a čísla.',
    'array' => ':attribute musí být pole.',
    'before' => ':attribute musí být datum před :date.',
    'before_or_equal' => ':attribute musí být datum před nebo roven :date.',
    'between' => [
        'numeric' => ':attribute musí být od :min a :max.',
        'file' => ':attribute musí být mezi :min a :max kilobytů.',
        'string' => ':attribute musí být mezi :min a :max znaky.',
        'array' => ':attribute musí být mezi :min a :max položek.',
    ],
    'boolean' => ':attribute musí být true nebo false.',
    'confirmed' => ':attribute povrzení nesouhlasí.',
    'date' => ':attribute není validní datum.',
    'date_equals' => ':attribute musí být datum rovno :date.',
    'date_format' => ':attribute nesedí do formátu :format.',
    'different' => ':attribute a :other musí být rozdílný.',
    'digits' => ' :attribute musí být :digits číslice.',
    'digits_between' => ':attribute musí bý mezi :min a :max číslicemi.',
    'dimensions' => ':attribute má invalidní velikost obrázku.',
    'distinct' => ':attribute pole má dupliciitní hodnotu.',
    'email' => ':attribute musí být validní emailová addresa.',
    'ends_with' => ':attribute musí končit na jednu z hodnot: :values',
    'exists' => 'Vybraný atribut :attribute existuje.',
    'file' => ':attribute musí být soubor.',
    'filled' => 'Pole :attribute musí být vyplněno.',
    'gt' => [
        'numeric' => ':attribute musí být větší než :value.',
        'file' => ':attribute musí být větší než :value kilobytů.',
        'string' => ':attribute musí být větší než :value znaků.',
        'array' => ':attribute musí mít více než :value položek.',
    ],
    'gte' => [
        'numeric' => ':attribute musí být větší nebo rovno :value.',
        'file' => ':attribute musí být větší nebo rovno :value kilobytů.',
        'string' => ':attribute musí být větší nebo rovno :value znaků.',
        'array' => ':attribute musí být :value položek nebo více.',
    ],
    'image' => ':attribute musí být obrázek.',
    'in' => 'Vybraný :attribute je nevalidní.',
    'in_array' => ':attribute pole neexistuje v :other.',
    'integer' => ':attribute musí být celé číslo.',
    'ip' => ':attribute musí být validní IP addresa.',
    'ipv4' => ':attribute musí být validní IPv4 addresa.',
    'ipv6' => ':attribute musí být validní IPv6 addresa.',
    'json' => ':attribute musí být validní řetězec JSON.',
    'lt' => [
        'numeric' => ':attribute musí být menší než :value.',
        'file' => ':attribute musí být větší než :value kilobytů.',
        'string' => ':attribute musí být menší než :value znaků.',
        'array' => ':attribute musí mít méně než :value položek.',
    ],
    'lte' => [
        'numeric' => ':attribute musí být menší nebo roven :value.',
        'file' => ':attribute musí být menší nebo roven :value kilobytů.',
        'string' => ':attribute musí být menší nebo rovno :value znaků.',
        'array' => ':attribute nesmí mít více než :value položek.',
    ],
    'max' => [
        'numeric' => ':attribute nemůže být větší než :max.',
        'file' => ':attribute nemůže mít více než :max kilobytů.',
        'string' => ':attribute nemůže být větší než :max znaků.',
        'array' => ':attribute nemůže mít více než :max položek.',
    ],
    'mimes' => ':attribute musí být soubor typu: :values.',
    'mimetypes' => ':attribute musí bát soubor typu: :values.',
    'min' => [
        'numeric' => ':attribute musí být alespoň :min.',
        'file' => ':attribute musí být alespoň :min kilobytů.',
        'string' => ':attribute musí být alespoň :min znaků.',
        'array' => ':attribute musí mít alespoň :min položek.',
    ],
    'not_in' => 'Vybraný atribut :attribute je nevalidní.',
    'not_regex' => ':attribute formát je nevalidní.',
    'numeric' => ':attribute musí být číslo.',
    'present' => ':attribute musí být přítomno.',
    'regex' => 'Formát :attribute nevalidní.',
    'required' => ':attribute pole je vyžadováno.',
    'required_if' => 'Pole :attribute je vyžadováno, pokud :other je :value.',
    'required_unless' => ':attribute pole je vyžadován, pokud :other je v :values.',
    'required_with' => 'Pole :attribute je vyžadováno, jestliže :values je přítmno.',
    'required_with_all' => 'Pole :attribute field je vyžadováno, když :values nejsou přítomna.',
    'required_without' => 'Pole :attribute je vyžadováno, jestliže :values není přítomno.',
    'required_without_all' => ':attribute pole je vyžadován, pokud žádná z hodnot :values nneí přítomna.',
    'same' => ':attribute a :other musí souhlasit.',
    'size' => [
        'numeric' => ':attribute musí být velikosti :size.',
        'file' => ':attribute musí být :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => ':attribute musí začínat hodnotou: :values',
    'string' => ':attribute musí být řetězec.',
    'timezone' => ':attribute musí být validní časové pásmo.',
    'unique' => ':attribute bylo již zabráno.',
    'uploaded' => ':attribute se nenahrál.',
    'url' => ':attribute formát je invalidní.',
    'uuid' => ':attribute musí být validní UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

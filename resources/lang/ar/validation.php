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

    'accepted' => ' :attribute لابد من الموافقه على.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => ':attribute لا تتماشى مع التأكيد ',
    'date' => ' :attribute ليس تاريخ صحيح.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => ' :attribute يجب ان تكون :digits ارقام.',
    'digits_between' => ' :attribute يجب ان تكون بين :min , :max رقم.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => ' :attribute يجب ان يكون بريد الكترونى صحيح.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'قيمة :attribute المختارة غير صحيح.',
    'file' => ' :attribute يجب ان يكون ملف.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => ' :attribute يجب ان تكون اكبر من :value.',
        'file' => ' :attribute يجب ان تكون اكبر من :value كيلو بايت.',
        'string' => ' :attribute يجب ان تكون اكبر من :value حرف.',
        'array' => ' :attribute يجب ان تختار :value عنصر.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ' :attribute يجب ان تكون صورة.',
    'in' => 'قيمة :attribute المختارة غير صحيحة.',
    'in_array' => ' :attribute يجب ان تكون فى  :other.',
    'integer' => ' :attribute يجب ان يكون رقم.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ' :attribute يجب الا تكون اكبر من :max.',
        'file' => ' :attribute يجب الا تكون اكبر من :max كيلو بايت.',
        'string' => ' :attribute يجب الا تكون اكبر من :max حرف.',
        'array' => ' :attribute may not have more than :max items.',
    ],
    'mimes' => ' :attribute يجب ان تكون من نوع type: :values.',
    'mimetypes' => ' :attribute يجب ان تكون من نوع type: :values.',
    'min' => [
        'numeric' => ' :attribute يجب ان تكون على الاقل :min.',
        'file' => ' :attribute must be at least :min kilobytes.',
        'string' => ' :attribute يجب ان تكون على الاقل :min حرف.',
        'array' => ' :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ' :attribute يجب ان تكون رقم.',
    'password' => ' كلمة السر غير صحيحة.',
    'present' => 'يجب ادخال :attribute .',
    'regex' => ' :attribute خطأ فى الادخال.',
    'required' => ' :attribute مطلوب.',
    'required_if' => ' :attribute مطلوب ',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => ' :attribute يجب ان يكون حروف و ارقام.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'قيمة :attribute مختارة من قبل.',
    'uploaded' => ' خطأ فى رفع :attribute .',
    'url' => ' :attribute ليس عنوان رابط صحيح.',
    'uuid' => 'The :attribute must be a valid UUID.',

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

    'attributes' => [
      'g-recaptcha-response' => 'تحقق جوجل',
      'user_id' => 'المستخدم',
      'woner_name' => 'صاحب الحساب',
      'bank_title' => 'البنك',
      'account_no' => 'رقم الحساب',
      'ibn' => 'رقم الحساب الدولى',
      'period' => 'المدة',
      'mobile' => 'الجوال',
      'password' => 'كلمة السر',
    ],

];

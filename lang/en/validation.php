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

    'accepted' => 'The :attribute field must be accepted.',
    'accepted_if' => 'The :attribute field must be accepted when :other is :value.',
    'active_url' => 'The :attribute field must be a valid URL.',
    'after' => 'The :attribute field must be a date after :date.',
    'after_or_equal' => 'The :attribute field must be a date after or equal to :date.',
    'alpha' => 'The :attribute field must only contain letters.',
    'alpha_dash' => 'The :attribute field must only contain letters, numbers, dashes, and underscores.',
    'alpha_num' => 'The :attribute field must only contain letters and numbers.',
    'any_of' => 'The :attribute field is invalid.',
    'array' => 'The :attribute field must be an array.',
    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'The :attribute field must be a date before :date.',
    'before_or_equal' => 'The :attribute field must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attribute field must have between :min and :max items.',
        'file' => 'The :attribute field must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute field must be between :min and :max.',
        'string' => 'The :attribute field must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'can' => 'The :attribute field contains an unauthorized value.',
    'confirmed' => 'The :attribute field confirmation does not match.',
    'contains' => 'The :attribute field is missing a required value.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute field must be a valid date.',
    'date_equals' => 'The :attribute field must be a date equal to :date.',
    'date_format' => 'The :attribute field must match the format :format.',
    'decimal' => 'The :attribute field must have :decimal decimal places.',
    'declined' => 'The :attribute field must be declined.',
    'declined_if' => 'The :attribute field must be declined when :other is :value.',
    'different' => 'The :attribute field and :other must be different.',
    'digits' => 'The :attribute field must be :digits digits.',
    'digits_between' => 'The :attribute field must be between :min and :max digits.',
    'dimensions' => 'The :attribute field has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute field must have more than :value items.',
        'file' => 'The :attribute field must be greater than :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than :value.',
        'string' => 'The :attribute field must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute field must have :value items or more.',
        'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than or equal to :value.',
        'string' => 'The :attribute field must be greater than or equal to :value characters.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image' => 'The :attribute field must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field must exist in :other.',
    'integer' => 'The :attribute field must be an integer.',
    'ip' => 'The :attribute field must be a valid IP address.',
    'ipv4' => 'The :attribute field must be a valid IPv4 address.',
    'ipv6' => 'The :attribute field must be a valid IPv6 address.',
    'json' => 'The :attribute field must be a valid JSON string.',
    'list' => 'The :attribute field must be a list.',
    'lowercase' => 'The :attribute field must be lowercase.',
    'lt' => [
        'array' => 'The :attribute field must have less than :value items.',
        'file' => 'The :attribute field must be less than :value kilobytes.',
        'numeric' => 'The :attribute field must be less than :value.',
        'string' => 'The :attribute field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute field must not have more than :value items.',
        'file' => 'The :attribute field must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be less than or equal to :value.',
        'string' => 'The :attribute field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute field must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute field must not have more than :max items.',
        'file' => 'The :attribute field must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute field must not be greater than :max.',
        'string' => 'The :attribute field must not be greater than :max characters.',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',
    'mimes' => 'The :attribute field must be a file of type: :values.',
    'mimetypes' => 'The :attribute field must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute field must have at least :min items.',
        'file' => 'The :attribute field must be at least :min kilobytes.',
        'numeric' => 'The :attribute field must be at least :min.',
        'string' => 'The :attribute field must be at least :min characters.',
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute field must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute field format is invalid.',
    'numeric' => 'The :attribute field must be a number.',
    'password' => [
        'letters' => 'The :attribute field must contain at least one letter.',
        'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute field must contain at least one number.',
        'symbols' => 'The :attribute field must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_if_accepted' => 'The :attribute field is prohibited when :other is accepted.',
    'prohibited_if_declined' => 'The :attribute field is prohibited when :other is declined.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string' => 'The :attribute field must be a string.',
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'The :attribute field must be a valid URL.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'The :attribute field must be a valid UUID.',
    'error'=>'not allow to access',
     
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

        'price' => [
        'decimal' => 'The minimum price must be a decimal with 2 digits',
        'required' => 'price must be between min,max price',
    ],
        'visit_type_en' => [
        'string' => 'The visit type in English should string',
        'max' => 'The visit type in English should not be greater than 255 char',
         'unique'=>'english of visit type is exists',
    ],
    'visit_type_ar' => [
        'string' => 'The visit type in Arabic should  string',
        'max' => 'The visit type in Arabic should not be greater than 255 char',
         'unique'=>'arabic of visit type is exists',
    ],
    'min_price' => [
        'decimal' => 'The minimum price must be a decimal with 2 digits',
        'min' => 'The minimum price must be at least 0',
    ],
    'max_price' => [
        'decimal' => 'The maximum price should a decimal with 2 digits',
        'gt' => 'The maximum price should be greater than the minimum price',
    ],
       
       'image_ar' => [
        'unique' => 'The Arabic image is used',
        'mimes' => 'The Arabic image must be  png, jpg, jpeg',
        'max' => 'The Arabic image should not greater than 2Mega',
    ],
    'image_en' => [
        'unique' => 'The English image is used',
        'mimes' => 'The English image must be  png, jpg, jpeg',
        'max' => 'The English image may should not greater than 2Mega',
    ],
          'description_en' => [
        'required' => 'this arabic description is required ',
        'unique' => 'this arabic description is exists',
    ],
    'description_ar' => [
        'required' => 'this english description is required ',
        'unique' => 'this english description is exists',
    ],

        'surgery_type'=>[
             'required'=>'type of surgery is required',
             'string'=>'surgery must be string',
        ],
        'user_id'=>[
           'required'=>'user is required',
            'exists'=>'user must be exists',
        ],

        'jobtitle'=>[
            'required'=>'jobtitle is required',
            'max' => 'The name must not exceed 255 characters',
            'unique' => 'jobtitle is exists',
        ],

        'organization'=>[
            'required'=>'organization is required',
            'max' => 'The name must not exceed 255 characters',
              'unique' => 'organization is exists',
        ],
        'current'=>[
             'required'=>'current is required',
             'boolean'=>'current must be 0 or 1',
        ],

        'name_en' => [
            'unique' => 'The English name already exists',
            'required'=>'this field is required',
        ],
        'name_ar' => [
            'unique' => 'The Arabic name already exists',
             'required'=>'this field is required',
        ],
      
    'name' => [
        'min' => 'The name must be at least 3 characters.',
        'max' => 'The name must not exceed 255 characters.',
    ],
    'password' => [
        'min' => 'The password must be at least 6 characters.',
    ],
    'email' => [
        'email' => 'Please enter a valid email address.',
        'unique' => 'This email address is already in use.',
    ],
    'new_password' => [
        'min' => 'The new password must be at least 6 characters.',
        'different' => 'The new password must be different from the current password.',
        'confirmed' => 'The new password confirmation does not match.',
    ],
    'current_password' => [
        'min' => 'The current password must be at least 6 characters.',
    ],
    'image' => [
        'mimes' => 'The image must be a file of type: png, jpg, jpeg.',
        'max' => 'The image size must not exceed 2 MB.',
    ],
    'mobile' => [
        'regex' => 'Invalid phone number. It must start with 010, 011, 012, or 015 and be 11 digits long.',
        'unique' => 'This phone number is already in use.',
    ],
    'department_id' => [
        'required' => 'The department is required when the user type is doctor.',
        'exists' => 'The selected department does not exist.',
    ],
    'user_type' => [
        'in' => 'Invalid user type.',
    ],
    'usage' => [
        'in' => 'The usage type must be either "verify" or "forget".',
    ],
    'old_password' => [
        'min' => 'The old password must be at least 6 characters.',
    ],
    'otp' => [
        'digits' => 'The verification code must be exactly 4 digits.',
    ],
    'uuid' => [
        'uuid' => 'The UUID format is invalid.',
        'exists' => 'The UUID for this user does not exist.',
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
        'email' ,
        'name' ,
        'password' ,
        'mobile',
        'image' ,
        'department_id',
        'user_type',
        'usage',
        'current_password',
        'otp',
       'old_password',
       'new_password' ,
       'uuid',
       'name_en',
       'name_ar',
       'jobtitle',
        'organization',
        'current',
        'surgery_type',
        'user_id',
        'current',
        'description_en',
        'description_ar',
         'image_en',
         'image_ar', 
         'visit_type_ar',
         'visit_type_en',
        'min_price',
        'max_price',
        'price',
    ],

];

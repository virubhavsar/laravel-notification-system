<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\NumberParseException;

class ValidPhoneNumber implements Rule
{
    protected $phoneUtil;

    public function __construct()
    {
        $this->phoneUtil = PhoneNumberUtil::getInstance();
    }

    public function passes($attribute, $value)
    {
        try {
            $phoneNumber = $this->phoneUtil->parse($value, 'IND');
            return $this->phoneUtil->isValidNumber($phoneNumber);
        } catch (NumberParseException $e) {
            return false;
        }
    }

    public function message()
    {
        return 'The :attribute is not a valid phone number.';
    }
}



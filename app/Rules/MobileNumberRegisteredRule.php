<?php

namespace App\Rules;

use App\Models\RegisteredMobile;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MobileNumberRegisteredRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $numberRegistered = RegisteredMobile::firstWhere("mobile_number", $value);

        if($numberRegistered === null){
            $fail("Please subscribe to our service.");
        }
    }
}

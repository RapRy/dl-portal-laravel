<?php

namespace App\Rules;

use App\Models\RegisteredMobile;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MobileNumberActivatedRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $numberRegistered = RegisteredMobile::firstWhere("mobile_number", $value);

        if($numberRegistered && $numberRegistered['activated'] === 0){
            $fail("Please activate your number.");
        }
    }
}

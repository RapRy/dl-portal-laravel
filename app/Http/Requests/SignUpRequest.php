<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MobileNumberActivatedRule;
use App\Rules\MobileNumberRegisteredRule;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
                'last_name' => 'required',
                'email' => ['required', 'unique:users'],
                'mobile_number' => ['required', 'unique:users', new MobileNumberRegisteredRule, new MobileNumberActivatedRule],
                'password' => 'required',
                'confirm_password' => ['required', "same:password"]
        ];
    }

    public function messages()
    {
        return [
            'mobile_number.required' => "Them mobile number field is required.",
                'mobile_number.unique' =>$this->get("mobile_number")." is already in use.",
                'email.unique' => $this->get("email")." is already in use"
        ];
    }
}

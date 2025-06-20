<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerRegistrationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'email'        => 'required|email|unique:users|max:255',
            'phone'        => 'required|max:255',
            'password'     => 'required|string|min:6|confirmed',
            'country'    => 'required|integer',
            'state'    => 'nullable|integer',
            'city'    => 'nullable|integer',
            'currency'    => 'required|integer',
            'language'    => 'required|integer',
            'business_name'    => 'required|string|max:255',
            'business_description'    => 'nullable|string|max:5000',
            'type_of_registration'    => 'nullable|string|max:255',
            'br_number'    => 'nullable|string|max:255',
            'company_website'    => 'nullable|string|max:255',
            'br_registration_date'    => 'nullable|date',
            'number_of_employees'    => 'nullable|integer',
            'business_address'      => 'required',
            'product_category'      => 'required',
            'manufacturing_capacity'      => 'required'
        ];

        return $rules;
    }
}

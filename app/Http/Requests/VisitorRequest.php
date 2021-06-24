<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VisitorRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        
        return [
            'first_name'                => 'required|string|max:100',
            'last_name'                 => 'required|string|max:100',
            'email'                     => 'nullable|string|max:100',
            'phone'                     => 'nullable|string|max:20',
            'employee_id'               => 'required|numeric',
            'gender'                    => 'required|numeric',
            'company_name'              => 'nullable|max:100',
            'national_identification_no'=> 'nullable|max:100',
            'purpose'                   => 'required|max:191',
            'address'                   => 'nullable|max:191',
            'image'                     => 'nullable|image|mimes:jpeg,png,jpg|max:5098',
        ];
    }
}

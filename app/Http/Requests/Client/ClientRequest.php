<?php

namespace app\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'company' =>['required','string'],
            'vat' =>['required'],
            'address'=>['required']
        ];
    }

    public function messages(): array
    {
        return [
            'company.required' => 'Company is required',
            'vat.required' => 'Vat is required',
            'address.required' => 'Address is required',
        ];
    }
}

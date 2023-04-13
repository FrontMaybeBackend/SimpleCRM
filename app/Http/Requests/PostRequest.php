<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required',
            'description'=> 'required',
            'deadline'=> 'required',
            'assigned_user'=> 'required',
            'assigned_client'=> 'required',
            'company' =>'required',
            'vat' =>'required',
            'address'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'description.required' => 'Message is required',
            'deadline.required' => 'Date is required',
            'deadline.date_format' => 'Deadline must be in date format',
            'assigned_user.required' => 'User is required',
            'assigned_client.required' => 'Client is required',
            'company.required' => 'Company is required',
            'vat.required' => 'Vat is required',
            'address.required' => 'Address is required',
        ];
    }
}

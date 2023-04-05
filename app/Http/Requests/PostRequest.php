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
            'title' => 'required|max:255',
            'description'=> 'required||max:500',
            'deadline'=> 'required|date_format|',
            'assigned_user'=> 'required',
            'assigned_client'=> 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'A title is required',
            'description.required' => 'A message is required',
            'deadline.required' => 'A title is required',
            'assigned_user.required' => 'A title is required',
            'assigned_client.required' => 'A title is required',
        ];
    }
}

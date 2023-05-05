<?php

namespace app\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class ProjectCreateRequest extends FormRequest
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
            'title' =>['required','string','max:60'],
            'description' =>['required','string','max:500'],
            'deadline'=>['required'],
            'assigned_user'=>['required'],
            'assigned_client'=>['required'],
            'client_id'=>['nullable'],
            'user_id'=>['nullable'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Company is required',
            'description.required' => 'Vat is required',
            'deadline.required' => 'Address is required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'email' => 'nullable|email',
            'number' => 'nullable|string',
            'formation_id' => 'nullable|integer|exists:formations,id',
            'groups.*' => 'integer|exists:groups,id',
        ];
    }
}

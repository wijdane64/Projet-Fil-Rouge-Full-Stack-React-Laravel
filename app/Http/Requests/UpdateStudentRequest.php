<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateStudentRequest extends FormRequest
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
            'firstname' => 'sometimes|string|max:50',
            'lastname' => 'sometimes|string|max:50',
            'email' => 'sometimes|email|unique:students,email,' . $this->route('student')->id,
            'date_of_birth' => 'sometimes|date',
            'phone' => 'sometimes|nullable|string|max:20',
            'address' => 'sometimes|nullable|string|max:100',
            'level_id' => 'sometimes|exists:levels,id',
            'parent_name' => 'sometimes|string|max:50',
            'parent_phone' => 'sometimes|string|max:20',
            'parent_email' => 'sometimes|email|max:50',
        ];
    }
}

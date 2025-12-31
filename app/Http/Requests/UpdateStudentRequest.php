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
            'first_name' => 'sometimes|required|string|max:50',
            'last_name' => 'sometimes|required|string|max:50',
            'email' => 'sometimes|required|email|unique:students,email,' . $this->route('student')->id,
            'date_of_birth' => 'sometimes|required|date',
            'phone' => 'sometimes|nullable|string|max:20',
            'address' => 'sometimes|nullable|string|max:100',
            'level_id' => 'sometimes|required|exists:levels,id',
            'parent_name' => 'sometimes|nullable|string|max:50',
            'parent_contact' => 'sometimes|nullable|string|max:20',
            'parent_email' => 'sometimes|nullable|email|max:50',
        ];
    }
}

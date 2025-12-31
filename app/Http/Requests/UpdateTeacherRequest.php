<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateTeacherRequest extends FormRequest
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
            'email' => 'sometimes|required|email|unique:teachers,email,' . $this->route('teacher')->id . '|max:50',
            'phone' => 'sometimes|nullable|string|max:20',
            'birthdate' => 'sometimes|nullable|date',
            'address' => 'sometimes|nullable|string|max:100',
            'subject_id' => 'sometimes|required|exists:subjects,id',
            'specialization' => 'sometimes|nullable|string|max:100',
            
        ];
    }
}

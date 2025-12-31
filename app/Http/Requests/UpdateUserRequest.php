<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
class UpdateUserRequest extends FormRequest

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
            'name' => 'sometimes|required|string|max:50',
            'email' => 'sometimes|required|email|unique:users,email,' . $this->route('user')->id . '|max:50',
            'email_verified_at' => 'sometimes|nullable|date',
            'password' => 'sometimes|required|string|min:8|confirmed',
            'role' => ['sometimes', 'required', Rule::in(['admin', 'teacher', 'student'])],
        ];
    }
}

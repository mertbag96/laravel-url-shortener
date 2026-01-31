<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:500']
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            // name
            'name.required' => 'Name field is required',
            'name.string' => 'Name field must be a valid text',
            'name.max' => 'Name field is too long',

            // email
            'email.required' => 'Email field is required',
            'email.email' => 'Email field must be a valid email',
            'email.max' => 'Email field is too long',

            // message
            'message.required' => 'Message field is required',
            'message.string' => 'Message field must be a valid text',
            'message.max' => 'Message field is too long',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstName' => ['nullable', 'string'],
            'lastName' => ['nullable', 'string'],
            'phoneN0' => ['nullable', 'string', 'unique:admins,phoneN0'],
            'email' => ['nullable', 'email', 'unique:admins,email'],
            'password' => ['nullable', 'password'],
            'deleted_at' => ['nullable'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenantUpdateRequest extends FormRequest
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
            'house_id' => ['nullable', 'integer', 'exists:houses,id'],
            'flat_id' => ['nullable', 'integer', 'exists:flats,id'],
            'user_id' => ['nullable', 'integer', 'exists:users,id'],
        ];
    }
}

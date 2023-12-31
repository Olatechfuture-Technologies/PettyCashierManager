<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WalletUpdateRequest extends FormRequest
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
            'balance' => ['nullable', 'numeric', 'between:-999999.99,999999.99'],
        ];
    }
}

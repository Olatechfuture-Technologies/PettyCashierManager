<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseCashFlowUpdateRequest extends FormRequest
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
            'wallet_id' => ['nullable', 'integer', 'exists:wallets,id'],
            'amount' => ['nullable', 'numeric', 'between:-999999.99,999999.99'],
            'loggedBy' => ['nullable'],
        ];
    }
}

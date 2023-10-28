<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseUpdateRequest extends FormRequest
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
            'refCode' => ['nullable', 'string', 'unique:purchases,refCode'],
            'house_id' => ['nullable', 'integer', 'exists:houses,id'],
            'flat_id' => ['nullable', 'integer', 'exists:flats,id'],
            'FromWallet' => ['nullable'],
            'amount' => ['nullable', 'numeric'],
            'invoiceUpload' => ['nullable', 'string'],
            'paymentMode' => ['nullable', 'in:Card,Cash,OutPocket'],
            'status' => ['nullable', 'string'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenantCashFlowStoreRequest extends FormRequest
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
            'tenant_id' => ['nullable', 'integer', 'exists:tenants,id'],
            'tenant_wallet_id' => ['nullable', 'integer', 'exists:tenant_wallets,id'],
            'amount' => ['nullable', 'numeric', 'between:-999999.99,999999.99'],
            'loggedBy' => ['nullable'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DutyPostStoreRequest extends FormRequest
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
            'duty_id' => ['nullable', 'integer', 'exists:duties,id'],
            'staff_id' => ['nullable', 'integer', 'exists:staff,id'],
            'flat_id' => ['nullable', 'integer', 'exists:flats,id'],
            'tenants' => ['nullable'],
            'status' => ['nullable', 'string'],

        ];
    }
}

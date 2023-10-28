<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseUpdateRequest extends FormRequest
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
            'houseNo' => ['nullable', 'string', 'unique:houses,houseNo'],
            'name' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'zipCode' => ['nullable'],
            'suitNo' => ['nullable', 'string'],
            'deleted_at' => ['nullable'],
        ];
    }
}

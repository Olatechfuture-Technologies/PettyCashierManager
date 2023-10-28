<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseStoreRequest extends FormRequest
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
            'name' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'zipCode' => ['nullable'],
            'suitNo' => ['nullable', 'string'],
            'houseNo' => ['nullable', 'string', 'unique:houses,id'],
            'deleted_at' => ['nullable'],
        ];
    }
}

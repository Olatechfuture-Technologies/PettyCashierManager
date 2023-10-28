<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlatUpdateRequest extends FormRequest
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
            'flatN0' => ['nullable', 'string'],
            'house_id' => ['nullable', 'integer', 'exists:houses,id'],
            'floorName' => ['nullable', 'string'],
            'noOfPersons' => ['nullable', 'integer'],
        ];
    }
}

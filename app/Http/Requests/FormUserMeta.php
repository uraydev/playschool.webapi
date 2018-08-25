<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormUserMeta extends AbstractFormRequest
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
            'user__id' => 'required',
            'key' => 'required',
            'value' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'user__id.required' => 'Необходимо указать ID пользователя',
            'key.required' => 'Необходимо указать ключ метаданных',
            'value.required' => 'Необходимо указать значение метаданных'
        ];
    }
}

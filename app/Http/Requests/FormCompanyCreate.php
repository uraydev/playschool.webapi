<?php

namespace App\Http\Requests;

class FormCompanyCreate extends AbstractFormRequest
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
            'uid' => 'required',
            'name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'uid.required' => 'Необходимо указать UID компании',
            'name.required' => 'Необходимо указать наименование компании',
        ];
    }
}

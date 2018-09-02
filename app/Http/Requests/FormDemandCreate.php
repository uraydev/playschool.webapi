<?php

namespace App\Http\Requests;

class FormDemandCreate extends AbstractFormRequest
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
            'company_uid' => 'required',
            'demand' => 'required|array|min:2',
            'demand.name' => 'required',
            'demand.description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'company_uid.required' => 'Необходимо указать UID компании',
            'demand.required' => 'Необходимо указать объект требования',
            'demand.name.required' => 'Необходимо указать поле name',
            'demand.description.required' => 'Необходимо указать поле description',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreSimpleDefRequest extends Request
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
            'name' => 'required|min:3|max:30',
            'description' => 'required|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Bitte geben Sie einen Namen ein.',
            'name.min' => 'Ein Name muss mindestens :min Zeichen haben.',
            'name.max' => 'Ein Name darf höchstens :max Zeichen haben.',
            'description.max' => 'Eine Beschreibung darf höchstens :max Zeichen haben.',
            'description.required' => 'Bitte geben Sie eine Beschreibung ein.',
        ];
    }
}

<?php

namespace interactiontigerspace\Http\Requests;

use interactiontigerspace\Http\Requests\Request;

class Page1Request extends Request
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
            'name' => 'required|min:4|max:30',
            'from' => 'required|min:4|max:30',
            'quote' => 'required|min:4|max:300',
        ];
    }
}

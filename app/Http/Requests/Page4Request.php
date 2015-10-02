<?php

namespace interactiontigerspace\Http\Requests;

use interactiontigerspace\Http\Requests\Request;

class Page4Request extends Request
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
            'name' => 'required|min:4|max:20',
            'bio' => 'required|min:10|max:300'
        ];
    }
}

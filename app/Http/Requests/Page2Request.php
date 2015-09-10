<?php

namespace interactiontigerspace\Http\Requests;

use interactiontigerspace\Http\Requests\Request;

class Page2Request extends Request {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|min:3|max:6',
            'city' => 'required|max:15'
        ];
    }
}

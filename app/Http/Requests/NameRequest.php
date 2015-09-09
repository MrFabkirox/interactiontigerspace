<?php

namespace interactiontigerspace\Http\Requests;

//create with the command: php artisan make:request NameRequest

use interactiontigerspace\Http\Requests\Request;

class NameRequest extends Request {
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
            'name' => 'required|min:3|max:6'
        ];
    }
}

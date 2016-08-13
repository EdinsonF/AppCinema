<?php

namespace Cinema\Http\Requests;

use Cinema\Http\Requests\Request;

class UserUpdateRequest extends Request
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
            'first_name'=> 'required||max:20',
            'last_name' => 'required||max:20',
            'email'     => 'required|email',
        ];
    }
}

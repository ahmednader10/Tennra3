<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
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
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'email' => 'required|unique:connection.users|email_address',
            'password' => 'required|between:5,9'
        ];
    }
}

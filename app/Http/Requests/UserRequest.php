<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|string|min:3|max:50',
            'email' => 'required|email:rfc',
            'password' => 'required|confirmed|regex:/^\p{Lu}\p{L}{8,50}$/',
            'account_number' => 'unique'
        ];
    }
}

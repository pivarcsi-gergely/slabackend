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
            'username' => 'required|string|min:3|max:50|unique:users',
            'email' => 'required|email:rfc|unique:users',
            'password' => ['required', 'confirmed', 'regex:/^([[:upper:]]|\w){8,50}$/u']
        ];
    }
}

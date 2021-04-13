<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreteUser extends APIRequest
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
            //
            'name'=>'request|string',
            'email'=>'request|string|email|unique:users',
            'password'=>'request|string|email|cinfirmed'
        ];
    }
}
<?php

namespace App\Http\Requests\Students;

use App\Http\Requests\Request;

class PostPersonalInfoRequest extends Request
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
            'title' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required|digits:2'
        ];
    }

    /*public function messages()
    {
        return [
            'dob.required' => 'The date of birth field is required'
        ];
    }*/
}

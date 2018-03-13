<?php

namespace App\Http\Requests\Students;

use App\Http\Requests\Request;

class PostFinishRegRequest extends Request
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
            'is_completed' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'is_completed.required' => 'Please agree to terms and conditions'
        ];
    }
}

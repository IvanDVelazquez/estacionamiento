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
            'name' => 'required|max:32|min:1',
            'email' => 'required|max:64|min:5',
            'password' => 'required|max:16|min:1',
            'passwordR' => 'required|max:16|min:1|same:password',
        ];
    }
}

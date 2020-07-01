<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UsersUpdateFormRequest extends FormRequest
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
            'name' => 'required|min:2|max:190',
            'lastname' => 'required|min:2|max:190',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|digits:10',
            'adress' => 'required',
            'postcode' => 'required',
            'city' => 'required|min:2|max:190',
            'comment' => 'required',
        ];
    }
}

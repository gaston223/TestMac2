<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UsersFormRequest extends FormRequest
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
            'password'=> 'required',
            'postcode' => 'required',
            'city' => 'required|min:2|max:190',
            'comment' => 'required',
        ];

    }

    public function messages()
    {
        return [
            'email.required' => "L'email est requis",
            'name.required' => "Le prénom est requis",
            'password.required' => "Le mot de passe est requis",
            'lastname.required' => "Le nom est requis",
            'phone.required' => "Le numéro de téléphone est requis",
            'adress.required' => "L'adresse est requis",
            'city.required' => "La ville est requise",
            'comment.required' => "Le commentaire est requis",
            'postcode.required' => "Le code postal est requis",

            'email.email' => "L'email n'est pas valide",
            'phone.digits' => "Le numéro doit être francais !"

        ];
    }
}

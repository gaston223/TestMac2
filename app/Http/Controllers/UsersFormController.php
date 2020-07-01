<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UsersFormRequest;
use App\Http\Requests\Users\UsersUpdateFormRequest;
use App\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UsersFormController extends Controller
{
    /**
     * @return Factory|View
     */
    public function home()
    {
        return view('users.home');
    }


    /**
     * @param UsersFormRequest $request
     * @param User $user
     * @return RedirectResponse|Redirector
     */
    /*public function store(UsersFormRequest $request, User $user)
    {
        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'password'=>Hash::make($request->password),
            'city' => $request->city,
            'postcode' => $request->postcode,
            'comment' => $request->comment,
        ]);

        session()->flash('success', 'Votre soucription a été enregistrée avec succès !');

        return redirect(route('users_edit_info'));

    }*/

    /**
     * @param User $user
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function edit(User $user)
    {
        //Si l'utilisateur connecté est différent du propriétaire du formulaire
        //Il ne pourra pas modifier les infos personnelles
        if (Auth::user()==$user){
            return view('users.edit', compact('user'));
        }
        else {
            throw new AuthorizationException();
        }
    }

    /**
     * @param UsersUpdateFormRequest $request
     * @return RedirectResponse|Redirector
     */
    public function update(UsersUpdateFormRequest $request)
    {
        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'city' => $request->city,
            'postcode' => $request->postcode,
            'comment' => $request->comment,
        ]);

        session()->flash('success', 'Vos infos ont été modifié avec succès !');

        return redirect(route('home'));
    }
}

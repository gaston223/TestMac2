<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UsersFormRequest;
use App\Http\Requests\Users\UsersUpdateFormRequest;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
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
    public function store(UsersFormRequest $request, User $user)
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

    }


    /**
     * @param User $user
     * @return Factory|View
     */
    public function edit(User $user)
    {
        return view('users.update')->with('user', $user);
    }

    /**
     * @param UsersUpdateFormRequest $request
     * @param User $userForm
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

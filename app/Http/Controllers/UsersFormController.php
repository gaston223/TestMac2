<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UsersFormRequest;
use App\Http\Requests\Users\UsersUpdateFormRequest;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UsersFormController extends Controller
{
    /**
     * Page d'accueil
     * @return Factory|View
     */
    public function home()
    {
        return view('users.home');
    }

    /**
     * Page d'accueil
     * @return Factory|View
     */
    public function livewireHome()
    {
        return view('users.livewire-home');
    }

    /**
     * Affiche le Récapitulatif des données personnelles
     * @return Factory|View
     */
    public function show()
    {
        return view('users.show')->with('user', auth()->user());
    }

    /**
     * Formulaire de modification
     * @param User $user
     * @return Factory|View
     */
    public function edit(User $user)
    {
        //Si l'utilisateur connecté est différent du propriétaire du formulaire
        //Il ne pourra pas modifier les infos personnelles
        if (Auth::user()==$user){
            return view('users.edit', compact('user'));
        }
        else {
            abort(403);
        }
    }

    /**
     * Mise a jour des données personnelles
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

        return redirect(route('users_home'));
    }
}

<?php

namespace App\Http\Controllers;


use App\Http\Requests\Users\UsersUpdateFormRequest;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Récupèrer tous les abonnés avec le role writer
     * @return Factory|View
     */
    public function home()
    {
        $user = DB::table('users')->where('role', 'writer')->get();
        return view('admin.home')->with('users', $user);
    }


    /**
     * Détail du profil
     * @param User $user
     * @return Factory|View
     */
    public function showProfile(User $user)
    {
        return view('admin.show', compact('user'));
    }

    /**
     * Formulaire d'édition du profil
     * @param User $user
     * @return Factory|View
     */
    public function editProfile(User $user)
    {
        return view('admin.edit', compact('user'));
    }

    /**
     * Mise a jour des données personnelles de l'abonné
     * @param UsersUpdateFormRequest $request
     * @param User $user
     * @return RedirectResponse|Redirector
     */
    public function update(UsersUpdateFormRequest $request, User $user)
    {
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

        return redirect(route('admin_home'));
    }

}

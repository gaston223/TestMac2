@extends('layouts.app')

@section('content')
    <h1>Interface Admin - Liste des Abonnés</h1>


    <table class="table table-striped table-hover mt-5">
        <thead class="table-secondary">
        <tr>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{route('admin_show', $user->id)}}">Voir détails</a>
                            <a class="btn btn-primary btn-sm" href="{{route('admin_edit', $user->id)}}">Editer</a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
@endsection

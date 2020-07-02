@extends('layouts.app')

@section('content')


    <div class="card border-success mt-3 mb-3" style="max-width: 80rem;">
        <div class="card-header"><h1 class="display-4">Informations</h1></div>
        <div class="card-body">
            <h4 class="card-title">Profil de l'abonné :</h4>
            <hr>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h5>Prénom : {{ $user->name }}</h5>
                    <h5>Nom : {{ $user->lastname }}</h5>
                    <h5>Email : {{ $user->email }}</h5>
                    <h5>Téléphone : {{ $user->phone }}</h5>
                    <a class="btn btn-primary btn-lg mt-4" href="{{route('admin_edit',$user->id)}}" role="button">Modifier les informations de l'abonné</a>
                </div>
                <div class="col-md-6">
                    <h5>Adresse : {{ $user->adress }}</h5>
                    <h5>Code Postal : {{ $user->postcode }}</h5>
                    <h5>Ville : {{ $user->city }}</h5>
                    <h5>Commentaire : {!! $user->comment !!}</h5>
                </div>

            </div>
        </div>
    </div>
@endsection

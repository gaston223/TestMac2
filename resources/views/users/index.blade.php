@extends('layouts.app')

@section('content')


    <div class="card border-success mt-3 mb-3" style="max-width: 80rem;">
        <div class="card-header"><h1 class="display-4">Bienvenue dans le programme Mac2 !</h1></div>
        <div class="card-body">
            <h4 class="card-title">Votre Profil :</h4>
            <hr>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h5>Prénom : {{ Auth::user()->name }}</h5>
                    <h5>Nom : {{ Auth::user()->lastname }}</h5>
                    <h5>Email : {{ Auth::user()->email }}</h5>
                    <h5>Téléphone : {{ Auth::user()->phone }}</h5>
                    <a class="btn btn-primary btn-lg mt-4" href="{{route('users_edit_info',Auth::user()->id)}}" role="button">Je modifie mes informations</a>
                </div>
                <div class="col-md-6">
                    <h5>Adresse : {{ Auth::user()->adress }}</h5>
                    <h5>Code Postal : {{ Auth::user()->postcode }}</h5>
                    <h5>Ville : {{ Auth::user()->city }}</h5>
                    <h5>Commentaire : {!! Auth::user()->comment !!}</h5>
                </div>

            </div>
        </div>
    </div>
@endsection

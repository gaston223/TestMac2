@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <h1 class="display-4">Bienvenue chez MAC 2</h1>

        <hr class="my-4">
        <h5 class="mb-5">Pour accéder au formulaire d'inscription au programme Mac 2 cliquez sur le bouton ci-dessous :  </h5>

        @guest()
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{route('register')}}" role="button">Je m'abonne au programme Mac 2</a>
        </p>
        @endguest

        @auth()
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{route('users_index')}}" role="button">J'accède à mes informations</a>
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{route('users_edit_info',Auth::user()->id)}}" role="button">Je modifie mes informations</a>
            </p>
        @endauth
    </div>



@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection

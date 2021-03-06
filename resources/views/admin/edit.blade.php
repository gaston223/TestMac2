@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="col-md-12">
            <h2 class="mb-3">Modifier le profil de l'abonné :</h2>

            <div class="card card-default mt-5">
                <div class="card-header ">
                    <h5>Le Formulaire de modification: </h5>
                </div>
                <div class="card-body">
                    <form action="{{route('admin_update_profil', $user->id)}}" method="POST" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @error('email')has-danger @enderror">
                                    <label for="email">Votre E-mail</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Saisissez votre e-mail" name="email" value="{{$user->email}}">
                                    @error('email')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group @error('name')has-danger @enderror">
                                    <label for="prenom">Votre Prénom</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="prenom"  placeholder="Saisissez votre prénom" name="name" value="{{$user->name}}">
                                    @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group @error('lastname')has-danger @enderror">
                                    <label for="nom">Votre Nom</label>
                                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="nom" placeholder="Saisissez votre nom" name="lastname" value="{{$user->lastname}}">
                                    @error('lastname')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group @error('phone')has-danger @enderror">
                                    <label for="phone">Votre numéro de téléphone</label>
                                    <input type="number" class="form-control  @error('phone') is-invalid @enderror" id="phone" placeholder="Saisissez votre numéro de téléphone" name="phone" value="{{$user->phone}}">
                                    @error('phone')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group @error('adress')has-danger @enderror">
                                    <label for="adresse">Votre Adresse</label>
                                    <input type="text" class="form-control @error('adress') is-invalid @enderror" id="adresse" placeholder="Saisissez votre adresse" name="adress" value="{{$user->adress}}">
                                    @error('adress')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group @error('postcode')has-danger @enderror">
                                    <label for="postcode">Code Postal</label>
                                    <input type="number" class="form-control @error('postcode') is-invalid @enderror" id="postcode" placeholder="Saisissez votre Code Postal" name="postcode" value="{{$user->postcode}}">
                                    @error('postcode')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group @error('city')has-danger @enderror">
                                    <label for="ville">Ville</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" id="ville" placeholder="Saisissez votre ville" name="city" value="{{$user->city}}">
                                    @error('city')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group @error('comment')has-danger @enderror ">
                            <label for="comment">Votre commentaire</label>
                            {{--                                                                        <textarea class="form-control @error('comment') is-invalid @enderror" id="commentaire" rows="3" name="comment">{{$user->comment}}</textarea>--}}
                            <input id="comment" class="form-control @error('comment') is-invalid @enderror" type="hidden" name="comment" value="{{$user->comment}}">
                            <trix-editor input="comment"></trix-editor>
                            @error('comment')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>


    </div>

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
@endsection
@section('css')
    <style>
        #trix-toolbar-1{
            width: border-box;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection

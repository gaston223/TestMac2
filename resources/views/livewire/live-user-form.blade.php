<div>
    <h1>Trouver un contact</h1>

    <div class="container mt-5">
        <div class="col-md-8">
            <h2 class="mb-3">Gagnez en efficacité grâce au programme Mac 2 !</h2>

            <div class="card card-default mt-5">
                <div class="card-header ">
                    <h5>Votre formulaire d'adhésion : {{$name}}</h5>
                </div>
                <div class="card-body">

                    <form action="{{route('register')}}" method="POST" novalidate>
                        @csrf
                        <div class="row">

                            <div class="col-md-8">
                                <div class="form-group @error('adress')has-danger @enderror">
                                    <label for="name">Votre Contact</label>
                                    <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Trouver votre contact" name="name" autocomplete="off">
                                    @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group @error('postcode')has-danger @enderror">
                                    <label for="postcode">Code Postal</label>
                                    <input type="number" class="form-control @error('postcode') is-invalid @enderror" id="postcode" placeholder="Saisissez votre Code Postal" name="postcode">
                                    @error('postcode')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group @error('city')has-danger @enderror">
                                    <label for="ville">Ville</label>
                                    <input type="text"  wire:model="city" class="form-control @error('city') is-invalid @enderror" id="ville" placeholder="Saisissez votre ville" name="city">
                                    @error('city')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="form-group @error('comment')has-danger @enderror">
                            <label for="commentaire">Votre commentaire</label>
                            {{--                                    <textarea class="form-control @error('comment') is-invalid @enderror" id="commentaire" rows="3" name="comment"></textarea>--}}
                            <input id="comment" class="form-control @error('comment') is-invalid @enderror" type="hidden" name="comment">
                            <trix-editor input="comment"></trix-editor>
                            @error('comment')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Je m'abonne !</button>


                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

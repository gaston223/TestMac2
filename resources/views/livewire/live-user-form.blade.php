<div>

    @if(session()->has('message'))
        <div class="alert alert-info">
            {{session('message')}}
        </div>
    @endif
    <h1>Trouver un contact</h1>

    <div class="container mt-5">
        <div class="col-md-8">
            <h2 class="mb-3">Gagnez en efficacité grâce au programme Mac 2 !</h2>

                <div wire:loading>
                    Loading...
                </div>

            <div class="card card-default mt-5">
                <div class="card-header ">

                    <h5>Votre annuaire</h5>
                </div>
                <div class="card-body">

                    <form action="{{route('register')}}" method="POST" novalidate>
                        @csrf
                        <div class="row">

                            <div class="col-md-8">
                                <div class="form-group @error('adress')has-danger @enderror">
                                    <label for="name">Votre Contact</label>
                                    <input type="text" wire:model.debounce.1s="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Trouver votre contact" name="name" autocomplete="off">
                                    @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        @if(count($contacts)>0)
                            <div class="list-group">
                                @foreach($contacts as $contact)
                                    <div class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">{{$contact['name']}} </h5>
                                            <small class="text-muted">{{$contact['email']}}</small>
                                        </div>
                                        <p class="mb-1">{{$contact['city']}}</p>
                                        <small class="text-muted">📞 {{$contact['phone']}}</small>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary mt-3">Je m'abonne !</button>


                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

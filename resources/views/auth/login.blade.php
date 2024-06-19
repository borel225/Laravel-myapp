@extends('base')

@section('title','login')

@section('content')

 <div class="container ">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <h3 class="text-center text-muted mb-3 mt-5">veuillez vous connecter</h3>
                    <p class="text-center text-muted mb-3">vos articles vous attendent</p>
                     <form method="POST" action="{{Route('login')}}">
                    @csrf

                    @error('email')
                    <div class="alert alert-light text-center" role="alert">
                        {{$message}}
                      </div>
                    @enderror

                    @error('password')
                    <div class="alert alert-light text-center" role="alert">
                        {{$message}}
                      </div>
                    @enderror

                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus>

                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control mb-3 @error('password') is-invalid @enderror" required autocomplete="current-password">

                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember" {{old('remember') ? 'checked': ''}}>
                                <label class="form-check-label" for="remember">Souviens-toi de moi</label>
                              </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('app_forgotPassword')}}">Mot de passe oublié?</a>
                        </div>
                    </div>
                    <div class="d-grid gad-2">
                        <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
                    </div>
                    <p class="text-center text-muted mt-5">Vous n'avez pas de compte ? <a href="{{route('register')}}">Inscrivez-vous ici</a> </p>
                </form>
                </div>
            </div>
        </div>
@endsection

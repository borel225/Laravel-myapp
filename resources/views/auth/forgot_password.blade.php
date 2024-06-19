@extends('base')

@section('title','forgot_password')

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h3 class="text-center text-muted mb-3 mt-5">Mot de oublié</h3>
            <p class="text-center text-muted mb-3">Entrez l'e-mail que vous avez utilisé dans la creation de votre compte. Nous vous enverrons un e-mail de réinitialisation.</p>
             <form method="POST" action="{{Route('app_forgotPassword')}}">
            @csrf

            @error('email')
            <div class="alert alert-light text-center" role="alert">
                {{$message}}
              </div>
            @enderror

            <label for="email-send" class="form-label">Email</label>
            <input type="email" name="email-send" id="email-send" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus>
            <small class="text-danger fw-bold" id="error-resgister-email-send"></small>
            <div class="d-grid gad-2">
            <button type="submit" class="btn btn-primary mt-3 mb-5">Soumettre</button>
            </div>
            <p class="text-center text-muted">Connect toi <a href="{{route('login')}}">ici</a> </p>
        </div>
        </form>
        </div>
    </div>
</div>

@endsection

@extends('base')

@section('title', 'register')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h1 class="text-center mb-3 mt-3 text-muted">Inscription </h1>
            <p class="text-center text-muted mb-3">Inscrivez vous, si vous n'avez pas de compte</p>

            <form method="POST" action="{{route('register')}}" class="row g-3" id="form-register">
                @csrf

               <div class="col-md-5">
                <label for="firstname" class="form-label">Nom</label>
                <input type="text" class="form-control " id="firstname" name="firstname" value="{{old('firstname')}}" required autocomplete="firstname" autofocus onkeyup="this.value=this.value.toUpperCase()">
                <small class="text-danger fw-bold" id="error-resgister-firstname"></small>
              </div>

              <div class="col-md-7">
                <label for="lastname" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname')}}" required autocomplete="lastname" autofocus onkeyup="this.value=this.value.toUpperCase()">
                <small class="text-danger fw-bold" id="error-resgister-lastname"></small>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required autocomplete="email" url-existEmail="{{route('app_existEmail')}}" token="{{ csrf_token()}}"">
                <small class="text-danger fw-bold" id="error-resgister-email"></small>
              </div>

              <div class="col-md-6">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" required autocomplete="password" autofocus>
                <small class="text-danger fw-bold" id="error-resgister-password"></small>
                 </div>

                 <div class="col-md-6">
                <label for="password-confirm" class="form-label">Confirmation  Mot de passe</label>
                <input type="password" class="form-control" id="password-confirm" name="password-confirm" value="{{old('password-confirm')}}" required autocomplete="password-confirm" autofocus>
                <small class="text-danger fw-bold" id="error-resgister-password-confirm"></small>
              </div>

              <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="agrreetrems">
                    <label class="form-check-label" for="agrreetrems">Acceptez les condictions </label><br>
                    <small class="text-danger fw-bold" id="error-resgister-agrreetrems"></small>
                  </div>
              </div>

              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" id="register-user">S'inscrire</button>
              </div>
              <p class="text-center text-muted">Vous avez un compte ? <a href="{{route('login')}}">Connectez-vous ici</a> </p>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

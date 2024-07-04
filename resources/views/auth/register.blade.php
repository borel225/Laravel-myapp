@extends('base')

@section('title', 'register')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h1 class="text-center mb-2 mt-2 text-muted">Inscription </h1>
            <p class="text-center text-muted mb-3">Inscrivez vous, si vous n'avez pas de compte</p>

            <form method="POST" action="{{route('register')}}" class="row g-3" id="form-register">
                @csrf

               <div class="col-md-5">
                <label for="firstname" class="form-label">Nom</label>
                <input type="text" class="form-control " id="firstname" name="firstname" value="{{old('firstname')}}" required autocomplete="firstname" autofocus >
                <small class="text-danger fw-bold" id="error-resgister-firstname"></small>
              </div>

              <div class="col-md-7">
                <label for="lastname" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname')}}" required autocomplete="lastname" autofocus >
                <small class="text-danger fw-bold" id="error-resgister-lastname"></small>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <div class="input-group has-validation">
                  <span class="input-group-text">@</span>
                  <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{ old('email') }}" required autocomplete="email" url-existEmail="{{route('app_existEmail')}}" token="{{ csrf_token()}}">
                  <small class="text-danger fw-bold" id="error-resgister-email"></small>
                </div>
              </div>

              <div class="col-md-6">
                <label for="fonction" class="form-label">Fonction</label>
                <input type="text" class="form-control" id="fonction" name="fonction" value="{{old('fonction')}}" required autocomplete="fonction" autofocus>
                 </div>

                 <div class="col-md-6">
                    <label for="service" class="form-label">Service</label>
                    <input type="service" class="form-control" id="service" name="service" value="{{old('service')}}" required autocomplete="service" autofocus>
                    </div>

                     <div class="col-md-7">
                        <label for="choix" class="form-label">Niveau Hiérarchique</label>
                        <select class="form-select" id="choix" name="choix" >
                          <option value="option1">Agent</option>
                          <option value="option2">chef de cellule</option>
                          <option value="option3">chef de service</option>
                          <option value="option4">Directeur Adjoint</option>
                          <option value="option5">Directeur Département</option>
                          <option value="option6">Directeur Générale</option>
                        </select>
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

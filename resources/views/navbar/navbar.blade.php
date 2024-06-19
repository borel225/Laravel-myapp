
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">{{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName() =='app_home') active @endif " aria-current="page" href="{{route('app_home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::route()->getName() =='about') active @endif " aria-current="page" href="{{route('app_about')}}">About</a>
          </li>
        </ul>
      </div>
      {{--si l'utilisateur sait authentifier il faut masquer le bouton 'connexion' et 'enregistrement'--}}
      @guest
      <a href="{{Route('login')}}" class="btn btn-light btn-sm" role="button" style="margin-left:10%" aria-disabled="true">Connexion</a>
      <a href="{{Route('register')}}" class="btn btn-light btn-sm" role="button" aria-disabled="true">Inscription</a>
      @endguest

    {{--si l'utilisateur sait authentifier afficher le nom de l'utilisateur et le bouton deconnexion--}}
      @auth
      <a href="#" class="btn btn-light btn-sm" role="button" aria-disabled="true">{{ Auth::user()->name}}</a>
      <a href="{{Route('app_logout')}}" class="btn btn-light btn-sm" role="button"  aria-disabled="true">Deconnexion</a>
      @endauth
    </div>
  </nav>

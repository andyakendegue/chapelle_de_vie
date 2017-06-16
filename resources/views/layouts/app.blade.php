<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('summernote/summernote.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Blog<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="/home/blog/add">Ajouter un article</a></li>
                            <li><a href="/home/blog">Tous les articles</a></li>
                          </ul>

                        </li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Évènements<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="/home/evenements/add">Ajouter un évènement</a></li>
                            <li><a href="/home/evenements">Tous les évènements</a></li>
                            <li><a href="/home/evenements/inscription">Inscriptions</a></li>
                          </ul>

                        </li>


                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Sermons<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="#">Ajouter un sermon</a></li>
                            <li><a href="#">Tous les sermons</a></li>
                          </ul>

                        </li>


                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Versets<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="#">Ajouter un verset</a></li>
                            <li><a href="#">Tous les versets</a></li>
                          </ul>

                        </li>


                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Lieux<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="#">Ajouter un lieu</a></li>
                            <li><a href="#">Tous les lieux</a></li>
                          </ul>

                        </li>


                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Pasteurs<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="#">Ajouter un pasteur</a></li>
                            <li><a href="#">Tous les pasteurs</a></li>
                          </ul>

                        </li>



                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Témoignages<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="#">Ajouter un témoignage</a></li>
                            <li><a href="#">Tous les témoignages</a></li>
                          </ul>

                        </li>

                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">FAQ<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="#">Ajouter une question</a></li>
                            <li><a href="#">Toutes les questions</a></li>
                          </ul>

                        </li>


                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Galerie<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="#">Ajouter une image</a></li>
                            <li><a href="#">Toutes les images</a></li>
                          </ul>

                        </li>


                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Messages<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="#">Ajouter un article</a></li>
                            <li><a href="#">Tous les messages</a></li>
                          </ul>

                        </li>


                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Newsletter<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="#">Ajouter une newsletter</a></li>
                            <li><a href="#">Tous les abonnés</a></li>
                          </ul>

                        </li>


                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Dons<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">

                            <li><a href="#">Ajouter un don</a></li>
                            <li><a href="#">Tous les dons</a></li>
                          </ul>

                        </li>



                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/mail.js') }}"></script>

 <script src="{{ asset('summernote/summernote.min.js')}}"></script>
</body>
</html>

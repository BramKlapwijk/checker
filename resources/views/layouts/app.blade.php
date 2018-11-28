<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ url('/css/materialize.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('/css/custom.css') }}" rel="stylesheet" type="text/css">
        <title>Checker</title>
    </head>
    <body class="grey lighten-3">
        <nav>
            <div class="nav-wrapper teal">
                @if(!empty(session('user')))
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                @else
                    <a href="{{ url('/') }}" class="brand-logo center">Checker<i class="material-icons">check</i></a>
                @endif
            </div>
        </nav>
        <div class="container">
            <div class="section">
                @yield('content')
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                © 2018 a product by Bram Klapwijk
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
        <script src="{{ url('/js/jquery.js') }}"></script>
        <script src="{{ url('/js/materialize.min.js') }}"></script>
        <script src="{{ url('/js/custom.js') }}"></script>
        @yield('script')
    </body>
</html>

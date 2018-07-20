<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        
    </head>
    <body>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Todo list</h1>
                <p class="lead">Best todo app in the universe</p>
            </div>
        </div>

        <div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @elseif(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')}}
                </div>
            @endif
        </div>
        
        @yield('contenct')

        <footer class="footer bg-light">
            <div class="container">
                <div class="footer-copyright text-center py-3">© 2018 Copyright:
                    <a href="http://sahandcomputer.co"> sahandcomputer.co</a>
                </div>
            </div>
        </footer>
    </body>
</html>

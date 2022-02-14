<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Home videogames</title>
</head>
<body>

    <div class="container text-center">
        @auth
            <h2>Ciao {{Auth::user()->name}}</h2>
            <a class="btn btn-secondary" href="{{route('logout')}}">Logout</a>

            <h3 class="mt-2">La lista dei videogiochi</h3>
            <div id="app">
                <videogames-list></videogames-list>
            </div>
        @else
            <h2>Ciao! Per vedere e modificare la lista di videogiochi, accedi o registrati.</h2>
            <h3>Accedi</h3>
            <form action="{{asset('login')}}" method="post">
                @method('post')
                @csrf

                <input class="my-2" type="email" name="email" placeholder="Inserisci la tua email"><br>
                <input class="my-2" type="password" name="password" placeholder="Inserisci la tua password"><br>
                <input class="my-2 btn btn-primary" type="submit" value="Accedi"><br>
            </form>

            <h3>Registrati</h3>
            <form action="{{asset('register')}}" method="post">
                @method('post')
                @csrf

                <input class="my-2" type="text" name="name" placeholder="Inserisci il tuo nome utente"><br>
                <input class="my-2" type="email" name="email" placeholder="Inserisci la tua email"><br>
                <input class="my-2" type="password" name="password" placeholder="Inserisci la tua password"><br>
                <input class="my-2" type="password" name="password_confirmation" placeholder="Inserisci di nuovo la tua password"><br>
                <input class="my-2 btn btn-primary" type="submit" value="Registrati"><br>
            </form>
        @endauth
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
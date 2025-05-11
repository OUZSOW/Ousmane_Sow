<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Application de gestion de livres</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{url('/')}}">Accueil</a>
                </li>
                <li>
                    <a href="{{ url('/books') }}">Livres</a>
                </li>

        </nav>

    </header>
    



    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @yield('content')
    </div>

    <footer class="text-center text-muted py-3">
        <hr>
        <p>© {{ date('Y') }} - Gestion de Livres Laravel</p>
    </footer>
</body>
</html>

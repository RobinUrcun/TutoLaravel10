<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="p-10 relative min-h-screen">
    <nav class="flex flex-row justify-around
p-5">
        <a href="{{ route('index')}}">accueil</a>
        <a href="{{ route('boutique')}}">boutique</a>
        <a href="{{ route('addProduct')}}">Créer un produit</a>
        <a href="{{ route('getCategoriesList')}}">Liste des catégories</a>
        <a href="{{ route('getTagsList')}}">Liste des tags</a>
        @guest
        <a href="{{ route('login')}}">Se connecter</a>
        <a href="{{ route('signup')}}">Créer un compte</a>

        @endguest

        @auth

        {{ Auth::user()->name }}

        @endauth

        @auth
        <form action="{{ route('logout')}}" method="post">
            @csrf
            @method('DELETE')
            <button><img class="w-6 cursor-pointer" src="{{asset('images/logoutLogo.png')}}" alt="Déconnection"></button>
        </form>
        @endauth
    </nav>
    @yield('content')
    @if(session('success'))
    <div class=" pl-5 pr-5 pt-3 pb-3 rounded-sm absolute bottom-5 right-5 bg-green-300">
        {{ session('success')}}
    </div>
    @endif
</body>

</html>
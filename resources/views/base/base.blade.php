<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="p-10">
    <nav class="flex flex-row justify-around
p-5">
        <a href="{{ route('index')}}">accueil</a>
        <a href="{{ route('boutique')}}">boutique</a>
        <a href="{{ route('addProduct')}}">Créer un produit</a>
        <a href="{{ route('getCategoriesList')}}">Liste des catégories</a>
    </nav>
    @yield('content')
</body>
</html>
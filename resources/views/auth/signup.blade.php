@extends('base.base')

@section('title', 'Créer un compte')

@section('content')

<h1 class="grow-2 text-center text-3xl p-10">Créer un compte</h1>
<main class="flex flex-row justify-center">

    <form class="[min-width:400px] w-1/2" action="" method="post">
        @csrf

        <div class="w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="name">Pseudo :</label>
            <input class="border rounded-sm border-gray-300 flex-2" type="text" name="name" id="name" value="{{ @old('name')}}">
            @error('name')
            {{$message}}
            @enderror

        </div>
        <div class=" w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="email">Adresse e-mail :</label>
            <input class="border rounded-sm border-gray-300 flex-2" type="mail" name="email" id="email" value="{{ @old('email')}}">
            @error('email')
            {{$message}}
            @enderror
        </div>
        <div class=" w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="password">Mot de passe :</label>
            <input class="border rounded-sm border-gray-300 flex-2" type="password" name="password" id="password">
            @error('password')
            {{$message}}
            @enderror
        </div>
        <div class=" w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="password_confirmation">Confirmer mot de passe :</label>
            <input class="border rounded-sm border-gray-300 flex-2" type="password" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
            {{$message}}
            @enderror
        </div>
        <button class="mx-auto block mt-4 border rounded-sm bg-amber-300 pl-4 pr-4 pt-1 pb-1">Créer un comtpe</button>
    </form>

</main>

@endsection
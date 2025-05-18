@extends('base.base')

@section('title', 'Ajouter un tag')

@section('content')
<h1 class="text-center text-3xl p-10">{{ $tag->tag_name ? 'Modifier : '. $tag->tag_name : 'Créer un nouveau Tag'}}</h1>

<main class="flex flex-row justify-center">
    <form class="[min-width:400px] w-1/2" action="" method="post">
        @csrf

        <div class="w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="tag_name">Nom du Tag :</label>
            <input class="border rounded-sm border-gray-300  flex-2" type="text" name="tag_name" id="tag_name">
        </div>
        <button class="mx-auto block mt-4 border rounded-sm bg-amber-300 pl-4 pr-4 pt-1 pb-1">{{ $tag->tag_name ? 'Modifier' :'Nouveau Tag'}}</button>

    </form>
</main>
@endsection
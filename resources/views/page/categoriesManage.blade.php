@extends('base.base')

@section('title', 'Manage Cat')

@section('content')
<h1 class="text-center text-3xl p-10">{{$category->id ? 'Modifier ' . $category->category_name : 'Créer une catégorie '}}</h1>
<main class="flex flex-row justify-center">
    <form class="[min-width:400px] w-1/2" action="" method="post">
    @csrf
        <div class="w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="category_name">Nom de la catégorie :</label>
            <input  class="border rounded-sm border-gray-300  flex-2" type="text" name="category_name" id="category_name" value="{{ $category->category_name ?:''}}">
        </div>
        <button class="mx-auto block mt-4 border rounded-sm bg-amber-300 pl-4 pr-4 pt-1 pb-1">{{ $category->id ? 'Modifer' : 'Ajouter'}}</button>
    </form>
</main>
@endsection
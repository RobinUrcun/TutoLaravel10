@extends('base.base')

@section('title', "Créer un nouveau produit")

@section('content')

<h1 class="text-center text-3xl p-10">{{$product->id ? 'Modifier ' . $product->title : 'Créer un nouveau produit'}}</h1>
<main class="flex flex-row justify-center">
    <form class="[min-width:400px] w-1/2" action="" method="post">
        @csrf

        <div class="w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="title">Titre :</label>
            <input class="border rounded-sm border-gray-300  flex-2" type="text" name="title" id="title" value="{{ $product->title ?:''}}">
        </div>
        <div class="w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="price">Prix :</label>
            <input class="border rounded-sm border-gray-300 flex-2" type="text" name="price" id="price" value="{{ $product->price ?:''}}">
        </div>
        <div class="w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="description">Description :</label>
            <textarea class="border rounded-sm border-gray-300 flex-2" type="text" name="description" id="description">{{ $product->description ?:''}}</textarea>
        </div>
        <div class="w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="slug">Slug :</label>
            <input class="border rounded-sm border-gray-300 flex-2" type="text" name="slug" id="slug" value="{{ $product->slug ?:''}}">
        </div>
        <div class="w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="category_id">Selectionnez une catégorie :</label>
            <select for="category_id" name="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{ $category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="w-full flex flex-row pt-2 pb-2 gap-2">
            <label for="tag_id">Selectionnez un ou plusieurs tag(s) :</label>
            <select name="tag_id[]" id="tag_id" multiple class="border p-2 rounded">
                @foreach($tagsList as $tag)
                <option value="{{$tag->id}}">{{ $tag->tag_name}}</option>
                @endforeach
            </select>
        </div>
        <button class="mx-auto block mt-4 border rounded-sm bg-amber-300 pl-4 pr-4 pt-1 pb-1">{{$product->id ? 'Modifier' : 'Nouveau produit'}}</button>
    </form>
</main>
@endsection
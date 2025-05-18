@extends('base.base')

@section('title', 'Découvrez ce produit')


@section('content')

<div class="flex flex-row">
    <h1 class="text-center text-3xl p-10 grow-2">{{ $product->title}}</h1>
    <a href="{{route('manageProduct', ['id'=> $product->id])}}"><img src="{{ asset('images/customLogo.png')}}" alt="custom"></a>
</div>
<p><span class="font-bold">Description : </span>{{ $product->description }}</p>
<p><span class="font-bold">Prix : </span>{{ $product->price }} €</p>
<p><span class="font-bold">Catégorie : </span><a href="{{ route('categorie', ['id'=> $product->category_id])}}"></a>{{ $product->category->category_name }} </p>
<p><span class="font-bold">Tags :</span>
    @foreach($product->tags as $tag)
    <a href="{{route('tag', ['id'=> $tag->id])}}">
        {{ $tag->tag_name }}@if(!$loop->last), @endif
    </a>
    @endforeach
</p>
@endsection
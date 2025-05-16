@extends('base.base')

@section('title', 'Articles associés a une catégorie')

@section('content')
<h1 class="text-center text-3xl p-10">{{ $category->category_name}}</h1>

<main class="flex flex-col gap-10">
@if( $articles_list->all() )
 <h2 class="text-center text-2xl p-10">Articles associés</h2>
 <div class="flex flex-row gap-10">
 @foreach($articles_list as $article)

<div class="rounded-sm border-solid border-gray-200 border w-50 h-60 p-3">
        <a class="flex flex-col h-full" href="{{route('singleProduct', ['id' => $article->id])}}">
            <h2 class="p-2 text-center font-bold">{{$article->title}}</h2>
            <p class="grow-2 font-light">{{ $article->description}}</p>
            <p>{{$article->price}} €</p>
        </a>
    </div>
@endforeach 
    </div>
    
@else
<h2 class="text-center text-2xl p-10">Pas d'article trouvé</h2>
@endif
</main>
@endsection
@extends('base.base')

@section('title', 'Articles associé a ce tag')

@section('content')
<h1 class="grow-2 text-center text-3xl p-10">{{ $tag->tag_name }}</h1>
<main class="flex flex-col gap-10">
    <h2 class="text-center text-2xl p-10">Articles associés</h2>
    <div class="flex flex-row gap-10 flex-wrap">
        @foreach ($tag->articles as $article)
    <div class="rounded-sm min-w-40 border-solid border-gray-200 border w-50 h-60 p-3">
            <a class="flex flex-col h-full" href="{{ route('singleProduct', ['id'=> $article->id])}}">
                <h2 class="p-2 text-center font-bold">{{$article->title}}</h2>
                <p class="grow-2 font-light">{{ $article->description}}</p>
                <p>{{$article->price}} €</p>
            </a>
        </div>
    @endforeach
    </div>
</main>
@endsection
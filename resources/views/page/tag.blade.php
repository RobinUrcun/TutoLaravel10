@extends('base.base')

@section('title', 'Articles associé a ce tag')

@section('content')
<h1 class="grow-2 text-center text-3xl p-10">{{ $tag->tag_name }}</h1>
<main class="flex flex-col gap-10">
    <h2 class="text-center text-2xl p-10">Articles associés</h2>
    @foreach ($tag->articles as $article)

    <p>{{ $article->title }}</p>

    @endforeach
</main>
@endsection
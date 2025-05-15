@extends('base.base')

@section('title', 'Liste de catégories')

@section('content')
<div class="flex flex-row">
    <h1 class="grow-2 text-center text-3xl p-10">Liste de catégories</h1>
    <a href="/"><img src="{{ asset('images/customLogo.png')}}" alt="custom"></a>
    <a href="/"><img class="w-13 mt-2" src="{{ asset('images/addLogo.png')}}" alt="add"></a>
</div>


    @foreach($categories as $category)
        <p>{{$category?->category_name}}</p>
    @endforeach

@endsection
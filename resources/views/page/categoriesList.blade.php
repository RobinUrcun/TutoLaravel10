@extends('base.base')

@section('title', 'Liste de catégories')

@section('content')
<div class="flex flex-row items-center">
    <h1 class="grow-2 text-center text-3xl p-10">Liste de catégories</h1>
    
    <a href="{{route('addCategory')}}"><img class="w-13 " src="{{ asset('images/addLogo.png')}}" alt="add"></a>
</div>

<main class="flex flex-row gap-10 w-1/2 p-3 m-auto">

    <ul class="w-full">

    @foreach($categories as $category)
        <li class="flex flex-row items-center w-full">
            <a  class="block grow-2 w-1/3" href="{{route('categorie', ['id'=> $category->id])}}">{{$category?->category_name}}</a>
            <a class=" block  w-fit"s href="{{route('manageCategory', ['id'=> $category->id])}}"><img src="{{asset('images/customLogo.png')}}" alt="Modifier"></a>
        </li>
    @endforeach
    </ul>
</main>

@endsection
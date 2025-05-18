@extends('base.base')

@section('title','Visitez la boutique')

@section('content')
    <h1 class="text-center text-3xl p-10">La boutique</h1>

    <main class="flex flex-row gap-10 flex-wrap">
        @foreach($productList as $product)
        <div class="rounded-sm min-w-40 border-solid border-gray-200 border w-50 h-60 p-3">
            <a class="flex flex-col h-full" href="{{ route('singleProduct', ['id'=> $product->id])}}">
                <h2 class="p-2 text-center font-bold">{{$product->title}}</h2>
                <p class="grow-2 font-light">{{ $product->description}}</p>
                <p>{{$product->price}} €</p>
            </a>
        </div>
        @endforeach
    </main>
@endsection
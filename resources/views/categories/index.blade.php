<!-- categories/index.blade.php -->
@extends('app')

@section('title', 'Categories')

@section('content')
    <h1>Categories</h1>


    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->name }}</li>
            <ul>
                @foreach ($category->products as $product)

                    <li>{{$product->name}}</li>

                @endforeach
            </ul>
        @endforeach
    </ul>
@endsection

<!-- categories/index.blade.php -->
@extends('app')

@section('title', 'Categories')

@section('content')
    <h1>Add Categories</h1>


    <form action="/categories-add" method="post">
        @csrf
<input type="text" class="category" name="name">
<input type="text" name="description">
<input type="submit" value="ADD">

    </form>
@endsection

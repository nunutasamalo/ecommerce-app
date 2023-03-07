<!-- categories/index.blade.php -->
@extends('app')

@section('title', 'Product')

@section('content')
    <h1>Add Product</h1>


    <form action="/products-add" method="post" enctype="multipart/form-data">
        @csrf
        <select name="category_id" id="">Select Category
            @foreach ($category as $c)
            <option value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>

        <input type="text" class="category" name="name" placeholder="name">
        <input type="text" name="description" placeholder="desc">
<input type="text" name="price" placeholder="price">
<input type="file" name="image">
<input type="submit" value="ADD">

    </form>
@endsection

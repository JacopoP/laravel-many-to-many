@extends('layouts.main_layout')

@section('content')
    <h2 class="text-center">Create new product</h2>
    <form action="{{route('product.store')}}" method="POST" class="px-5">
        @csrf
        <label class="form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name">

        <label class="form-label" for="description">description</label>
        <textarea class="form-control" name="description" cols="30" rows="10">></textarea>

        <label class="form-label" for="price">Price</label>
        <input class="form-control" type="number" name="price">

        <label class="form-label" for="weight">Weight</label>
        <input class="form-control" type="text" name="weight">

        <label class="form-label" for="typology_id">Typology</label>
        <select name="typology_id" class="form-select">
            @foreach($typologies as $typology)
                <option value="{{$typology->id}}">{{$typology->name}}</option>
            @endforeach
        </select>
        
        <br>
        <h3>Categories</h3>
        @foreach($categories as $category)
            <input type="checkbox" name="categories[]" value="{{$category->id}}">
            <label class="form-label" for="categories">{{$category->name}}</label>
            <br>
        @endforeach
        <input type="submit" value="SAVE PRODUCT">
    </form>   
@endsection
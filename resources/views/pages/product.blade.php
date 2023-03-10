@extends('layouts.main_layout')

@section('content')
    <a href="{{route('product.create')}}" class="px-5">CREATE NEW PRODUCT</a>   
    @foreach ($products as $product)
        <section class="px-5">
            <h2>{{$product->name}}</h2>
            <h4>Code: {{$product->code}}</h4>
            <div>
                @isset($product->description)
                    {{$product->description}}<br>
                @endisset
                Price: {{$product->price}}<br>
                @isset($product->weight)
                    Weight: {{$product->weight}}<br>
                @endisset
                Typology: {{$product->typology->name}}<br>
                Digital: {{$product->typology->digital ? 'Yes' : 'No'}}
            </div>
            
            <h3>Categories</h3>
            <ul>
                @foreach($product->categories as $category)
                    <li>{{$category->name}}, {{$category->code}}</li>
                @endforeach
            </ul>
            <h4><a class="text-danger" href="{{route('product.delete', $product)}}">DELETE PRODUCT</a></h4>
            <h4><a class="text-primary" href="{{route('product.edit', $product)}}">EDIT PRODUCT</a></h4>
            <hr>
        </section>
    @endforeach   
@endsection
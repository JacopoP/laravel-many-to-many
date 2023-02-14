@extends('layouts.main_layout')

@section('content')
    @foreach ($categories as $category)
        <section class="px-5">
            <h2>{{$category->name}}</h2>
            <h4>Code: {{$category->code}}</h4>
            <p>{{$category->description}}</p>
            
            <h3>Products: {{$category->products->count()}}</h3>
    
            @foreach($category->products as $product)
                <h4 class="mt-1">{{$product->name}}</h4>
                <div>
                    {{$product->code}}<br>
                    Price: {{$product->price}}<br>
                    @isset($product->weight)
                        Weight: {{$product->weight}}<br>
                    @endisset
                    Typology: {{$product->typology->name}}<br>
                    Digital: {{$product->typology->digital ? 'Yes' : 'No'}}
                </div>
            @endforeach
            <hr>
        </section>
    @endforeach   
@endsection
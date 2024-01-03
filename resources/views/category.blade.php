
@extends('master')

@section('title')
    Category Page
@endsection

@section('body')
    <section class="py-5 bg-dark-subtle">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{asset($product['image'])}}" alt="" height="300px">
                            <div class="card-body">
                                <h3>{{$product['name']}}</h3>
                                <p>{{$product['price']}}</p>
                            </div>
                        </div>
                    </div>ma
                @endforeach
            </div>
        </div>
    </section>
@endsection

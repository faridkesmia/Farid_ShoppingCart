@extends('base_page')

@section('content')
<div class="container">
    <div class="row text-center">
        @if($products->isEmpty()) 
                <div class="alert alert-info py-5">There are NO Products yet in your store so Please <a class="" href="/add_Product">Add New ONE</a></div>
        @else
            @foreach($products as $product)
                <div class="col-md-3 col-sm-6 my-3">
                    <form action="{{route('add_to_cart_process')}}" method="POST">
                        @csrf 
                        <div class="card shadow">
                            <div>
                                <img src="{{'/assets/images/' .  $product['image']}}" alt="" class="img-fluid  cart-img-top" height="512" width="512">
                            </div>
                        
                            <div class="card-body">
                                <h5 class="card-title">{{$product['name']}}</h5>
                                <p class="card-text">{{$product['description']}}</p>
                                <h5> 
                                    <small><s class="text-secondary">${{$product['price'] + 10}}</s></small>
                                    <span class="price">>${{$product['price']}}</span>
                                </h5>
                                <button type="submit" class="btn btn-warning my-3"><img src="{{asset('svgs/shopping-cart.svg')}}"  id="icon" > Add To Cart</button>
                                <input type="hidden" name="product_id" value="{{$product['id']}}">
                            </div>
                        </div>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
     @if (session('success'))
            <div class="row">
                <div class="col-12 text-center">
                    <div class="alert alert-success">
                        <strong>{{ session('success') }}</strong>
                    </div>
                </div>
            </div>
        @endif
</div>
@endsection
@extends('base_page')

@section('content')

<div class="container">
    <div class="row py-5">

        @if($allCategory->isEmpty()) 
            <div class="alert alert-info py-5 text-center" >There are NO Categories yet in your store so Please <a class="" href="/add_Category">Add New Category</a></div>
        @else
            <div class="alert alert-info py-2 text-center" ><h1>Caregories </h1></div>

            @foreach ($allCategory as $item)
                <div class="col col-md-3 py-3">
                    <div class="card shadow">
                        <h5 class="text-center mt-3 md-3">
                            {{$item['name']}}
                            <a href="/products/{{$item['id']}}">
                                <img src="{{asset('assets/images/') . '/'. $item['image']}}" class="rounded img-fluid  cart-img-top" alt="">
                                <h6>{{$item['description']}}</h6>
                            </a>
                        </h5>
                    </div>
                    <div class="cart-body">
                        
                    </div>
                </div>
             @endforeach
        @endif
    </div>
</div>

@endsection
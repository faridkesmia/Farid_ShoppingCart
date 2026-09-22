@extends('base_page')

@section('content')
    <div class="container-fluid" style="margin-top:200px;margin-bottom:3000px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1  class="cart-title">The Future Shop - Enjoyableness of Shoppings in our Arcades</h1>
                    <p>This is Our First Project in Laraval Technology and php language </p>
                    <a href="AllCategories"><h3>Please, feel free to enter your shops</h3></a>
                </div>
            </div>
             @if (session('status'))
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="alert alert-success">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    
@endsection
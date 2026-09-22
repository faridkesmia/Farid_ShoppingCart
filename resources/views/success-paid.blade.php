@extends('base_page')

@section('content')
    <div class="row my-5">
        <div class="col-md-10 mx-auto">
            <div class="card-body text-center">
                <h1 class="text-success">Payment Successful</h1>
                <p>Your Payment has been successfully proceeded!</p>
                <a href="{{route('home')}}" class="btn btn-primary">Back To Shop</a>
            </div>
        </div>
    </div>
@endsection
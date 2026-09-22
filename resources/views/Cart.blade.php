@extends('base_page')

@section('content')
<div class="row my-5">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class="md-4">
                     <img src="{{asset('svgs/shopping-basket.svg')}}" class="mx-3"  width="40" height="40" />Your Shopping Card
                </h2>
                @if (empty($cart))
                    <div class="text-center alert alert-info">Your Cart is Empty</div>
                    <a href="/AllCategories" class="btn btn-primary">Go Back To Shop</a>
                @else 
                    <div class="table-responcive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td scop="col">Product</td>
                                    <td scop="col">Quantity</td>
                                    <td scop="col">Price</td>
                                    <td scop="col">Sub Total</td>
                                    <td scop="col"></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $item)
                                    <tr>
                                        <td><img src="{{asset('assets/images/' . $item['image'] )}}" alt="" width="60" height="60" class="rounded">&nbsp;&nbsp;{{$item['name']}}</td>
                                        <td>
                                            <form action="{{route('update_qty')}}" method="POST" class="d-flex gap-2">
                                                @csrf 
                                                @method("PUT")
                                                <input type="number" min="1" value="{{$item['qty']}}" class="form-control w-auto" name="qty">
                                                <button type="submit" class="btn btn-warning">UpDate Cart</button>
                                                <input type="hidden" name="product_id" value="{{ $item['id']}}">
                                            </form>
                                        </td>
                                        <td>$ {{ $item['price']}}</td>
                                        <td>$ {{ $item['price'] * $item['qty']}}</td>

                                        <td>
                                            <form action="{{route('delete_item')}}" method="POST" class="d-flex gap-2">
                                                @csrf 
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger btn-sm"><img src="{{asset('svgs/delete-cross-svgrepo-com.svg')}}" id="icon"/></button>
                                                <input type="hidden" name="product_id" value="{{ $item['id']}}">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-end fw-bold fs-5">Total :</td>
                                    <td class="text-danger">$ {{session()->get('CartItemTotal')}}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <form action="{{route('Clear_Cart')}}" method="POST" class="d-flex gap-2">
                            @csrf 
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit"><img src="{{asset('svgs/trash-alt.svg')}}" id="icon"/> Clear Cart</button>
                        </form>
                        <a href="{{ route('order.pay') }}" class="btn btn-success">Proccess To Payment</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
        @if (session('success'))
            <div class="row">
                <div class="col-12 text-center">
                    <div class="alert alert-info">
                        <strong>{{ session('success') }}</strong>
                    </div>
                </div>
            </div>
        @endif


@endsection
@extends('base_page')

@section('content')
    <div class="container">
         <br>
            <br>
        <div class="row">
           
            <div class="col-12 alert alert-primary">
                <h3>Add A new Product to your Store</h3>
            </div>
        </div>

            {{-- @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->any() as $error)
                            <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}


        <div class="row">
            <div class="col-12 ">
                @if($allCategory->isEmpty()) 
                    <div class="alert alert-info py-5">There are NO Categories yet in your store so, please make one befor adding any product, <a class="" href="/add_Category"> Click: Add New ONE >>></a></div>
                @else

                    <div class="table-responcive">
                            <form action="{{route('add_product_process')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scop="col">Product Name</th>
                                            <th scop="col">Image</th>
                                            <th scop="col">Price</th>
                                            <th scop="col">Description</th>
                                            <th scop="col">Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="name" placeholder="your Product" class="form-control" required></td>
                                                @error('name')
                                                    <span class="text-danger my-3">{{ $message }}</span>    
                                                @enderror
                                            <td><input type="file" name="image" class="form-control"></td>
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            <td><input type="number" name="price" min="1" class="form-control" value="1"></td>
                                                @error('price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            <td><input type="text" name="description" class="form-control"></td>
                                                @error('description')
                                                    <span class="text-danger my-3">{{ $message }}</span>
                                                @enderror
                                            <td><select name="categories_id" id="" class="form-control">
                                                    @foreach ($allCategory as $item)
                                                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                                                    @endforeach
                                                </select> 
                                            </td>
                                                
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr><td colspan="4"><button type="submit" class="btn btn-primary">Validing</button></td></tr>
                                    </tfoot>
                                </table>
                            </form>
                    </div>
                @endif
           
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
@endsection
@extends('base_page')

@section('content')
    <div class="container">
         <br>
            <br>
        <div class="row">
           
            <div class="col-12 alert alert-info">
                <h3>Add A new Category to your Store</h3>
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
               <div class="table-responcive">
                    <form action="{{route('registration-process')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scop="col">Category Name</th>
                                    <th scop="col">Category Image</th>
                                    <th scop="col">Category Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="name" placeholder="Category name" class="form-control" required></td>
                                        @error('name')
                                            <span class="text-danger my-3">{{ $message }}</span>    
                                        @enderror
                                    <td><input type="file" name="image" class="form-control"></td>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <td><input type="text" name="description" class="form-control"></td>
                                        @error('description')
                                            <span class="text-danger my-3">{{ $message }}</span>
                                        @enderror
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr><td colspan="4"><button type="submit" class="btn btn-primary">Validing</button></td></tr>
                            </tfoot>
                        </table>
                    </form>
               </div>
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
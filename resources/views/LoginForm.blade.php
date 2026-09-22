@extends('base_page')
@section('content')
<div class="container">
	<div class="row my-5">
		<div class="col-12 col-lg-6">
			<h3>Log in</h3>
			<p>Login today for better experience.</p>
			<form action="{{route('Login.Proccess')}}" method="POST">
				@csrf
				
				
				<div class="form-group row">
					<label class="col-lg-3 col-form-label" for="email">Email</label>
					<div class="col-lg-9">
						<input type="email" placeholder="Email" class="form-control" name="email" value="{{old('email')}}"/>
						@error('email')
							<span role="alert" class="text-danger">{{$message}}</span>
						@enderror						
						<br/>
					</div>
				</div>
                <div class="form-group row">
					<label class="col-lg-3 col-form-label" for="password">	Password</label>
					<div class="col-lg-9">
						<input type="password" placeholder="Password" class="form-control" name="password"/>
						@error('password')
							<span role="alert" class="text-danger">{{$message}}</span>
						@enderror
					</div>
				</div>
                <div class="form-group row justify-content-end">
					<div class="col-lg-9 my-2">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" name="remember" {{old('remember') =='on'? 'checked':''}}/>
							<label class="form-check-label" for="remember">Remember Me</label>
						</div>
					</div>
				</div>
                <div class="form-group row justify-content-end">
					<div class="col-lg-9">
						<button class="btn btn-md btn-secondary" type="submit">Sign in</button>
					</div>
				</div>
            </form>
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
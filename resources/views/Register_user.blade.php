@extends('base_page')
@section('content')
<div class="container">
	<div class="row my-5">
		<div class="col-12 col-lg-6">
			<h3>Register</h3>
			<p>Register today for better experience.</p>
			<form action="{{route('Register.Proccess')}}" method="POST">
				@csrf
				<div class="form-group row">
					<label class="col-lg-3 col-form-label" for="name">Name</label>
					<div class="col-lg-9">
						<input type="name" placeholder="Your Name" class="form-control" name="name"  value="{{old('name')}}"/>
						@error('name')
							<span role="alert" class="text-danger">{{$message}}</span>
						@enderror
						<br/>
					</div>
				</div>
				
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
				<div class="form-group row my-3">
					<label class="col-lg-3 col-form-label" for="password_confirmation">Confirm pass</label>
					<div class="col-lg-9">
						<input type="password" placeholder="Password" class="form-control" name="password_confirmation" name="password_confirmation"/>
					</div>
				</div>
				
				<div class="form-group row justify-content-end">
					<div class="col-lg-9">
						<button class="btn btn-md btn-secondary" type="submit">Register</button>
					</div>
				</div>
			</form>															
		</div>
	</div>
</div>
@endsection
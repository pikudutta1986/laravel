@include('shared/header')
<div class="container">
    <h1 class="page-title">Create your dealer account</h1>
    <div class="row">
		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
				
				<div class="card" style="margin-bottom:50px;">
					<div class="card-header">Register</div>
					<div class="card-body text-left">
						<form action="{{ route('store') }}" method="post">
							<div class="mb-3 row">
								<label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
								<div class="col-md-6">
									<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
									@if ($errors->has('name'))
									<span class="text-danger">{{ $errors->first('name') }}</span>
									@endif
								</div>
							</div>
							<div class="mb-3 row">
								<label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
								<div class="col-md-6">
									<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
									@if ($errors->has('email'))
									<span class="text-danger">{{ $errors->first('email') }}</span>
									@endif
								</div>
							</div>
							<div class="mb-3 row">
								<label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
								<div class="col-md-6">
									<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
									@if ($errors->has('password'))
									<span class="text-danger">{{ $errors->first('password') }}</span>
									@endif
								</div>
							</div>
							<div class="mb-3 row">
								<label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
								<div class="col-md-6">
									<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
								</div>
							</div>
							<div class="mb-3 row">
								<div class="textright">
									<button type="submit" class="col-md-3 offset-md-5 btn btn-primary">Register</button>
								</div>
							</div>
							
						</form>
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>
<style>
	.ui-shadow{
		border:none !important;
		background-color:#fff !important;
		text-shadow: none !important;
		box-shadow: none !important;
	}
	
	.textright{
		position:releative;
		float:right;
	}
	
	.btn-primary{
	  background: #108a00 !important;
	  color: #fff !important;
	  font-weight: 400 !important;
	  font-size: 16px !important;
	  opacity: 1 !important;
	  text-indent: 1px !important;
	  padding: 5px 10px;
	  border-radius: 4px;
	}
</style>
@include('shared/footer')

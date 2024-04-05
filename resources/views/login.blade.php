@include('shared/header')
<div class="container">
    <h1 class="page-title">Login</h1>
    <div class="row">
		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
				
				<div class="card" style="margin-bottom:50px;">
					<div class="card-header">Login</div>
					<div class="card-body text-left">
						<form action="{{ route('authenticate') }}" method="post">
							@csrf
							<div class="mb-3 row" style="text-align:left;">
								<label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
								<div class="col-md-6">
									<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
									@if ($errors->has('email'))
									<span class="text-danger">{{ $errors->first('email') }}</span>
									@endif
								</div>
							</div>
							<div class="mb-3 row" style="text-align:left;">
								<label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
								<div class="col-md-6">
									<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
									@if ($errors->has('password'))
									<span class="text-danger">{{ $errors->first('password') }}</span>
									@endif
								</div>
							</div>
							<div class="mb-3 row" style="text-align:left;">
								<div class="textright">
									<button type="submit" class="col-md-3 offset-md-5 btn btn-primary">Login</button>
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
